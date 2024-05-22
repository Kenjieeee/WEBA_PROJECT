<?php

class Unitviewbtn extends Controller
{
  public function index($id)
  {
    $unit = new Unit();
    $arr['unitid'] =$id;
    $data = $unit->where($arr);
    $row = $data[0];
    $this->view('unitviewbtn',[
      'row' => $row
    ]);
  }
}