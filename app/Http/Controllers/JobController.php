<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Arr;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with('employer' , 'tags')->get()->groupBy('featured');

        return view('jobs.index' , [
            'featuredJobs' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $att = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required' , Rule::in(['Full Time' , 'Part Time'])],
            'url' => ['required' , 'url'],
            'tags' => ['nullable'],
        ]);

        $att['featured'] = $request->has('featured');


        $job = Auth::user()->employer->jobs()->create(Arr::except($att , 'tags'));
        if($att['tags'] ?? false){
            foreach(explode(',' , $att['tags']) as $tag){
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
