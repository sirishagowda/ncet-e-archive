
 
<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "earchive";  #database name




$semnum=$_POST["semnum"];
$subcode=$_POST["subcode"];
$modnum=$_POST["modulenum"];
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        // $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'uploads';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into fileup(sem, subcode, modulenum, image) VALUES('$semnum', '$subcode', '$modnum', '$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "<script>alert('File Succesfully Uploaded');
                    window.location.href='index.php';
            </script>";
    }
    else{
        echo "Error";
    }
}
 
 
?>