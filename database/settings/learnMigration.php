<?php
class Blueprint
{
    public $col_schema = [
        // "id INT NULL",
        // "view BIG INT NULL COMMENT 'adf'",
        // "email VARCHAR 50 NULL COMMENT 'adf'",
    ];

    public $index = 0;

    public function push()
    {
        if(count($this->col_schema)){
            $this->index++;
        }
    }

    public function bigint($name)
    {
        $this->push();
        $this->col_schema[$this->index] = "$name INT ";
        return $this;
    }
    
    public function string($name, $size=100)
    {
        $this->push();
        $this->col_schema[$this->index] = "$name VARCHAR($size) ";
        return $this;
    }
    
    public function text($name)
    {
        $this->push();
        $this->col_schema[$this->index] = "$name TEXT ";
        return $this;
    }

    public function null()
    {
        $this->col_schema[$this->index] .= " DEFAULT NULL ";
        return $this;
    }

    public function unique()
    {
        $this->col_schema[$this->index] .= " UNIQUE ";
        return $this;
    }
}
class DBSchema
{
    protected $table_name = '';
    public function create($table_name, $callback)
    {
        $this->table_name = $table_name;
        $table = new Blueprint();
        $callback($table);

        $query = "CREATE TABLE $table_name ( ";
        $query .= implode(" COLLATE 'utf8_general_ci' , ",$table->col_schema);
        $query .= " COLLATE 'utf8_general_ci'";
        $query .= ' ) ';
        // print_r([$table->col_schema, $query]);

        $check_exist = globalvar('db')->query("SHOW TABLES LIKE '$table_name'")  or die("Error: " . globalvar('db')->error);
        if ($check_exist->num_rows) {
            globalvar('db')->query("DROP table " . $table_name);
        }

        echo "\n $table_name creating \n";
        mysqli_query($GLOBALS['db'], $query) or die( mysqli_error($GLOBALS['db']) );
    }
}

class Schema{
    public static function __callStatic($method, $args){
        $obj = new DBSchema();
        $obj->$method(...$args);
        return $obj;
    }
}

class CommentTable
{
    public function up()
    {
        Schema::create('test_table', function (Blueprint $table) {
            
            $table->bigint('id')->unique();
            $table->string('email',50)->null();
            $table->text('title')->null();
        });

        Schema::create('test_table2', function (Blueprint $table) {
            $table->bigint('id')->unique();
            $table->string('title',50)->null();
            $table->text('description')->null();
        });
    }
}

$table = new CommentTable;
$table->up();

// class Location{
//     public static function __callStatic($method, $args){
//         $obj = new ManageLocation();
//         $obj->$method(...$args);
//         return $obj;
//     }
// }
