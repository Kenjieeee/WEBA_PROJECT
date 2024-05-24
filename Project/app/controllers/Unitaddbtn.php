<?php

class Unitaddbtn extends Controller
{
  public function index()
  {
    $unit = new Unit();

    $data =$unit->lastID();
    $row =$data[0];
   $currentID = ($row->unitid+1);


    if(isset($_POST['save'])){
     
      $arr['availability'] = $_POST['availability'];
      $arr['rent'] = $_POST['rent'];
      $arr['livingroom'] = $_POST['livingroom'];
      $arr['bedroom'] = $_POST['bedroom'];
      $arr['kitchenroom'] = $_POST['kitchenroom'];
      $arr['bathroom'] = $_POST['bathroom'];
      $arr['laundryroom'] = $_POST['laundryroom'];
      $arr['squaremeter'] = $_POST['squaremeter'];

      $unit->insert($arr);
      echo '
        <script> 
          alert(" Added Successfully! ") 
          window.location.href = "' . ROOT . '/unitinfo"
          </script>
      ';
    }
    
    $this->view('unitaddbtn',[
      'currentID' => $currentID
    ]);
  }
}