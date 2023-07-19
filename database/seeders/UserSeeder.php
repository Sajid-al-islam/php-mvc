<?php

namespace database\seeders;
use App\Models\User;

class UserSeeder
{
    public function run()
    {
        
        $user = new User();
        $user->truncate();

        $user->insert([
            'role' => 'jobseeker',
            'first_name' => 'mr',
            'second_name' => 'jobseeker',
            'email' => 'jobseeker1@gmail.com',
            'phone_number' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
        $user->insert([
            'role' => 'jobseeker',
            'first_name' => 'mr',
            'second_name' => 'jobseeker2',
            'email' => 'sharif@gmail.com',
            'phone_number' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
        $user->insert([
            'role' => 'admin',
            'first_name' => 'mr',
            'second_name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone_number' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
    }
}
