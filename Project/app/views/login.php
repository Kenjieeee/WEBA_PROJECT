<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartment Rental</title>
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">
  
</head>
<body>
  <div class = "Login_contrainer">
    <form method = "POST">
      <div class = "title">
        <h4>APARTMENT RENTAL SYSTEM</h4>
      </div>
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