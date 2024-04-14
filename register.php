<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register now!</title>
  </head>
  <body>
    <div class="container col-sm-4">
    <h1>Register !!</h1>
    <form action="register.php" method="post" class="form-control">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter your Userame" Required maxlength="50"><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your Full Name" Required class="form-control" maxlength="50"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your Email" Required class="form-control" maxlength="50"><br>
        <div class="mb-3">
          <label for="pass" class="form-label" >Password</label>
          <input type="password" class="form-control" name="password" id="pass" placeholder="Enter your password" required maxlength="20">
        </div>
        <!-- <div class="mb-3">
          <label for="pass" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="password" id="pass" placeholder="enter your password again" required>
        </div> -->
        <label for="dob">dob</label>
        <input type="date" name="dob" id="dob",Required class="form-control"><br>
        <label for="mobile" >Mobile No.</label>
        <input type="tel" name="mobile_no" id="" Required class="form-control" placeholder="Enter your Mobile No." Required maxlength="12"><br>
        <label for="security">Security Question</label>
        <select name="security" id="security" class="form-select mb-3">
            <option value="Your Favorite Teacher">Your Favorite Teacher</option>
            <option value="Your Favorite Sport">Your Favorite Sport</option>
            <option value="Your Favorite player">Your Favorite player</option>
        </select>
        <input type="text" name="security_ans" id="" class="form-control mb-3" placeholder="Enter your Answer" required maxlength="20">
        <input type="submit" class="btn-primary" value="Register">
    </form>
    </div>
    <?php
    if(isset($_POST['username'])){
        $servername = "localhost";
        $username = "root";
        $password = "123456";
        $db="UserIdentification";
        
        $conn = new mysqli($servername, $username, $password,$db);
       
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $username= $_POST["username"];
        $password= $_POST["password"];
        $name= $_POST["name"];
        $email= $_POST["email"];
        $phone = $_POST["mobile_no"];
        $Dob = $_POST["dob"];
        $Security= $_POST["security"];
        $security_ans= $_POST["security_ans"];
        $sql= "INSERT INTO userdetails (Name,Email,mobile_no,password,Dob,Security,Security_answer,username) VALUES ('$name','$email','$phone','$password','$Dob','$Security','$security_ans','$username')";
        if ($conn->query($sql) === TRUE) {
            echo "User Registerd successfully";
            header("Location:login.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }
    ?>
  </body>
</html>
