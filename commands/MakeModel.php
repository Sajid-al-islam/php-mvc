<?php
namespace Command;
include_once(realpath('vendor/autoload.php'));
use Doctrine\Inflector\InflectorFactory;

class MakeModel
{
    public $model_name = "";
    public $table_name = "";
    public function __construct($model_name)
    {
        $this->model_name = $model_name;
        $inflector = InflectorFactory::create()->build();
        $this->table_name = $inflector->tableize($model_name);
        $this->table_name = $inflector->pluralize($this->table_name);

        echo "\n creating {$this->table_name} migration file";
        $this->create_migration_file();

        echo "\n creating {$this->table_name} model file";
        $this->create_model_file();
    }

    public function create_model_file()
    {
        $model_name = $this->model_name;
        $content = "<?php
namespace App\Models;

class $model_name extends Model{
    
}
";
        if(!file_exists("App/Models/$model_name.php")){
            file_put_contents("App/Models/$model_name.php", $content);
        }else{
            echo "\n model already exists";
        }
    }

    public function create_migration_file()
    {
        $table_name = $this->table_name;
        $model_name = $this->model_name;
        $migration_name = $model_name.'Migration';

        $content = "<?php
include_once(realpath('database/settings/Blueprint.php'));
include_once(realpath('database/settings/DBSchema.php'));

class $migration_name
{
    public function up()
    {
        Schema::create('$table_name', function (Blueprint \$table) {
            \$table->id();

            \$table->status();
            \$table->timestamp();
        });
    }
}

";
        if(!file_exists("database/migrations/$migration_name.php")){
            file_put_contents("database/migrations/$migration_name.php", $content);
        }else{
            echo "\n migration already exists";
        }
    }
}
