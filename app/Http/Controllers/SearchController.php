<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $job = Job::with(['tags', 'employer'])
        ->where('title', 'LIKE', '%' . request('q') . '%')
        ->get();

        return view('results', ['jobs' => $job]);
    } 
}
