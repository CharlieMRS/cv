<?php

namespace App\Http\Controllers;

use App\Job;
use App\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        /** @var Job[] $jobs */
        $jobs = Job::with('duties')->get();

        $dutiesByCategoryByJob = $jobs->keyBy('company')->each(function($job){
            $job->dutiesByCategory = $job->duties->groupBy(function ($duty, $key){
                return $duty->tag->name;
            });
        });
        return view('cv', ['jobs' => $dutiesByCategoryByJob]);
    }
}
