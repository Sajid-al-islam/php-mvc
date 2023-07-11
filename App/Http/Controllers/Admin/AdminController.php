<?php
namespace App\Http\Controllers\Admin;

use App\Models\Blog;

class AdminController
{
    public function __construct() {
        if( !session()->get('is_auth')){
            return redirect('/login');
        }
    }
    public function admin()
    {
        return view('admin/admin');
    }

    public function blog_list()
    {
        $blog = new Blog();
        return view('admin/blogList',[
            'blogs' => $blog->select('*')->get()
        ]);
    }
   
    public function blog_create()
    {
        return view('admin/createBlog');
    }

    public function blog_create_store()
    {
        $blog = new Blog();
        $image_name = 'uploads/'.time().$_FILES["image"]["name"];
        move_uploaded_file($_FILES["image"]["tmp_name"],'public/'.$image_name);

        $inserted_data = $blog->insert([
            'title' => request()->title,
            'description' => request()->description,
            'image' => $image_name,
        ]);

        session()->put('success_message','blog created successfully');
        return back();

        // $image = new \Intervention\Image\Image();
        // $image->make('/public/1.jpg');
        // $img->save('newimage.jpg');
        // dd($inserted_data,$_FILES,assets('1.jpg'));
    }
}