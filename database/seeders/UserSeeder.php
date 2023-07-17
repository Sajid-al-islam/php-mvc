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
            'first_name' => 'mr',
            'second_name' => 'tarek',
            'email' => 'tarek@gmail.com',
            'phone_number' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
        $user->insert([
            'first_name' => 'sharif',
            'second_name' => 'ahmed',
            'email' => 'sharif@gmail.com',
            'phone_number' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
        $user->insert([
            'first_name' => 'shefatullah',
            'second_name' => 'masum',
            'email' => 'shefat@gmail.com',
            'phone_number' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
    }
}
