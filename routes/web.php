<?php
include_once('./routes/Route.php');

$app = new Route();
$app->get('/','WebsiteController@home');
$app->get('/not_authorized','WebsiteController@not_authorized');
$app->get('/jobs','WebsiteController@jobs');
$app->get('/gallery','WebsiteController@gallery');
$app->get('/job','WebsiteController@job');

$app->get('/job-details','WebsiteController@job_details')->params('id');
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

$app->get('/admin/job/edit','Admin\AdminController@job_edit')->params('id');
$app->post('/admin/job/edit/update','Admin\AdminController@job_update')->params('id');


$app->get('/admin/job/details','Admin\AdminController@job_details')->params('id');
$app->get('/admin/job/delete','Admin\AdminController@job_delete')->params('id');


// jobseeker routes

$app->get('/job/apply_now','Admin\JobseekerController@apply_now')->params('id');
$app->get('/jobseeker/dashboard','Admin\JobseekerController@dashboard');
$app->get('/jobseeker/jobs','Admin\JobseekerController@job_lists');
$app->get('/jobseeker/job/details','Admin\JobseekerController@job_details')->params('id');
$app->get('/jobseeker/job/details','Admin\JobseekerController@job_details')->params('id');
$app->get('/jobseeker/job/add_to_favourite','Admin\JobseekerController@add_to_favourite')->params('id');
$app->get('/jobseeker/my_applied_jobs','Admin\JobseekerController@applied_jobs');
$app->get('/jobseeker/my_favourite_jobs','Admin\JobseekerController@my_favourite_jobs');
$app->get('/jobseeker/remove_from_favourite','Admin\JobseekerController@remove_from_favourite')->params('id');


$app->start();