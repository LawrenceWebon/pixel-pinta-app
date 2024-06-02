<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('jobs.index', [
//         'jobs' => Job::all(),
//         'tags' => Tag::all(),
//     ]);
// });

Route::get('/', [JobController::class, 'index']);
