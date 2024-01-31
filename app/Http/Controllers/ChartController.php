<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function pieChart() 
    {
        // $result = DB::select(DB::raw("SELECT COUNT(user_id) as quiz_count, communities.community
        // FROM quizzes
        // LEFT JOIN communities ON communities.id = quizzes.community_id
        // GROUP BY quizzes.community_id, communities.community;
        // "));

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
          GROUP BY q.community_id
        ) q ON c.id = q.community_id"));
        
        $labels = [];
        $dataPoints = [];

        foreach ($result as $val) {
            $labels[] = $val->community;
            $dataPoints[] = $val->quiz_count;
        }

        
        $labelsString = "['" . implode("', '", $labels) . "']";
        $dataPointsString = "[" . implode(", ", $dataPoints) . "]";

        return view('layouts.idea.grafik', compact('labelsString', 'dataPointsString'));
        // return $result;
    }
}
