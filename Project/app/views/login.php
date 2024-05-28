<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartment Rental</title>
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
  <style>
    .loginbtn input[type=submit]{
      background-color: rgb(230, 172, 28, 1.0);
      width: 550px;
      height: 40px;
      border-radius: 40px;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none;
    }
    .loginbtn input[type=submit]:hover{
      background-color: #ddd;
      color: rgb(2, 48, 71, 1.0);
    }
  </style>
</head>
<body>
  <div class = "Login_contrainer" style = "postion:absolute;">
    
    <form method = "POST">
      <div class = "title">
        <h4>APARTMENT RENTAL SYSTEM</h4>
      </div>
      
      <label class = "displaywrong" style="display: <?= ($show=="true") ? "show": "none" ;?>">Incorrect Username or Password!</label>
      <div class = "userdiv">
        <input type="text" name="username" placeholder = "Username"><br><br>
      </div>
      <div class = "passdiv">
        <input type="password" name="password" placeholder = "Password">
      </div>
      <div class = "loginbtn">
        <br><br><input type="submit" value="Login" name = "login">
      </div>
    </form>
  </div>
</body>
</html>