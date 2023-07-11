<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;

class AuthController
{
    public function check()
    {
        // dd(session()->get('is_auth'));
        return session()->get('is_auth');
    }

    public function info()
    {
        return session()->get('user');
    }

    public function user($index)
    {
        return session()->get('user')->$index;
    }

    public function logout()
    {
        session()->forget('user');
        session()->put('is_auth', false);
        return redirect('/');
    }

    public function login($email, $password)
    {
        $user = new User();
        $data = $user->select()->where('email','=',$email)->find();
        if($data){
            if($data->password == md5($password)){
                session()->put('user',$data);
                session()->put('is_auth',true);
                return true;
            }else{
                session()->put('error_message','password does not matched');
                return false;
            }
        }else{
            session()->put('error_message','email incorrect');
            return false;
        }
    }
}
