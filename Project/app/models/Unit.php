<?php

class Unit extends Model
{
    public function lastID(){
        $query = "SELECT unitid FROM $this->table ORDER BY unitid DESC LIMIT 1";
        $result = $this->query($query);

        return $result;
    }

    public function update($id, $data, $column = 'unitid')
    {
        $keys = array_keys($data);
        $query = "update $this->table set ";

        foreach ($keys as $key) {
        $query .= $key . " = :" . $key . ", ";
        }

        $query = trim($query, ", ");

        $query .= " where $column = :$column";

        $data[$column] = $id;
        $this->query($query, $data);

        return false;
    }
}