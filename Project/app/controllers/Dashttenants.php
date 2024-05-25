<?php

class Dashttenants extends Controller
{
  public function index()
  {
    $tenant = new Tenant();
    if(isset($_POST['btnsearch'])){
      $txtsearch = $_POST['txtsearch'];
      $data = $tenant->search($txtsearch);
    }else{
      $data = $tenant->findAll();
    }
    $this->view('dashttenants',[
      'data' =>$data
    ]);
  }
}