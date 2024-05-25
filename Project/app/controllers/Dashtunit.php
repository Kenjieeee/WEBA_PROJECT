<?php

class Dashtunit extends Controller
{
  public function index()
  {
    $unit = new Unit();
    if(isset($_POST['btnsearch'])){
      
      if( $_POST['availability'] == ""){
        $data = $unit->findAll();
      }else{
        $arr['availability'] = $_POST['availability'];
        $data = $unit->where($arr);
      }
   

    }else{
        $data = $unit->findAll();
    }
    $this->view('dashtunit',[
      'data' => $data
    ]);
  }
}