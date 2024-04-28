<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform database query to retrieve the hashed password for the given username
    $query = "SELECT password FROM members WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify the password using password_verify
        if (password_verify($password, $hashed_password)) {
            // Authentication successful, redirect user to dashboard or homepage
            header("Location: db.php");
            exit();
        } else {
            // Authentication failed, display error message on login page
            echo "Invalid username or password";
        }
    } else {
        // User not found, display error message on login page
        echo "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login SercSync</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="align">

  <div class="grid">

  <form action="login.php" method="POST" class="form login">

      <div class="form__field">
        <label for="login__username"><i class="fas fa-user"></i><span class="hidden">Username</span></label>
        <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
      </div>

      <div class="form__field">
        <label for="login__password"><i class="fas fa-lock"></i><span class="hidden">Password</span></label>
        <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
      </div>

      <div class="form__field">
        <input type="submit" value="Sign In">
      </div>

    </form>

    <p class="text--center">Not a member? <a href="register.php">Sign up now</a> <i class="fas fa-arrow-right"></i></p>

  </div>

</body>
</html>
