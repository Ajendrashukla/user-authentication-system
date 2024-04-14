<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
    <div class="container col-sm-4">
    <h2>Main Page</h2>
    <p>Welcome, <?php
    if(isset($_SESSION['username'])) {
     echo $_SESSION['username'];
    echo "You are logged as User"; }
     ?>!</p>
    <p>You are Authenticated</p>
    <p>This is the main page. Only logged-in users can access it.</p>
    <a href="logout.php">Logout</a>
    </div>
</body>
</html>
