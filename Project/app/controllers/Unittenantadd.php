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

      // $balance = floatval($_POST['downpayment']) - floatval($_POST['rentpermonth']);
      $contactNumberPattern = '/^(9\d{9})|(0\d{10})|(\+639\d{9})|(\+639\d{9})|(\+63\s9\d{9})$/';
      // $arr['balance']=$balance;
      if(!preg_match($contactNumberPattern, $_POST['contactno'])){
        echo '
        <script> 
          alert(" Invalid input for contact number! ") 
          </script>
        ';
      }
      else if(floatval($_POST['occupants'])<1){
        echo '
        <script> 
          alert(" Invalid input for occupants! ") 
          </script>
        ';
      
      }else if(floatval($_POST['downpayment'])<1){

        echo '
        <script> 
          alert(" Invalid input for downpayment! ") 
          </script>
        ';

      }else if(floatval($_POST['advance'])<1){
        echo '
        <script> 
          alert(" Invalid input for advance payment! ") 
          </script>
        ';
      }
      else{

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

}