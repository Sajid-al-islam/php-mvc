<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Location;
use App\Models\User;
use Symfony\Component\VarDumper\Cloner\Data;

class WebsiteController
{
    public function home()
    {
        $job = new Job();
        return view('frontend/home', [
            'jobs' => $job->select('*')->get()
        ]);
    }

    public function not_authorized() {
        return view('frontend/not_authorized');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function register_submit() {

        $user = new User();


        $inserted_data = $user->insert([
            'role' => 'jobseeker',
            'first_name' => request()->first_name,
            'second_name' => request()->second_name,
            'age' => request()->age,
            'email' => request()->email,
            'phone_number' =>request()->phone_number,
            'password' => md5(request()->password)
        ]);

        session()->put('register_success_message','Signed up successfully!');
        return redirect('/admin');
    }

    public function jobs($location=null)
    {
        
        $location_get = new Location();
        $job = new Job();

        if(isset($location)) {
            $data = $job->select('*')->where('location', '=' ,$location)->get();
            $locations = $location_get->select('*')->get();

            return view('jobs', [
                'data' => $data,
                'locations' => $locations
            ]);
        }

        $data = $job->select('*')->get();
        $locations = $location_get->select('*')->get();

        return view('jobs', [
            'data' => $data,
            'locations' => $locations
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function job()
    {
        echo " job list";
    }
    public function job_details($id, $title)
    {
        echo " job details";
        // dd($_REQUEST);
        dd($id, $title);
    }
    public function profile_details()
    {
        echo "profile details";
        dd($_REQUEST);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function login_submit()
    {
        extract((array) request());
        $check = auth()->login($email, $password);

        if ($check) {
            return redirect('/');
        } else {
            return back();
        }
    }
}
