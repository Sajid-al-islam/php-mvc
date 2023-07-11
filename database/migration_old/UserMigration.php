<?php

class UserMigration
{

    public $db;
    public $table_name = 'users';
    public $query = '';

    public function __construct()
    {
        $this->db = mysqli_connect(globalvar('servername'), globalvar('username'), globalvar('password'), globalvar('database'));
        if (!$this->db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully \n";
    }

    public function __destruct()
    {
        mysqli_close($this->db);
        $table_name = $this->table_name;
        echo "\n $table_name connection closed \n";
    }

    public function drop_table()
    {
        $table_name = $this->table_name;
        $check_exist = $this->db->query("SHOW TABLES LIKE '$table_name'")  or die("Error creating table: " . $this->db->error);
        if ($check_exist->num_rows) {
            $this->db->query("DROP table " . $this->table_name);
        }
    }

    public function create_table()
    {
        $this->query = "CREATE TABLE users (
                    id BIGINT UNSIGNED NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT COMMENT 'this is primary key' ,
                    username varchar(100) NOT NULL COLLATE 'utf8_general_ci',
                    phone_number varchar(100) NOT NULL COLLATE 'utf8_general_ci',
                    address TEXT DEFAULT NULL COLLATE 'utf8_general_ci',
                    email varchar(70) NOT NULL COLLATE 'utf8_general_ci' UNIQUE,
                    photo varchar(100) DEFAULT NULL COLLATE 'utf8_general_ci',
                    password varchar(100) NOT NULL COLLATE 'utf8_general_ci',
                    status TINYINT DEFAULT 1,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    deleted_at TIMESTAMP NULL
            )
        ";
    }

    public function execute()
    {
        $this->drop_table();
        $this->create_table();
        mysqli_query($this->db, $this->query) or die(mysqli_error($this->db));
        $table_name = $this->table_name;
        echo "* $table_name table has been migrated \n";
    }
}
