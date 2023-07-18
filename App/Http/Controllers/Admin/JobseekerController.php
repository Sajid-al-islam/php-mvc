<?php
namespace App\Http\Controllers\Admin;
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
}