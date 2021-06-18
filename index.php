
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Upload file</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});
</script>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" enctype="multipart/form-data" action="file-upload.php" method="post">
				<span class="contact100-form-title">	
					Upload file
				</span>


				<div class="wrap-input100 validate-input" data-validate="Eid is required">
						<span class="label-input100" style='font-size:18px;'>Select Semester</span>

						<select class="form-control" name='semnum' required="">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>

						</select>
						<span class="focus-input100"></span>
					</div>

				<div class="wrap-input100 validate-input" data-validate="Eid is required">
					<span class="label-input100" style='font-size:18px;'>Enter subject code</span>
					<input class="input100" type="text" name="subcode" >
					<span class="focus-input100"></span>
				</div>

									
					
				<div class="wrap-input100 validate-input" data-validate="Eid is required">
						<span class="label-input100" style='font-size:18px;'>Select Module</span>

						<select class="form-control" name='modulenum' required="">
							<option value="Module-1">Module-1</option>
							<option value="Module-2">Module-2</option>
							<option value="Module-3">Module-3</option>
							<option value="Module-4">Module-4</option>

						</select>
						<span class="focus-input100"></span>
					</div>



				<div class="wrap-input100 validate-input" data-validate="Eid is required">
					<span class="label-input100" style='font-size:18px;'>Choose file</span>
					<input class="input100" type="file" name="file" >
					<span class="focus-input100"></span>
				</div>
					
					
					
					
					

			      <!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <button type="submit" class="btn btn-primary " name="submit">Submit</button>
					
				
					<!-- <a class="btn btn-primary "  href="annotator.php">
      Cancel</a> -->
    </form>
							</span>
							
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="    "></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
