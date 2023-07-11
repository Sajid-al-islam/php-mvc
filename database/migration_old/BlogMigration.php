<?php

include_once(realpath('database/migrations/MigrateSchema.php'));

class BlogMigration
{

    public $db;
    public $table_name = 'blogs';
    public $query = '';

    public function __construct()
    {
        $this->db = mysqli_connect(globalvar('servername'), globalvar('username'), globalvar('password'), globalvar('database'));
        if (!$this->db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $table_name = $this->table_name;
        $this->query .= "CREATE TABLE $table_name (";
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

    public function create_table(MigrateSchema $table)
    {   
        $this->query .= $table->id();
        $this->query .= $table->name('title')->string()->notNull()->unique()->make();
        $this->query .= $table->name('category')->bigint()->notNull()->make();
        $this->query .= $table->name('description')->text()->notNull()->make();
        $this->query .= $table->name('thumb_image')->string()->notNull()->make();
        $this->query .= $table->name('creator')->bigint()->unsigned()->notNull()->make();
        $this->query .= $table->name('seo_title')->string(70)->null()->make();
        $this->query .= $table->timestamp();
        // print_r($this->query);
    }

    public function execute()
    {
        $this->drop_table();
        $this->create_table(new MigrateSchema());
        $this->query .= ")";
        mysqli_query($this->db, $this->query) or die(mysqli_error($this->db));
        $table_name = $this->table_name;
        echo "* $table_name table has been migrated \n";
    }
}
