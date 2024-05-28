<?php

class Login extends Controller
{
  public function index()
  {
    // $errors = [];
    // $user = new User();

    // if (count($_POST) > 0) {

    //   $arr['email'] = $_POST['email'];

    //   $row = $user->first($arr);

    //   if ($row) {

    //     if (password_verify($_POST['password'], $row->password)) {

    //       Auth::authenticate($row);
    //       redirect('home');
    //     } else {
    //       $errors['errors'] = "Invalid email or password!";
    //     }
    //   } else {
    //     $errors['errors'] = "Invalid email or password!";
    //   }
    // }

    // $this->view('login', [
    //   'errors' => $errors
    // ]);
    $show="false";
    if(isset($_POST['login'])){
      if($_POST['username'] == "Admin" && $_POST['password'] == "Admin_123"){
        redirect('dashboard');
      }else{
        $show="true";
        $this->view('login');
      }
    }
    else{
     
      $this->view('login',[
        'show' => $show
      ]);
    }
    
  }
}