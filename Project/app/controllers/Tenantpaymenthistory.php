<?php

class Tenantpaymenthistory extends Controller
{
  public function index($tenantid)
  {
    $historytransaction = new Historytransaction();
    $arr['tenantid'] = $tenantid;
    $data = $historytransaction->where($arr);
    $row = $data[0];
    $this->view('tenantpaymenthistory',[
      'row' =>$row
    ]);
  }
}