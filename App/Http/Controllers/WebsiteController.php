<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Symfony\Component\VarDumper\Cloner\Data;

class WebsiteController
{
    public function home()
    {
        $blog = new Blog();
        return view('frontend/home', [
            'blogs' => $blog->select('*')->get()
        ]);
    }

    public function register()
    {
        return view('auth/register');
    }

    public function register_submit() {

        // dd(request()->all())
        $user = new User();


        $inserted_data = $user->insert([
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

    public function about()
    {
        $user = new User();
        $data = $user->select('*')->get();
        return view('about', ['data' => $data]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        echo " blog list";
    }
    public function blog_details($id, $title)
    {
        echo " blog details";
        // dd($_REQUEST);
        // dd($id, $title);
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
