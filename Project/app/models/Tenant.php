<?php

class Tenant extends Model
{
    public function delete($id, $column = 'tenantid')
    {
      $data[$column] = $id;
      $query = "delete from $this->table where $column = :$column";
  
      $this->query($query, $data);
  
      return false;
    }
}