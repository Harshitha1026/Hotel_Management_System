<?php
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
if (!empty($username) || !empty($email) || !empty($phone) || !empty($password)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hotel";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From sign_up Where email = ? Limit 1";
     $INSERT = "INSERT Into sign_up (username, email, phone, password) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssis", $username, $email, $phone, $password);
      $stmt->execute();
      //echo "<script>alert('Acount created sucessfully');";
      $myfile = fopen("index.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.php"));
fclose($myfile);
     } else {
      echo "<script>alert('Someone already register using this email');</script>";

     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "<script>alert('All field are required');</script>";
 die();
}
?>