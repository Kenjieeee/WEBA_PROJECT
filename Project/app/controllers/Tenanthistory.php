<?php

class Tenanthistory extends Controller
{
  public function index()
  {
    $historytenant = new Historytenant();
    $data = $historytenant->findAll();
    $this->view('tenanthistory',[
      'data' => $data
    ]);
  }
}