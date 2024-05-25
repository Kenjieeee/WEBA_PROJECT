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

    public function update($id, $data, $column = 'tenantid')
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

    public function search($getinput){

      $query = "SELECT * FROM $this->table WHERE CONCAT(`firstname`,`lastname`,`tenantid`) LIKE :searchTerm";
      $data = [':searchTerm' => "%$getinput%"];
      $result = $this->query($query, $data);

      if ($result) {
          return $result;
      }

      return  $result;
  }

  public function search_duedate($getinput,$duedate){

    $query = "SELECT * FROM $this->table WHERE CONCAT(`firstname`,`lastname`,`tenantid`) LIKE :searchTerm AND `duedate` = :duedate";
    $data = [
      ':searchTerm' => "%$getinput%",
      ':duedate' => $duedate
    ];
    $result = $this->query($query, $data);

    if ($result) {
        return $result;
    }

    return  $result;
}

}
