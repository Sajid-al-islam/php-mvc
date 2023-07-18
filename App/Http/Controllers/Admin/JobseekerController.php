<?php
namespace App\Http\Controllers\Admin;

use App\Models\FavouriteJob;
use App\Models\Job;
use App\Models\JobApplication;

class JobseekerController
{
    public function __construct() {
        if( !session()->get('is_auth')){
            return redirect('/login');
        }
    }
    public function dashboard()
    {
        return view('jobseeker/dashboard');
    }

    public function job_lists()
    {
        $job = new Job();
        return view('jobseeker/jobList',[
            'jobs' => $job->select('*')->get()
        ]);
    }

    public function job_details($job_id)
    {
        $job = new Job();

        $data = $job->select('*')->where('id', '=', $job_id)->find($job_id);

        // dd($data, $job_id);
        return view('jobseeker/job_details', [
            'data' => $data,
        ]);
    }

    public function add_to_favourite($job_id)
    {
        if( !session()->get('is_auth')){
            return redirect('/login');
        }

        $favourite_job = new FavouriteJob();

        $check = $favourite_job->select('*')->where('jobseeker_id', '=', auth()->user('id'))->where('job_id', '=', $job_id)->find($job_id);
        
        if($check) {
            session()->put('job_error_message','The job is already in you favourite list!');
            return back();
        }

        $favourite_job = $favourite_job->insert([
            'job_id' => $job_id,
            'jobseeker_id' => auth()->user('id'),
        ]);

        session()->put('job_success_message','The job is added to the favourite list!');
        return back();
    }

    public function applied_jobs()  {
        $jobapplication = new JobApplication();

        $job_ids = $jobapplication->select('*')->where('jobseeker_id', '=' ,auth()->user('id'))->get();

        // dd($job_ids);
        $job_lists = [];
        foreach ($job_ids as $key => $job_id) {
            $job = new Job();

            $data = $job->select('*')->where('id', '=', $job_id->job_id)->find($job_id);

            array_push($job_lists, $data);
            
        }

        return view('jobseeker/my_applied_jobs', [
            'job_lists' => $job_lists,
        ]);
    }

    public function my_favourite_jobs() {
        $job_favourite = new FavouriteJob();

        $job_ids = $job_favourite->select('*')->where('jobseeker_id', '=' ,auth()->user('id'))->get();

        // dd($job_ids);
        $job_lists = [];
        foreach ($job_ids as $key => $job_id) {
            $job = new Job();

            $data = $job->select('*')->where('id', '=', $job_id->job_id)->find($job_id);

            array_push($job_lists, $data);
            
        }

        return view('jobseeker/my_favourite_jobs', [
            'job_lists' => $job_lists,
        ]);
    }

    public function remove_from_favourite($job_id)  {
        $job = new FavouriteJob();

        $data = $job->where('job_id', '=', $job_id)->delete();

        // dd($data, $job_id);
        session()->put('job_success_message','Job removed from the favourite list');
        return back();
    }

    public function apply_now($job_id)
    {
        if( !session()->get('is_auth')){
            return redirect('/login');
        }

        $job_apply = new JobApplication();

        $check = $job_apply->select('*')->where('jobseeker_id', '=', auth()->user('id'))->where('job_id', '=', $job_id)->find($job_id);
        
        if($check) {
            session()->put('job_error_message','You have already applied for this job!');
            return back();
        }

        $job_apply = $job_apply->insert([
            'job_id' => $job_id,
            'jobseeker_id' => auth()->user('id'),
        ]);

        session()->put('job_success_message','Applied for this job successfully');
        return back();
        // dd($data, $job_id);
    }
}