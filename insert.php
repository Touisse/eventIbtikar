<?php
require_once('db.php');
?>
<?php
if(isset($_POST['submit']))
{    
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$socio = $_POST['socio'];
	$message = $_POST['message'];
	
	$sql = "INSERT INTO reservation (name, email, phone, gender, age, socio,message)VALUES(?,?,?,?,?,?,?)";
	$stmtinsert = $db->prepare($sql);
	$result = $stmtinsert->execute([$name,$email,$phone, $gender, $age,$socio,$message]);
	if($result){
	}else{
		echo 'There were erros while saving the data.';
	}
	}else{
	echo 'No data';
	}
	?>
	<!DOCTYPE html>
<html lang="en">
   
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>IbtikarCom</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style1.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" type="image/png" sizes="16x16" href="images/Logo/logo-black.png">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <header id="masthead" class="site-header">
         <div  class="head_top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.php"><img src="images/Logo/logo-black.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
     </header><!-- /#mastheaed -->
 
     <div id="hero" class="hero overlay">
         <div class="hero-content">
             <div class="hero-text">
                 <h1>Thank you for submitimg.</h1>
                 <p>Nous Sommes prets a vous accompagner,
                     diriger et surtout donner vie a vos idees !</p>
					 <a href="index.html" class="btn btn-border">back to FORM</a>
             </div><!-- /.hero-text -->
         </div><!-- /.hero-content -->
     </div><!-- /.hero -->



