<?php

use App\Abstracts\Session;
use App\Http\Controllers\Auth\AuthController;
use Doctrine\Inflector\InflectorFactory;

function view($file_name, $arr = [])
{
    if (is_array($arr) && count($arr)) {
        extract($arr);
    }
    include_once($_SERVER['DOCUMENT_ROOT'] . "/resource/views/$file_name.php");
}

function assets($file_name)
{
    $url = strtolower(explode('/', $_SERVER['SERVER_PROTOCOL'])[0]) . '://';
    $url .= $_SERVER['HTTP_HOST'];
    return $url . "/public/$file_name";
}

function session(){
    return new Session();
}

function auth(){
    return new AuthController();
}

function request()
{
    return (object) $_REQUEST;
}

function resource_include($file_name, $arr = [])
{
    if (is_array($arr) && count($arr)) {
        extract($arr);
    }
    include_once($_SERVER['DOCUMENT_ROOT'] . "/resource/views/$file_name.php");
}

function globalvar($variable)
{
    return $GLOBALS[$variable];
}

function inflector()
{
    $inflector = InflectorFactory::create()->build();
    return $inflector;
}

function back(){
    return header("Location:".$_SERVER['HTTP_REFERER']);
}
function redirect($path){
    return header("Location:".$path);
}