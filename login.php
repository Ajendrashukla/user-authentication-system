
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Identification system!!</title>
  </head>
  <body>
    <center><h1>Login here!!!</h1></center>

    <div class="container col-sm-4 grid">

    <form method="POST" action="auth.php">
 
  <label for="Username">Username</label>
  <input type="text" name="username" class="form-control mb-3" id="Username" placeholder="username" required maxlength="50">
 
 
    <label for="staticEmail2" >Email</label>
    <input type="Email" class="form-control mb-3" id ="statciEmail2" name="email" placeholder="email@example.com" required maxlength="50">
  
  
    <label for="inputPassword2">Password</label>
    <input type="password" class="form-control mb-3" id="inputPassword2" name="password" placeholder="Password" required maxlength="20">
 
    
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
    <br>
    <label for="register" class="mb-3">New here?</label>
    <a href="register.php" class="">register Now!!</button> 
    <?php
    if (isset($_GET['error'])) {
        echo '<p style="color: red;">Invalid username or password. <br> 
  </p> Forgot password?? <a href=forgot.html>click here</a>';

    }
    ?>
 
</div>
</form>

  </body>
</html>
