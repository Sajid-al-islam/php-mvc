<?php

namespace App\Abstracts;

class Session
{
    public function put($index = 0, $data = '')
    {
        if ($index) {
            $_SESSION[$index] = $data;
        } else {
            $_SESSION[count($_SESSION)] = $data;
        }
    }

    public function get($index = 0)
    {
        return isset($_SESSION[$index]) ? $_SESSION[$index] : '';
    }

    public function all()
    {
        $session_data = (object) $_SESSION;
        return $session_data;
    }

    public function forget($index)
    {
        if(isset($_SESSION[$index])){
            unset($_SESSION[$index]);
        }
    }

    public function old($index)
    {
        if(isset($_SESSION['old']->$index)){
            return $_SESSION['old']->$index;
        }
        
        return '';
    }
}
