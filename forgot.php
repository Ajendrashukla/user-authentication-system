<?php
if(isset($_POST['email'])){
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $db="UserIdentification";
    
    $conn = new mysqli($servername, $username, $password,$db);
   
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $username= $_POST["username"];
    $email=$_POST["email"];
    $security = $_POST["security"];
    $Dob= $_POST["dob"];
    $security_ans= $_POST["security_ans"];
    $password= $_POST["password"];
    $sql="UPDATE userdetails SET password = '$password' WHERE username ='$username'AND Email = '$email' AND Security ='$security' AND Security_answer='$security_ans' AND Dob='$Dob'";
    if ($conn->query($sql) === TRUE) {
        echo "New Password set successfully";
        header("Location:login.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $conn->close();
}
?>