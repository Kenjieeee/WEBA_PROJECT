<?php

class Tenantedit extends Controller
{
  public function index($id)
  {
    $tenant = new Tenant();

    if(isset($_POST['btnupdate'])){
       
        $arr['firstname']=$_POST['firstname'];
        $arr['lastname']=$_POST['lastname'];
        $arr['status']=$_POST['status'];
        $arr['occupants']=$_POST['occupants'];
        $arr['occupation']=$_POST['occupation'];
        $arr['contactno']=$_POST['contactno'];
        $tenantid = $_POST['tenantid'];
        $tenant->update($tenantid,$arr);
        $path = ROOT."/tenantmoreinfo/".$id;
        echo '
        <script> 
          alert(" Updated Successfully! ") 
          window.location.href="'.$path.'"
          </script>
        ';
    }
    $arr['unitid'] = $id;
    $data = $tenant->where($arr);
    $row = $data[0];
    $this->view('tenantedit',[
      'row' => $row
    ]);
  }
}