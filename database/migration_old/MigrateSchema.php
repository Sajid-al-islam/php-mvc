<?php

class MigrateSchema
{
    public $col_structure = '';
    public $col_name = '';

    // public function __construct($col_name)
    // {
    //     $this->col_name = $col_name;
    //     $this->col_structure = "CREATE TABLE users (";
    // }

    public function name($name)
    {
        $this->col_structure = "
        $name ";
        return $this;
    }

    public function id()
    {
        $id = (string) $this->col_structure .= "
        id BIGINT UNSIGNED NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT COMMENT 'this is primary key' ,";
        $this->col_structure = "";
        return $id;
    }

    public function add_something()
    {
        $this->col_structure = " added new ";
        return $this;
    }

    public function int()
    {
        $this->col_structure .= " INT ";
        return $this;
    }

    public function bigint()
    {
        $this->col_structure .= " BIGINT ";
        return $this;
    }

    public function unsigned()
    {
        $this->col_structure .= " UNSIGNED ";
        return $this;
    }

    public function string($size = 150)
    {
        $this->col_structure .= " varchar($size) ";
        return $this;
    }

    public function text()
    {
        $this->col_structure .= " TEXT ";
        return $this;
    }

    public function notNull()
    {
        $this->col_structure .= " NOT NULL ";
        return $this;
    }

    public function null()
    {
        $this->col_structure .= " DEFAULT NULL ";
        return $this;
    }

    public function unique()
    {
        $this->col_structure .= " UNIQUE ";
        return $this;
    }

    public function status($default = 1)
    {
        $this->col_structure .= " status TINYINT DEFAULT $default, ";
        return $this;
    }

    public function timestamp()
    {
        $this->col_structure .= " 
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,";
        $this->col_structure .= " 
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,";
        $this->col_structure .= " 
        deleted_at TIMESTAMP NULL";

        $time = $this->col_structure;
        $this->col_structure = "";
        return $time;
    }

    public function make()
    {
        $final_query_string =  (string) $this->col_structure;
        $final_query_string .= " COLLATE 'utf8_general_ci' ,";
        $this->col_structure = "";
        return $final_query_string;
    }
}
