<?php

namespace database\seeders;

use App\Models\Role;

class RoleSeeder
{
    public function run()
    {
        $role = new Role();
        $role->truncate();
        
        $role->insert([
            'title' => 'super_admin',
        ]);
        $role->insert([
            'title' => 'admin',
        ]);
        $role->insert([
            'title' => 'user',
        ]);
    }
}
