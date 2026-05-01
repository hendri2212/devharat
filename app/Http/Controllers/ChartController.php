<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Quiz;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function chart(Request $request) 
    {
        if (auth()->user()->id != 1) {
            return redirect('/idea');
        }

        $schoolId = $request->query('school_id', 0); 

        if ($schoolId == 0) {
            $result = DB::select(DB::raw("
                SELECT c.community, COUNT(*) AS quiz_count
                FROM quizzes q
                JOIN communities c ON q.community_id = c.id
                WHERE q.id IN (
                    SELECT MIN(q2.id)
                    FROM quizzes q2
                    GROUP BY q2.user_id
                )
                GROUP BY c.id, c.community
            "));
        } else {
            $result = DB::select(DB::raw("
                SELECT c.community, COUNT(*) AS quiz_count
                FROM quizzes q
                JOIN communities c ON q.community_id = c.id
                WHERE q.school_id = :schoolId AND q.id IN (
                    SELECT MIN(q2.id)
                    FROM quizzes q2
                    WHERE q2.user_id = q.user_id
                    GROUP BY q2.user_id
                )
                GROUP BY c.id, c.community
            "), ['schoolId' => $schoolId]);
        }

        $labels = [];
        $dataPoints = [];
        foreach ($result as $val) {
            $labels[] = $val->community;
            $dataPoints[] = $val->quiz_count;
        }
        
        $labelsString = json_encode($labels);
        $dataPointsString = json_encode($dataPoints);

        $school = School::all();

        // Ambil data user berdasarkan sekolah yang dipilih
        if ($schoolId == 0) {
            $users = DB::table('users')
                ->join('quizzes', 'users.id', '=', 'quizzes.user_id')
                ->join('communities', 'quizzes.community_id', '=', 'communities.id')
                ->select('users.name', 'users.email', 'communities.community')
                ->whereIn('quizzes.id', function($query) {
                    $query->select(DB::raw('MIN(id)'))
                        ->from('quizzes')
                        ->groupBy('user_id');
                })
                ->get();
        } else {
            $users = DB::table('users')
                ->join('quizzes', 'users.id', '=', 'quizzes.user_id')
                ->join('communities', 'quizzes.community_id', '=', 'communities.id')
                ->select('users.name', 'users.email', 'communities.community')
                ->where('quizzes.school_id', $schoolId)
                ->whereIn('quizzes.id', function($query) {
                    $query->select(DB::raw('MIN(id)'))
                        ->from('quizzes')
                        ->groupBy('user_id');
                })
                ->get();
        }

        return view('layouts.idea.grafik', compact('labelsString', 'dataPointsString', 'school', 'result', 'users'));
    }
}