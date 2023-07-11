<?php
class DBSchema
{
    public $table = "";
    public $columns = [];

    public function create($table_name, $callback)
    {
        $blue_print = new Blueprint();
        call_user_func($callback, $blue_print);

        $this->table = $table_name;
        $this->columns = $blue_print->column_shemas;

        $this->make_table();
    }

    public function make_table()
    {
        $table_name = $this->table;
        $query = "CREATE TABLE $table_name ( ";
        $query .= implode(" COLLATE 'utf8_general_ci' , ",$this->columns);
        $query .= ' ) ';
        
        echo "\ndropping $table_name table \n";
        $this->drop_table();
        echo "dropped $table_name table \n";
        
        echo "\ncreating $table_name table \n";
        mysqli_query(globalvar('db'), $query) or die(mysqli_error(globalvar('db')));
        echo "created $table_name table \n";
    }

    public function drop_table()
    {
        $table_name = $this->table;
        $check_exist = globalvar('db')->query("SHOW TABLES LIKE '$table_name'")  or die("Error: " . globalvar('db')->error);
        if ($check_exist->num_rows) {
            globalvar('db')->query("DROP table " . $table_name);
        }
    }
}

class Schema
{
    public static function __callStatic($method, $args)
    {
        $db = new DBSchema();
        $db->$method(...$args);
    }
}
