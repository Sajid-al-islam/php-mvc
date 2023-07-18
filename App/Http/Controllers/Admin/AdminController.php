<?php
namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\Job;
use App\Models\Location;

class AdminController
{
    public function __construct() {
        if( !session()->get('is_auth')){
            return redirect('/login');
        }
    }
    public function admin()
    {
        return view('admin/admin');
    }

    public function job_list()
    {
        $job = new Job();
        return view('admin/jobList',[
            'jobs' => $job->select('*')->get()
        ]);
    }

    public function location_list()  {
        $location = new Location();
        return view('admin/locationList',[
            'locations' => $location->select('*')->get()
        ]);
    }

    public function job_edit($id) {
        $job = new Job();

        $data = $job->select('*')->where('id', '=', $id)->find($id);
        $locations = new Location();

        return view('admin/editJob', [
            'data' => $data,
            'locations' => $locations->select('*')->get()
        ]);
    }

    public function job_details($job_id)
    {
        $job = new Job();

        $data = $job->select('*')->where('id', '=', $job_id)->find($job_id);

        // dd($data, $job_id);
        return view('admin/job_details', [
            'data' => $data,
        ]);
    }

    public function job_delete($job_id)
    {
        $job = new Job();

        $data = $job->where('id', '=', $job_id)->delete();

        // dd($data, $job_id);
        return back();
    }
   
    public function job_create()
    {
        $locations = new Location();
        return view('admin/createJob', [
            'locations' => $locations->select('*')->get()
        ]);
    }

    public function location_create()
    {
        
        return view('admin/locationCreate');
    }

    public function job_create_store()
    {
        $job = new Job();
        $image_name = 'uploads/'.time().$_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"],'public/'.$image_name);

        $inserted_data = $job->insert([
            'title' => request()->title,
            'location' => request()->location,
            'description' => request()->description,
            'image' => $image_name,
        ]);

        session()->put('success_message','Job created successfully');
        return back();
    }

    public function job_update($id)
    {
        $job = new Job();
        $job_check = $job->select('*')->where('id', '=', $id)->find();
        

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $image_name = 'uploads/' . time() . $_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"], 'public/' . $image_name);
            
        } else {
            
            $image_name = $job_check->image;
        
        }
        

        $job->where('id', '=', $id)->update([
            'title' => request()->title,
            'location' => request()->location,
            'description' => request()->description,
            'image' => $image_name,
        ]);
        

        session()->put('success_message','Job updated successfully');
        return redirect('/admin/jobs');
    }
}