<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{

	$name=$_POST['name'];
	$email=$_POST['email'];
	$services=$_POST['services'];
	$adate=$_POST['adate'];
	$atime=$_POST['atime'];
	$phone=$_POST['phone'];
	$aptnumber = mt_rand(100000000, 999999999);

	$query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
	if ($query) 
	{
		echo "<script>alert('Thank you for booking, your appointment number is $aptnumber, we will give you phone call shortly.');</script>";  		
		echo "<script>window.location.href='index.php'</script>";	
	}
	else
	{
		echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	 	
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SUNSOLAR Management System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
<style>
h2 { 
  display: block;
  font-size: 1.2em;
  margin-left: 0;
  margin-right: 0;
 font-weight: bold;
color: white;

}
h1 { 
  display: block;
  font-size: 2em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
text-decoration: underline;color: white;
}
h3 { 
  display: block;
  font-size: 3em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
font-style: italic;
      color: yellow;
text-decoration: underline;
}
.ftco-section1 {
     background-image: url('images/picture2.jpg'); 
    }
.ftco-section {
    background-color:#F5F5DC; 
    }
.ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt {
    background-color:#F5F55C; 
    }
</style>
</head>
<body>
	<?php include('includes/header.php') ?>
	<!-- END nav -->
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/services1.webp');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center mb-5">
					<h1 class="mb-2 bread">Order Solar Panel Now</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
					<form action="#" method="post" class="appointment-form">
						<h3 class="mb-3">Order your Solr Panel</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<input type="name" name="name" class="form-control" placeholder="Name"required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email"required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" name="phone" class="form-control" placeholder="Phone"required>
								</div>
							</div>
							
							
							<div class="col-md-2">
								<div class="form-group">
									<input type="submit" name="submit" value="Order" class="btn btn-white ">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<section class="ftco-section1" >
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 ftco-animate makereservation ">
					<h3 class="mb-2 bread" >Our Services</h3>
					
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section1">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 ftco-animate makereservation ">
					<h1 class="mb-2 bread" style="text-align:center">Solar Power Plant for Industries</h1>
<h2 font-size: 2em> 

Industries are places where lots of machines and equipment work, and they use a ton of electricity. This electricity can be really expensive. But here's the good news: you can use solar power to make electricity from the sun, and it's much cheaper.

So, we'll create a special solar power system just for your industry. It can be on the roof of your building or on the ground nearby, whichever works best for you. This solar system will be custom-made to fit your industry's needs and save you a lot of money on electricity. It's like getting a tailor-made suit, but for your electricity!</h2>
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 ftco-animate makereservation ">
					<h1 class="mb-2 bread" style="text-align:center"> Finance Facilitation for Your Solar Power Plant</h1>
<h2 >

When you want to buy something big, like a car or a house, you might need to borrow money. It's the same with a solar power plant for your business. You might not have all the money right now, so we can help you find the best way to borrow the money you need.

We'll make sure the borrowing option we find matches your situation and helps you make the most money from your solar power plant. It's like having a financial expert guide you to make the smartest choice, so your investment in solar power pays off.</h2>
					
				</div>
			</div>
		</div>
	</section>
	<?php include('includes/footer.php') ?>
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>
</html>