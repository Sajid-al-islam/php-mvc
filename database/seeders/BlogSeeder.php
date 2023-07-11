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
            'title' => "learn html ",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "t amet consectetur, adipisicing elit. ",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "adipisicing elit. Enim mole",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "dolor sit amet consectetur, adipisicing elit ",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => " sit amet consectetur ",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
        $blog->insert([
            'title' => "Lorem ipsum dolor sit amet consectetur ",
            'description' => "
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim molestiae modi officia beatae! Necessitatibus, corrupti cupiditate itaque, voluptatum vero id magni nemo aspernatur quae fugit officia dolor soluta adipisci minima.
            ",
            'image' => '1.jpg',
        ]);
    }
}
