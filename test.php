<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
      border:2px solid black;
      padding: 2px;
      margin: 10px;
    }
    td{
      border:1px solid black;
      padding: 2px;
    }
    th{
      border:2px solid black;
      padding: 2px;
    }
  </style>
</head>
<body>
  

<?php
 $servername = "localhost";
 $username = "root";
 $password = "123456";
 $db="useridentification";
 
 $conn = new mysqli($servername, $username, $password,$db);

 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 echo "Registered User Details";
 $sql="select * from userdetails ";//where username = '$username' and Email= '$email' and password = '$password'";
$result = $conn->query($sql);
echo"<table>";
echo "<tr><th>Name</th><th>Email</th><th>Mobile No</th> </tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["mobile_no"]."</tr>";
}
echo"</table>";
?>
</body>
</html>