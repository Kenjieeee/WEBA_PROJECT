<?php

class Dashboard extends Controller
{
  public function index()
  {
    $unit = new Unit();
    $tenant = new Tenant();
   

    $crntdate = date("m/d/Y");
    $arr['duedate'] = $crntdate;
    $totalduedate = (!empty($tenant->where($arr))) ? count($tenant->where($arr)) : 0;

    $totalUnit= (!empty($unit->findAll())) ? count($unit->findAll()) : 0; 
    $totaltenant= (!empty($tenant->findAll())) ? count($tenant->findAll()) : 0; 
   

    $this->view('dashboard',[
      'totalunit' =>  $totalUnit,
      'totaltenant' => $totaltenant,
      'totalduedate' => $totalduedate
    ]);
  }
}