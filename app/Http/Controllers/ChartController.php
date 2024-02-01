<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function index() 
    {
        $result = DB::SELECT(DB::RAW("SELECT c.community, q.quiz_count
            FROM communities c
            JOIN (
                SELECT q.community_id, COUNT(*) AS quiz_count
                FROM quizzes q
                WHERE q.id = (
                    SELECT MIN(id)
                    FROM quizzes q2
                    WHERE q2.user_id = q.user_id
                )
                AND q.school_id = 1
                GROUP BY q.community_id
            ) q ON c.id = q.community_id
        "));
        
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
