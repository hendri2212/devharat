<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function chart(Request $request) 
    {
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

        $labelsString = "['" . implode("', '", $labels) . "']";
        $dataPointsString = "[" . implode(", ", $dataPoints) . "]";

        $school = School::all();
        return view('layouts.idea.grafik', compact('labelsString', 'dataPointsString', 'school'));
    }
}
