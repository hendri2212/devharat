<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function pieChart() 
    {
        $result = DB::select(DB::raw("SELECT COUNT(user_id) as quiz_count, communities.community
        FROM quizzes
        LEFT JOIN communities ON communities.id = quizzes.community_id
        GROUP BY quizzes.community_id, communities.community;
        "));
        
        $labels = [];
        $dataPoints = [];

        foreach ($result as $val) {
            $labels[] = $val->community;
            $dataPoints[] = $val->quiz_count;
        }

        
        $labelsString = "['" . implode("', '", $labels) . "']";
        $dataPointsString = "[" . implode(", ", $dataPoints) . "]";

        return view('layouts.idea.grafik', compact('labelsString', 'dataPointsString'));
    }
}
