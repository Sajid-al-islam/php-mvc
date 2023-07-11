<?php
include_once(realpath('App/Config.php'));
include_once(realpath('App/Helper.php'));
include_once(realpath('vendor/autoload.php'));

$files = array_diff(scandir(realpath('database/seeders')), array('.', '..'));
foreach ($files as $file) {
    // echo "$file \n";
    // include realpath('database/seeders/' . $file);

    $class_name = explode('.',$file)[0];
    $class_name = "database\seeders\\$class_name";
    $seed = new $class_name();
    echo "$class_name running \n";
    $seed->run();
    echo "$class_name completed \n\n";
    
}