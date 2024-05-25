<?php

class Paymentsubmit extends Controller
{
  public function index()
  {

    if(isset($_POST['btnpayment'])){

      $historytransc =  new Historytransaction();
      $tenant =  new Tenant();
      $month = $_POST['month'];
      $stdate = $_POST['duedate'];

      
      $duedate  = date("m/d/y",strtotime(date("Y-m-d", strtotime("+ ".$month." month", strtotime($stdate)))));
  
      $prent = $_POST['rentpermonth'];

   
      $amount = floatval($prent) * floatval($month);

    
      $arr['tenantid'] = $_POST['tenantid'];
      $arr['unitid'] = $_POST['unitid'];
      $arr['tenantname'] = $_POST['tenantname'];
      $arr['duedate'] = $_POST['duedate'];
      $arr['amount'] = $amount;

      $historytransc->insert($arr);
      $tntid = $_POST['tenantid'];
      $tntdata['duedate'] = $duedate;
      $tenant->update($tntid,$tntdata);

      echo '
        <script> 
          alert("Paid Successfully!")
          window.location.href="'.ROOT.'/tenantinfo"; 
        </script>
      ';

    }else{
      $this->view('paymentsubmit');
    }

   

  }

  public function viewdata($unitid){
    $tenant = new Tenant();
    $arr['unitid'] = $unitid;
    $data = $tenant->where($arr);
    $row = $data[0];

    $this->view('paymentsubmit',[
      'row' => $row
    ]);
  }
}