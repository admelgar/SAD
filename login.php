<?php 
include("database.php");


$username = (isset($_POST['username']) ? $_POST['username'] : '');
$password = (isset($_POST['password']) ? $_POST['password'] : '');

$sql = "select username,password from accounts where username='".$username."';";

$result = $conn->query($sql);


if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $cusernmae= $row["username"];
        $cpassword= $row["password"];
    }

    if (password_verify($password, $cpassword))
    {
	    echo "<h1>Success!</h1><br><a href='index.php'>Back</a>";
	}
}
else
{
    echo "<h1>User does not exist</h1><br><a href='index.php'>Back</a>";
}
$conn->close();



?>