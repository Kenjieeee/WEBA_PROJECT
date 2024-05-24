<?php

class Tenantmoreinfo extends Controller
{
  public function index($id)
  {
    $tenant = new Tenant();
    $arr['unitid'] = $id;
    $data = $tenant->where($arr);
    $row = $data[0];
    $this->view('tenantmoreinfo',[
      'row' => $row
    ]);
  }
}