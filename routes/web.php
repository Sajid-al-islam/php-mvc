<?php
include_once('./routes/Route.php');

$app = new Route();
$app->get('/','WebsiteController@home');
$app->get('/about','WebsiteController@about');
$app->get('/gallery','WebsiteController@gallery');
$app->get('/job','WebsiteController@job');
$app->get('/job-details','WebsiteController@job_details')->params('id','title');
$app->get('/user/profile-details','WebsiteController@profile_details')->params('userId');

$app->get('/contact','WebsiteController@contact');
$app->post('/contact/submit','ContactController@contact_submit');

$app->get('/login','WebsiteController@login');
$app->get('/register','WebsiteController@register');
$app->post('/register/submit','WebsiteController@register_submit');
$app->post('/login/submit','WebsiteController@login_submit');
$app->get('/logout','Auth\AuthController@logout');

$app->get('/admin','Admin\AdminController@admin');
$app->get('/admin/jobs','Admin\AdminController@job_list');

$app->get('/admin/locations','Admin\AdminController@location_list');
$app->get('/admin/location/create','Admin\AdminController@location_create');

$app->get('/admin/job/create','Admin\AdminController@job_create');
$app->post('/admin/job/create/store','Admin\AdminController@job_create_store');



$app->start();