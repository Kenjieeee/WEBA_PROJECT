<?php

class Unitinfo extends Controller
{
  public function index()
  {
    $unit = new Unit();
    $data = $unit->findAll();
    $this->view('unitinfo',[
      'data'=> $data
    ]);
  }
}