<?php

namespace database\seeders;

use App\Models\Job;
use App\Models\User;

class JobSeeder
{
    public function run()
    {

        $job = new Job();
        $job->truncate();

        $job->insert([
            'title' => "Full stack web developer",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $job->insert([
            'title' => "Php developer",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $job->insert([
            'title' => "MERN stack developer",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $job->insert([
            'title' => "Digital marketing specialist",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $job->insert([
            'title' => "SEO Expert",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $job->insert([
            'title' => "Technical writer",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
    }
}
