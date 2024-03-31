<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 0);
include('includes/config.php');
$error = '';
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
   
if(isset($_POST['submit']))
  {
    $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $folder="../images/";
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobileno=$_POST['mobileno'];
    $password=$_POST['mobileno'];
    $hor=$_POST['hor'];
    $dob=$_POST['dob'];
    $nationality=$_POST['nationality'];
    $case_status=$_POST['case_status'];
    $case_type=$_POST['case_type'];
    $fee=$_POST['fee'];
    $registration_date=$_POST['registration_date'];
    $image=$_POST['image'];
    $notes=$_POST['notes'];

    if(move_uploaded_file($file_loc,$folder.$final_file))
        {
            $image=$final_file;
        }

    $sql ="INSERT INTO users(notes,name,email,password,gender,mobile,image,hor,dob,nationality,case_status,case_type,fee,registration_date, status) VALUES(:notes, :name, :email, :password, :gender, :mobileno, :image, :hor, :dob, :nationality, :case_status, :case_type, :fee, :registration_date, 1)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':name', $name, PDO::PARAM_STR);
    $query-> bindParam(':notes', $notes, PDO::PARAM_STR);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':gender', $gender, PDO::PARAM_STR);
    $query-> bindParam(':password', $mobileno, PDO::PARAM_STR);
    $query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
    $query-> bindParam(':hor', $hor, PDO::PARAM_STR);
    $query-> bindParam(':dob', $dob, PDO::PARAM_STR);
    $query-> bindParam(':nationality', $nationality, PDO::PARAM_STR);
    $query-> bindParam(':case_status', $case_status, PDO::PARAM_STR);
    $query-> bindParam(':case_type', $case_type, PDO::PARAM_STR);
    $query-> bindParam(':fee', $fee, PDO::PARAM_STR);
    $query-> bindParam(':registration_date', $registration_date, PDO::PARAM_STR);
    $query-> bindParam(':image', $image, PDO::PARAM_STR);
    
    $query->execute();
   
    $msg="User Added Successfully";
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
    
    <title>Add New User</title>

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
<script src="https://cdn.tiny.cloud/1/6tkctvmgs1kr7aueepgd4htsp10x8869my73yl05pefp44jv/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script type= "text/javascript" src="../vendor/countries.js"></script>
    <script type="text/javascript">
        function validate()
        {
            var extensions = new Array("jpg","jpeg","png","webp","gif","bmp","jfif");
            var image_file = document.regform.image.value;
            var image_length = document.regform.image.value.length;
            var pos = image_file.lastIndexOf('.') + 1;
            var ext = image_file.substring(pos, image_length);
            var final_ext = ext.toLowerCase();
            for (i = 0; i < extensions.length; i++)
            {
                if(extensions[i] == final_ext)
                {
                return true;
                
                }
            }
            alert("Image Extension Not Valid (Use Jpg,jpeg,png,jfif,bmp)");
            return false;
        }
    </script>
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

    <?php include('includes/header.php');?>
    <div class="ts-main-content">
    <?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-title">Add New User</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">User Info</div>
<?php if($error!=''){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

                                    <div class="panel-body">
      <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Name<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <input type="text" name="name" class="form-control" required>
                            </div>
                            <label class="col-sm-2 control-label">Date of Birth<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <input type="text" placeholder="DD-MM-YYYY e.g. 10-05-1987" name="dob" class="form-control" required>
                            </div>
                         </div>
                                                     <div class="form-group">

                             <label class="col-sm-2 control-label">Nationality<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <select name="nationality" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Pakistani">Pakistani</option>
                            <option value="Non Pakistani">Non Pakistani</option>
                            </select>
                            </div>
                            <label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <input type="text" name="email" class="form-control" required>
                            </div>
                            </div>

                            <div class="form-group">
                            <label style="padding-right: 0px;" class="col-sm-2 control-label">Home Office Reference<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <input type="text" name="hor" class="form-control" id="hor" required >
                            </div>

                            <label class="col-sm-2 control-label">Case Type<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <input type="text" name="case_type" class="form-control" required>
                            </div>
                            </div>

                             <div class="form-group">
                            <label class="col-sm-2 control-label">Gender<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                            </div>

                            <label class="col-sm-2 control-label">Phone<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <input type="number" name="mobileno" class="form-control" required>
                            </div>
                            </div>

                            <div class="form-group">
                                 <label class="col-sm-2 control-label">Outstanding Fee<span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                   <input type="text" name="fee" class="form-control" value="" required>
                                  </div>

                                 <label class="col-sm-2 control-label">Status<span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                   <input type="text" name="case_status" class="form-control" value="" required>
                                  </div>
                            </div>

                             <div class="form-group">
                                  <label style="padding-right: 0px;" class="col-sm-2 control-label">Case Registration Date<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                               <input  placeholder="DD-MM-YYYY e.g. 20-07-2022" type="text" name="registration_date" value="" class="form-control">
                            </div>
                            <label class="col-sm-2 control-label">Picture<span style="color:red">*</span></label>
                            <div class="col-sm-4">
                            <div><input type="file" name="image" class="form-control"></div>
                            </div>
                            </div>


                             <div class="form-group">
                                 <label class="col-sm-2 control-label">Notes</label>
                                  <div class="col-sm-10">
                                   <textarea id="notes" name="notes"></textarea>
                                  </div>
                            </div>


                                <br>
                             <button class="btn btn-success btn-md" name="submit" type="submit" style="padding: 5px 23px; font-size: 17px; background: maroon;">
                                     Add User</button>
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
                 
                  
                     tinymce.init({
                        selector: '#notes'
                     }); 


                 });
    </script>

</body>
</html>
<?php } ?>