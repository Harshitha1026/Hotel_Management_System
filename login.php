<?php
$email = $_POST['email'];
$password = $_POST['password'];

$con=new mysqli("localhost","root","","hotel");
if($con->connect_error) {
	die("Failed to connect : ".$con->connect_error);
} else
{
	$stmt = $con->prepare("select * from sign_up where email= ? ");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0)
	{
		$data = $stmt_result->fetch_assoc();
		if($data['password'] == $password)
		{
			$myfile = fopen("index.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.php"));
fclose($myfile);
		}
		else
		{
			echo "<script>alert('Invalid username or Password');</script>";
		}

	}
	else
	{
			echo "<script>alert('Invalid username or Password');</script>";

	}
}
?>