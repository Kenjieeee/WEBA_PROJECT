<?php

class Unittenantview extends Controller
{
  public function index($id)
  {
    $interval = new DateInterval('P1M');
    $tenant = new Tenant();
    $arr['unitid'] = $id;
    $data = $tenant->where($arr);
    $row = $data[0];
    $stdate = $row->starteddate;
    $duedate  =  date("m/d/y",strtotime(date("Y-m-d", strtotime("+1 month", strtotime($stdate)))));


    $this->view('unittenantview',[
      'row' => $row,
      'duedate' => $duedate
    ]);
  }
}