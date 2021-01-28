

<!DOCTYPE html>
<html lang="en">
<head>
	<title>hiring servents</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<style>
		.carousel-control-next-icon{
			margin-right:72%;
		}			
		.carousel-control-prev-icon{
			margin-left:72%;
		}
	</style>
</head>
<body>

	<section class="">
		<?php
			include 'includes/config.php';
			include 'header.php';
			$i=1;
			$sel = "SELECT * FROM servents WHERE status = 'Available'";
						$rs = $conn->query($sel);
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Servents For Hire</h2>
			</section>
	</section><!--  end hero section  -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
  			<?php while($servents=$rs->fetch_assoc()):?>
  			<?php if($i==1):?>
  			<div class="carousel-item active">
			  <img style="width:80%;display:table;margin:auto;" src="cars/<?php echo $servents['image'];?>" alt="...">
			  <div style="background:#fff" class="carousel-caption d-none d-md-block">
			    <a href="book_servent.php?id=<?php echo $servents['servent_id'];?>"><h3><?php echo $servents['servent_name'];?></h3></a>
			    <p style="color:#000"><?php echo $servents['hire_cost']." taka";?></p>
			    <h5><?php echo $servents['servent_type'];?></h5>
			  </div>
			</div>
    		
    		<?php else:?>
    		<div class="carousel-item ">
			  <img style="width:80%;display:table;margin:auto;" src="cars/<?php echo $servents['image'];?>" alt="...">
			  <div style="background:#fff" class="carousel-caption d-none d-md-block">
			    <a href="book_servent.php?id=<?php echo $servents['car_id'];?>"><h3><?php echo $servents['servent_name'];?></h3></a>
			    <p style="color:#000"><?php echo $servents['hire_cost']." taka";?></p>
			    <h5><?php echo $servents['servent_type'];?></h5>
			  </div>
			</div>
	    	<?php endif;?>
	    	<?php $i++;?>
	    	<?php endwhile;?>
    	
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
		</div>

	<section class="listings">
		<div class="wrapper">
			<?php
						
						$sel = "SELECT * FROM servents WHERE status = 'Available'";
						$rs = $conn->query($sel);
						
			?>
				
		</div>
		<div class="container">
			<div class="row">
				<?php while($rws = $rs->fetch_assoc()):?>
				<div class="col-md-4">
					<div class="card" style="width: 100%;">
						<a href="book_servent.php?id=<?php echo $rws['servent_id'] ?>">
						  <img class="card-img-top" src="cars/<?php echo $rws['image'];?>" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $rws['servent_name'];?></h5>
						    <p class="card-text">Servent Type > <?php echo $rws['servent_type'];?> <br> Rate:<?php echo $rws['hourly_rate'];?> Taka</p>
						    <a href="book_servent.php?id=<?php echo $rws['servent_id'] ?>" class="btn btn-primary">Hire Now</a>
						  </div>
						</a>
					</div>
				</div>
			<?php endwhile;?>
				<!-- <div class="col-md-4">
					<div class="card" style="width: 100%;">
						<a href="">
						  <img class="card-img-top" src="admin/css/ba63aa0762728629790af731c8108127.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Servent Name</h5>
						    <p class="card-text">Servent Type > Hourly Rate:80 Taka</p>
						    <a href="#" class="btn btn-primary">Hire Now</a>
						  </div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 100%;">
						<a href="">
						  <img class="card-img-top" src="admin/css/53889dfff71c0b24dd76849fe5bbad5c.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Servent Name</h5>
						    <p class="card-text">Servent Type > Hourly Rate:80 Taka</p>
						    <a href="#" class="btn btn-primary">Hire Now</a>
						  </div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 100%;">
						<a href="">
						  <img class="card-img-top" src="admin/css/094b2a3d1526178188f39d10eef9fd88.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">Servent Name</h5>
						    <p class="card-text">Servent Type > Hourly Rate:80 Taka</p>
						    <a href="#" class="btn btn-primary">Hire Now</a>
						  </div>
						</a>
					</div>
				</div> -->
			</div>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR Servent TYPES</li>
						<li><a href="#">full time</a></li>
						<li><a href="#">part time </a></li>
					</ul>
				</li>

				<li class="about">
					<p>our team is an organized company that rents servents  to clients at lower costs. We we are here to serve.</p>
					<ul>
						<li><a href="http://facebook.com/sonko" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+sonko" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Gunjon.
		</div>
	</footer><!--  end footer  -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>