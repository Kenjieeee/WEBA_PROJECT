<?php

class Paymentrec extends Controller
{
  public function index()
  {
    $tenant = new Tenant();
    $data = $tenant->findAll();
    $this->view('paymentrec',[
      'data' => $data
    ]);
  }
}