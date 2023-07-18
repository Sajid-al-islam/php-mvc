<?php

namespace database\seeders;

use App\Models\Location;

class LocationSeeder
{
    public function run()
    {

        $job = new Location();
        $job->truncate();

        $job->insert([
            'name' => "Newzland",
        ]);
        $job->insert([
            'name' => "America",
        ]);
        $job->insert([
            'name' => "Iraq",
        ]);
        $job->insert([
            'name' => "Bagdad",
        ]);
        $job->insert([
            'name' => "Tehran",
        ]);
        $job->insert([
            'name' => "Silicon valley",
        ]);
    }
}
