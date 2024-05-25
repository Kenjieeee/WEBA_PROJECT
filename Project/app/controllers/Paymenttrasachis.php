<?php

class Paymenttrasachis extends Controller
{
  public function index()
  {
    $historytransc = new Historytransaction();

  
    if(isset($_POST['btnsearch'])){

      $txtsearch = $_POST['txtsearch'];

      $data = $historytransc->search($txtsearch);

      
    }else{
      $data = $historytransc->findAll();
    }

    $this->view('paymenttrasachis',[
      'data' => $data
    ]);

  }
}