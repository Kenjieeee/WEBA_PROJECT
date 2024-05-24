<?php

class Tenantinfo extends Controller
{
  public function index()
  {
    $tenant = new Tenant();
    
    $data =  $tenant->findAll();
    $this->view('tenantinfo',[
      'data' => $data
    ]);
  }
}