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

        $secretKey = "6LebkTUnAAAAAIxBcVW_4DrmhrrcNk4aC6QTOXW4";

        // Verify reCAPTCHA response
        $response = $_POST['g-recaptcha-response'];
        $remoteIP = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $data = array(
            'secret' => $secretKey,
            'response' => $response,
            'remoteip' => $remoteIP
        );

        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $recaptchaResponse = json_decode($result);

        if ($recaptchaResponse->success) {
            if(request()->password !== request()->confirm_password) {
                session()->put('register_error_message','Password and confirm password does not match!');
                return back();
            }

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

            extract((array) request());
            $check = auth()->login(request()->email, request()->password);

            if ($check) {
                if(auth()->user('role') == 'admin') {
                    return redirect('/admin/jobs');
                }else {
                    return redirect('/jobseeker/jobs');
                }
            } else {
                return back();
            }
            // return redirect('/jobseeker/jobs');
        } else {
            // reCAPTCHA verification failed, show an error message or take appropriate action
            // ...
            session()->put('register_error_message','reCAPTCHA verification failed');
            return back();
        }

        
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
    public function job_details($job_id)
    {
        $job = new Job();

        $data = $job->select('*')->where('id', '=', $job_id)->find($job_id);

        // dd($data, $job_id);
        return view('frontend/job_details', [
            'data' => $data,
        ]);
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
            if(auth()->user('role') == 'admin') {
                return redirect('/admin/jobs');
            }else {
                return redirect('/jobseeker/jobs');
            }
        } else {
            return back();
        }
    }
}
