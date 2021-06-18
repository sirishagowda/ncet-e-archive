<?php
session_start(); //Start the session

// Connect To The database
$dbconx=mysqli_connect("localhost","root","","earchive") OR
die("can't connect to database");

if (isset($_POST["submit"])) {
// Fetch User details sent
$email=$_POST["username"];
$password=$_POST["password"];
// Check if user input is blank

if ($email=="" || $password=="") {
echo "Empty Details";
exit();

} else {
// Fetch user details
$result = mysqli_query($dbconx,"SELECT * FROM login WHERE username='$email' and password = '$password' LIMIT 1");
if (mysqli_num_rows($result)>0) {
// Create Sessions and redirect user to homepage
$_SESSION["username"] = $email;

header("Location:semester.html");
} else {


echo "<script>
alert('Email/Password Not match, Try Again');
window.location.href='login.html';
</script>";


}



}



}