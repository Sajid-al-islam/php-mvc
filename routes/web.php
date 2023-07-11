<?php
include_once('./routes/Route.php');

$app = new Route();
$app->get('/','WebsiteController@home');
$app->get('/about','WebsiteController@about');
$app->get('/gallery','WebsiteController@gallery');
$app->get('/blog','WebsiteController@blog');
$app->get('/blog-details','WebsiteController@blog_details')->params('id','title');
$app->get('/user/profile-details','WebsiteController@profile_details')->params('userId');

$app->get('/contact','WebsiteController@contact');
$app->post('/contact/submit','ContactController@contact_submit');

$app->get('/login','WebsiteController@login');
$app->post('/login/submit','WebsiteController@login_submit');
$app->get('/logout','Auth\AuthController@logout');

$app->get('/admin','Admin\AdminController@admin');
$app->get('/admin/blogs','Admin\AdminController@blog_list');
$app->get('/admin/blog/create','Admin\AdminController@blog_create');
$app->post('/admin/blog/create/store','Admin\AdminController@blog_create_store');

$app->start();