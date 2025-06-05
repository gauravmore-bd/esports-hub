<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrationform";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn)
{
    echo "connection ok";
}
else{
    echo "Connection failed" .mysqli_connect_error();
}
if( isset($_POST['register']) )
{
$Name = $_POST['name'];
$Age = $_POST['age'];
$Email = $_POST['email'];
$PhoneNumber = $_POST['phonenumber'];
$DOB = $_POST['dob'];
$GameID = $_POST['gameid'];

$query = "INSERT INTO formula VALUES('$Name', '$Age', '$Email', '$PhoneNumber', '$DOB','$GameID')";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "data inserted into database";
}
else
{
    echo "failed";
}
}
?>