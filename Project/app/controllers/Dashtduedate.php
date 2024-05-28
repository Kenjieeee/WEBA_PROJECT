<?php

class Dashtduedate extends Controller
{
  public function index()
  {
    $tenant = new Tenant();
    $crntdate = date("m/d/y");
   
    if(isset($_POST['btnsearch'])){
   
      $txtsearch = $_POST['txtsearch'];
      $data = $tenant->search_duedate($txtsearch,$crntdate);
    }else{
      $arr['duedate'] = $crntdate;
      $data = $tenant->where($arr);
    }

    $this->view('dashtduedate',[
      'data' => $data
    ]);
  }
}