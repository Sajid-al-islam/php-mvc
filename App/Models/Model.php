<?php

namespace App\Models;

class Model
{
    public $db;
    public $table_name = '';
    public $query = "";
    public $select_query = "SELECT ";
    public $where_query = "";
    public $order_query = "";

    public function __construct()
    {
        $this->db = mysqli_connect(globalvar('servername'), globalvar('username'), globalvar('password'), globalvar('database'));
        if (!$this->db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $this->table_name = $this->get_class_name();
        // echo "Connected successfully <br>";
    }

    public function __destruct()
    {
        mysqli_close($this->db);
        // $table_name = $this->table_name;
        // echo "<br>$table_name connection closed";
    }

    public function drop()
    {
        $this->query = "DROP TABLE ".$this->table_name;
        return $this->query_run($this->query);   
    }

    public function truncate()
    {
        $this->query = "TRUNCATE TABLE ".$this->table_name;
        return $this->query_run($this->query);   
    }

    public function query_run($query)
    {
        $result = mysqli_query($this->db, $query) ;
        if($result){
            return $result;
        }else{
            die(mysqli_error($this->db));
            return (object) [];
        }
    }

    public function get_class_name($class = '')
    {
        if ($class == '') {
            $class = $this;
        }
        $class_name = get_class($class);
        $class_name = explode("\\", $class_name);
        $class_name = $class_name[count($class_name) - 1];
        // $class_name = strtolower($class_name);
        // $class_name = $class_name . 's';

        //('ModelName'); // model_name
        $class_name = inflector()->tableize($class_name);
        // ('browser'); // browsers
        $class_name = inflector()->pluralize($class_name);
        
        return $class_name;
    }

    public function insert($data = [])
    {
        $table_name = $this->table_name;
        $fields = implode(",", array_keys($data));
        $values = "\"". implode("\",\"", array_values($data)) . "\"";

        $query= "INSERT INTO $table_name ($fields) VALUES ($values)";

        $query = str_replace("'","\\'",$query);

        // dd($query);

        $this->query_run($query);
        $get_inserted_id = mysqli_insert_id($this->db);
        $data['id'] = $get_inserted_id;

        return $data;
    }

    public function update($data = [])
    {
        $table_name = $this->table_name;
        $where_query = $this->where_query;

        $set_query = " SET ";
        foreach ($data as $key => $value) {
            $set_query .= " $key = \"$value\", ";
        }
        $set_query = rtrim($set_query,", ");

        $query = "UPDATE $table_name $set_query";

        if($where_query != ""){
            $query .= " $where_query";
        }

        $this->query_run($query);

        return $data;
    }

    public function delete()
    {
        $table_name = $this->table_name;
        $where_query = $this->where_query;

        if( $where_query != ""){
            $query = "DELETE FROM $table_name $where_query";
        }else{
            die("cant be delete without condition");
        }
        return $this->query_run($query);
    }

    public function get()
    {
        $table_name = $this->table_name;
        $select_query = $this->select_query;
        $where_query = $this->where_query;
        $order_query = $this->order_query;

        $query = "$select_query FROM $table_name ";

        if ($where_query != "") {
            $query .= $where_query;
        }

        if ($order_query != "") {
            $query .= $order_query;
        }

        $result = $this->query_run($query);

        $data = false;
        for ($i = 0; $i < $result->num_rows; $i++) {
            $data[] = mysqli_fetch_object($result);
        }

        return $data;
    }

    public function find()
    {
        $table_name = $this->table_name;
        $select_query = $this->select_query;
        $where_query = $this->where_query;
        $order_query = $this->order_query;

        $query = "$select_query FROM $table_name ";

        if ($where_query != "") {
            $query .= $where_query;
        }

        if ($order_query != "") {
            $query .= $order_query;
        }

        $result = $this->query_run($query);

        $data = false;
        for ($i = 0; $i < $result->num_rows; $i++) {
            $data = mysqli_fetch_object($result);
        }

        return $data;
    }


    public function select($param = "*")
    {
        $params = func_get_args();
        if (count($params)) {
            $this->select_query .= implode(',', $params) . " ";
        } else {
            $this->select_query .= " * ";
        }
        return $this;
    }

    public function where($column, $condition, $value)
    {
        if ($this->where_query == "") {
            $this->where_query .= "WHERE $column $condition \"$value\" ";
        } else {
            $this->where_query .= "AND $column $condition \"$value\" ";
        }
        return $this;
    }

    public function orderBy($column, $condition)
    {
        $this->order_query .= "ORDER BY $column $condition";
        return $this;
    }
}
