
<?php 

$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "earchive";  #database name



$semnum=$_POST["semnum"];
$subcode=$_POST["subcode"];
$modnum=$_POST["modulenum"];


$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
$q = "SELECT * FROM fileup WHERE sem='$semnum' AND subcode='$subcode' and modulenum='$modnum'";


$query=mysqli_query($conn,$q);
$row=mysqli_fetch_array($query);

$image=$row['image'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<div>
			
			<a href="uploads/<?php echo $image ?>" target="_blank"> View</a>
		</div>
	</div>
</body>
</html>