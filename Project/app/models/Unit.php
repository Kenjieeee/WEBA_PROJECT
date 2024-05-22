<?php

class Unit extends Model
{
    public function lastID(){
        $query = "SELECT unitid FROM $this->table ORDER BY unitid DESC LIMIT 1";
        $result = $this->query($query);

        return $result;
    }
}