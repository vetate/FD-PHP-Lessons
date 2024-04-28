<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register with SercSync</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
</head>
<body class="align">

  <div class="grid">

  <form action="register_process.php" method="POST" class="form login">


      <div class="form__field">
        <label for="login__username"><i class="fas fa-user"></i><span class="hidden">Username</span></label>
        <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
      </div>

      <div class="form__field">
        <label for="login__password"><i class="fas fa-lock"></i><span class="hidden">Password</span></label>
        <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
      </div>

      <div class="form__field">
        <label for="confirm__password"><i class="fas fa-lock"></i><span class="hidden">Retype Password</span></label>
        <input id="confirm__password" type="password" name="confirm_password" class="form__input" placeholder="Retype Password" required>
      </div>


      <div class="form__field">
        <input type="submit" value="Register">
      </div>

    </form>

    <p class="text--center">Are you a member? <a href="login.php">Login</a> <i class="fas fa-arrow-right"></i></p>

  </div>

</body>
</html>
