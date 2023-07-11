<?php
class Blueprint
{
    public $column_shemas = [];
    public $column_index = 0;

    public function push_column()
    {
        if (count($this->column_shemas)) {
            $this->column_index++;
        }
        array_push($this->column_shemas, "");
    }

    public function append($query){
        $this->column_shemas[$this->column_index] .= $query;
    }

    public function id()
    {
        $this->push_column();
        $this->append("id BIGINT UNSIGNED NOT NULL UNIQUE PRIMARY KEY AUTO_INCREMENT COMMENT 'this is primary key' ");
    }
    public function string($column_name, $size = 150)
    {
        $this->push_column();
        $this->append("$column_name VARCHAR($size) ");
        return $this;
    }
    public function text($column_name)
    {
        $this->push_column();
        $this->append("$column_name TEXT ");
        return $this;
    }
    public function integer($column_name)
    {
        $this->push_column();
        $this->append("$column_name INT ");
        return $this;
    }
    public function bigInteger($column_name)
    {
        $this->push_column();
        $this->append("$column_name BIGINT ");
        return $this;
    }
    public function tinyint($column_name)
    {
        $this->push_column();
        $this->append("$column_name TINYINT ");
        return $this;
    }
    public function unsigned()
    {
        $this->append(" UNSIGNED ");
        return $this;
    }
    public function nullable()
    {
        $this->append(" DEFAULT NULL ");
        return $this;
    }
    public function default($value = '')
    {
        $this->append(" DEFAULT '$value' ");
        return $this;
    }
    public function comment($value = '')
    {
        $this->append(" COMMENT '$value' ");
        return $this;
    }
    public function unique()
    {
        $this->append(" UNIQUE ");
        return $this;
    }
    public function status($default = 1)
    {
        $this->push_column();
        $this->append(" status TINYINT DEFAULT '$default' ");
        return $this;
    }
    public function created_at()
    {
        $this->push_column();
        $this->append(" created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ");
    }
    public function updated_at()
    {
        $this->push_column();
        $this->append(" updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ");
    }
    public function deleted_at()
    {
        $this->push_column();
        $this->append(" deleted_at TIMESTAMP NULL ");
    }
    public function timestamp()
    {
        $this->created_at();
        $this->updated_at();
        $this->deleted_at();
    }
}
