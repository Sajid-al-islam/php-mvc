<?php
namespace Command;
class MakeController{
    public function __construct($controller_name) {
        $path = '';
        $namespace = '';
        $main_controller_name = $controller_name;
        $list = explode('/',$controller_name);
        if(count($list)){
            $main_controller_name = $list[count($list)-1];
            unset($list[count($list)-1]);
            $namespace = '\\'.implode('\\',$list);
            $path = implode('/',$list);
        }

        $content = "<?php
namespace App\Http\Controllers$namespace;
class $main_controller_name
{
    
}";
        
        if($path != ''){
            $path = "App/Http/Controllers/$path";
            if(!file_exists($path)){
                print_r($path);
                mkdir($path, 0777, true);
            }
        }

        if(file_exists("$path/$main_controller_name.php")){
            echo "$main_controller_name already exists ";
        }else{
            file_put_contents("$path/$main_controller_name.php",$content);
            echo "$main_controller_name created successfully ";
        }
    }
}