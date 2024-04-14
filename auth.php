<?php
 
 $servername = "localhost";
 $username = "root";
 $password = "123456";
 $db="UserIdentification";
 
 $conn = new mysqli($servername, $username, $password,$db);

 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql="select * from userdetails where Email= '$email' and username = '$username' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows===1) {
        $conn->close();
        session_start();
        $_SESSION['username'] = $username;
        header('Location: main.php');
        exit();
    } else {
        header("Location: login.php?error=$result->num_rows");
        exit();
    }
}
?>
