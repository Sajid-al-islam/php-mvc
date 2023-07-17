<?php

namespace database\seeders;

use App\Models\Blog;
use App\Models\User;

class BlogSeeder
{
    public function run()
    {

        $blog = new Blog();
        $blog->truncate();

        $blog->insert([
            'title' => "Full stack web developer",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "Php developer",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "MERN stack developer",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "Digital marketing specialist",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "SEO Expert",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "Technical writer",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
    }
}
