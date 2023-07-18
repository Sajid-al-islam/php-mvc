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
            'description' => request()->description,
            'image' => $image_name,
        ]);

        session()->put('success_message','Job created successfully');
        return back();

        // $image = new \Intervention\Image\Image();
        // $image->make('/public/1.jpg');
        // $img->save('newimage.jpg');
        // dd($inserted_data,$_FILES,assets('1.jpg'));
    }
}