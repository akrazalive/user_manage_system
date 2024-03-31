<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
  {	
	$file = $_FILES['image']['name'];
	$file_loc = $_FILES['image']['tmp_name'];
	$folder="images/";
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobile'];
	$idedit=$_POST['editid'];
	$image=$_POST['image'];

	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$image=$final_file;
		}

	$sql="UPDATE users SET name=(:name), email=(:email), mobile=(:mobileno), designation=(:designation), Image=(:image) WHERE id=(:idedit)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
	$query-> bindParam(':image', $image, PDO::PARAM_STR);
	$query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
	$query->execute();
	$msg="Information Updated Successfully";
}    
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Edit Profile</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<script type= "text/javascript" src="../vendor/countries.js"></script>
	<style>
	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>


</head>

<body>
<?php
		$email = $_SESSION['alogin'];
		$sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading"><?php echo htmlentities($_SESSION['alogin']); ?></div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4 text-center">
		<img src="images/<?php echo htmlentities($result->image);?>" style="width:200px; margin:10px;">
		<input type="file" name="image" class="form-control hide">
		<input type="hidden" name="image" class="form-control" value="<?php echo htmlentities($result->image);?>">
	</div>
	<div class="col-sm-4">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Name</label>
	<div class="col-sm-4">
	<input disabled type="text" name="name" class="form-control" required value="<?php echo htmlentities($result->name);?>">
	</div>

	<label class="col-sm-2 control-label">Date of birth</label>
<div class="col-sm-4">
<input disabled type="text" name="dob" class="form-control" required value="<?php echo $result->dob;?>">
</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Mobile</label>
	<div class="col-sm-4">
	<input disabled type="text" name="mobile" class="form-control" required value="<?php echo htmlentities($result->mobile);?>">
	</div>

	<label class="col-sm-2 control-label">Gender</label>
	<div class="col-sm-4">
	<select disabled name="gender" class="form-control" required>
	    <option value="">Select</option>
	     <option value="Male" <?php if($result->gender == "Male") echo "selected"; ?>>Male</option>
	     <option value="Female" <?php if($result->gender == "Female") echo "selected"; ?>>Female</option>
	  </select>
	</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Nationality</label>
<div class="col-sm-4">
<select disabled name="nationality" class="form-control" required>
    <option value="">Select</option>
     <option value="Pakistani" <?php if($result->nationality == "Pakistani") echo "selected"; ?>>Pakistani</option>
     <option value="Non Pakistani" <?php if($result->nationality == "Non Pakistani") echo "selected"; ?>>Non Pakistani</option>
  </select>
</div>

<label class="col-sm-2 control-label">House Office Reference</label>
<div class="col-sm-4">
<input disabled type="text" name="hor" class="form-control" required value="<?php echo $result->hor;?>">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Case Type</label>
<div class="col-sm-4">
<input disabled type="text" name="case_type" class="form-control" required value="<?php echo $result->case_type;?>">
</div>

<label class="col-sm-2 control-label">Case Status</label>
<div class="col-sm-4">
<input disabled type="text" name="case_status" class="form-control" required value="<?php echo $result->case_status;?>">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Outstanding Fee</label>
<div class="col-sm-4">
<input disabled type="text" name="fee" class="form-control" required value="<?php echo $result->fee;?>">
</div>

<label class="col-sm-2 control-label">Case Registration Date</label>
<div class="col-sm-4">
<input disabled type="text" name="registration_date" class="form-control" required value="<?php echo $result->registration_date;?>">
</div>
</div>



</div>
<input type="hidden" name="editid" class="form-control" required value="<?php echo htmlentities($result->id);?>">

<div class="form-group hide">
	<div class="col-sm-8 col-sm-offset-2">
		<button style="background: maroon;
    color: white;
    font-size: 17px;
    padding: 7px 9px;" class="btn btn-primary" name="submit" type="submit">Save Changes</button>
	</div>
</div>

</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
	</script>
</body>
</html>
<?php } ?>