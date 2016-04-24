<?php 
include("database.php");


$username = (isset($_POST['username']) ? $_POST['username'] : '');
$password = (isset($_POST['password']) ? $_POST['password'] : '');

$sql = "select username,password from accounts where username='".$username."';";

$result = $conn->query($sql);


if ($result->num_rows > 0)
{
   	$row = $result->fetch_row();
   	$cpassword = $row[1];

    if (password_verify($password, $cpassword))
    {
	    echo "<h1>Success!</h1><br><a href='index.php'>Back</a>";
	}
	else
	{
		echo "<h1>Wrong password!</h1><br><a href='index.php'>Back</a>";
	}
}
else
{
    echo "<h1>User does not exist</h1><br><a href='index.php'>Back</a>";
}
$conn->close();



?>