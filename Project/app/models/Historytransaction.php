<?php

class Historytransaction extends Model
{
    public function search($getinput){

        $query = "SELECT * FROM $this->table WHERE CONCAT(`tenantname`,`tenantid`) LIKE :searchTerm";
        $data = [':searchTerm' => "%$getinput%"];
        $result = $this->query($query, $data);

        if ($result) {
            return $result;
        }

        return  $result;
    }
}