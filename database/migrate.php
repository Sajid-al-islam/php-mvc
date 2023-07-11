<?php
include(realpath('App/Config.php'));
include(realpath('App/Helper.php'));

// include(realpath('database/migrations/UserMigration.php'));
// include(realpath('database/migrations/UserRoleMigration.php'));
// include(realpath('database/migrations/BlogMigration.php'));


// $table = new UserMigration();
// $table->execute();

// $table = new UserRoleMigration();
// $table->execute();

// $table = new BlogMigration();
// $table->execute();
$db = mysqli_connect(
    globalvar('servername'), 
    globalvar('username'), 
    globalvar('password'), 
    globalvar('database')
);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$files = array_diff(scandir(realpath('database/migrations')), array('.', '..'));

foreach ($files as $file) {
    include realpath('database/migrations/'.$file);

    $migration_class = explode('.',$file)[0];
    $migration = new $migration_class();
    $migration->up();
}

// $query = "INSERT INTO comments (view,email,title,description,deleted_at) 
//                 VALUES (10,'a@g.com','this is title','<h1>aldsfl afl </h1><p>asdfafdf</p>','2022-11-08 02:36:04')";
// $db->query($query);

