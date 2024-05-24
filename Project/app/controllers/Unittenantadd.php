<?php

class Unittenantadd extends Controller
{
  public function index($price,$unitid)
  {
    $this->addtenant();
    $this->view('unittenantadd',[
      'price' => $price,
      'unitid'=>$unitid
    ]);
  }


  public function addtenant(){

    if(isset($_POST['add'])){
      $stdate = date("m/d/Y");
      $duedate  = date("m/d/y",strtotime(date("Y-m-d", strtotime("+1 month", strtotime($stdate)))));
      $tenant = new Tenant();
      $unit = new Unit();

      $id =$_POST['unitid'];
      $unitid['availability'] = "Occupied";

      $arr['unitid']=$_POST['unitid'];
      $arr['firstname']=$_POST['firstname'];
      $arr['lastname']=$_POST['lastname'];
      $arr['status']=$_POST['status'];
      $arr['occupants']=$_POST['occupants'];
      $arr['occupation']=$_POST['occupation'];
      $arr['contactno']=$_POST['contactno'];
      $arr['starteddate']=$stdate;
      $arr['duedate']=$duedate;
      $arr['rentpermonth']=$_POST['rentpermonth'];
      $arr['downpayment']=$_POST['downpayment'];
      $arr['advance']=$_POST['advance'];

      $balance = $_POST['downpayment'] - $_POST['rentpermonth'];

      $arr['balance']=$balance;

      $tenant->insert($arr);
      $unit->update($id,$unitid);
      echo'
        <script> 
          alert("Added Successfully!")
          window.location.href="'.ROOT.'/unitinfo";
        </script>
      ';

    }
  }

}