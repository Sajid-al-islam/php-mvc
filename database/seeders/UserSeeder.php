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
            'name' => 'tarek',
            'email' => 'tarek@gmail.com',
            'contact' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
        $user->insert([
            'name' => 'sharif',
            'email' => 'sharif@gmail.com',
            'contact' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
        $user->insert([
            'name' => 'shefat',
            'email' => 'shefat@gmail.com',
            'contact' => '+8801256456253',
            'password' => md5('12345678'),
        ]);
    }
}
