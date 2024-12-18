<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(3);

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id)  {
   $job=Job::find($id);

    return view('job',['job'=> $job]);
});
Route::get('/about', function () {
    return view('about');
});