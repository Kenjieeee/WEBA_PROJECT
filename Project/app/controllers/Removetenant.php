<?php

class Removetenant extends Controller
{
  public function index()
  {
   
    if(isset($_POST['removebtn'])){

       $historytenant = new Historytenant();
       $unit =  new Unit();
       $tenant =  new Tenant();

       $unit_data['availability'] = "Available";
       $idunit = $_POST['unitid'];
       $unit->update($idunit,$unit_data);

       $leavedate = date("m/d/Y");
       $arr['tenantid']=$_POST['tenantid'];
       $arr['unitid']=$_POST['unitid'];
       $arr['name']=$_POST['name'];
       $arr['contactno']=$_POST['contactno'];
       $arr['starteddate']=$_POST['starteddate'];
       $arr['leaveddate']=$leavedate;
       $arr['balance']=$_POST['balance'];
       $historytenant->insert($arr);

       $idtenant = $_POST['tenantid'];   
       $tenant->delete($idtenant);

       echo'
        <script>
            alert("Removed Succcessfully!")
            window.location.href="'.ROOT.'/tenantinfo"
        </script>
       ';

    }
   

  }
}