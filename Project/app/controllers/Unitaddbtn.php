<?php

class Unitaddbtn extends Controller
{
  public function index()
  {
    $unit = new Unit();

    $data =$unit->lastID();
    if(!empty($data)){
      $row =$data[0];
      $currentID = ($row->unitid+1);
    }else{
      $currentID = 1;
    }
   


    if(isset($_POST['save'])){
     
      $arr['availability'] = $_POST['availability'];
      $arr['rent'] = $_POST['rent'];
      $arr['livingroom'] = $_POST['livingroom'];
      $arr['bedroom'] = $_POST['bedroom'];
      $arr['kitchenroom'] = $_POST['kitchenroom'];
      $arr['bathroom'] = $_POST['bathroom'];
      $arr['laundryroom'] = $_POST['laundryroom'];
      $arr['squaremeter'] = $_POST['squaremeter'];

      if(floatval($_POST['livingroom'])<1){
        echo '
        <script> 
          alert(" Invalid input for living room! ") 
          window.location.href = "' . ROOT . '/unitaddbtn"
          </script>
      ';
      }else if(floatval($_POST['rent'])<1){
        
        echo '
        <script> 
          alert(" Invalid input for rent! ") 
          window.location.href = "' . ROOT . '/unitaddbtn"
          </script>
      ';
      
      }else if(floatval($_POST['bedroom'])<1){

        echo '
        <script> 
          alert(" Invalid input for bedroom! ") 
          window.location.href = "' . ROOT . '/unitaddbtn"
          </script>
      ';

      }else if(floatval($_POST['kitchenroom'])<1){

        echo '
        <script> 
          alert(" Invalid input for kitchenroom! ") 
          window.location.href = "' . ROOT . '/unitaddbtn"
          </script>
      ';


      }else if(floatval($_POST['bathroom'])<1){

        echo '
        <script> 
          alert(" Invalid input for bathroom! ") 
          window.location.href = "' . ROOT . '/unitaddbtn"
          </script>
      ';

      }else if(floatval($_POST['laundryroom'])<1){

        echo '
        <script> 
          alert(" Invalid input for laundryroom! ") 
          window.location.href = "' . ROOT . '/unitaddbtn"
          </script>
      ';

      }else if(floatval($_POST['squaremeter'])<1){

        echo '
        <script> 
          alert(" Invalid input for squaremeter! ") 
          window.location.href = "' . ROOT . '/unitaddbtn"
          </script>
      ';

      }else{

        $unit->insert($arr);
   
        echo '
          <script> 
            alert(" Added Successfully! ") 
            window.location.href = "' . ROOT . '/unitinfo"
            </script>
        ';
      }
    }
    
    $this->view('unitaddbtn',[
      'currentID' => $currentID
    ]);
  }
}