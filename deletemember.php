<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Home</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		
			<header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="member.php">Member</a>
                          <ul>
							  <li><a href="member.php">Tambah member</a></li>
							  <li><a href="deletemember.php">Kelola member</a></li>
				            </ul>

						  
				          <li class="menu-has-children"><a href="index.php">Penyewaan</a></li>
				            
						  <li class="menu-has-children"><a href="pengembalian.php">Pengembalian</a></li>
				            
				          <li class="menu-has-children"><a href="komplain.php">komplain</a></li>
				            		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
              <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

</style>
<!-- start banner Area -->
	<!-- start banner Area -->
	<body>
	<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						
						<div class="col-lg-10 col-md-15 header-right">
							<h4 class="text-white pb-30">Check member</h4>
						
							<form class="form" role="form" autocomplete="off" method="post">
							    <div class="form-group">
								<input class="form-control txt-field" type="text" name="id_member" placeholder="id. member">
							    </div>
							    
								
							    	
							    	
							    
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="submit" value="add">Check Now</button>
							        </div>
								</div>
								
								<table>
								
									<th>Id member</th> <th>Nama member</th> <th>No ktp</th> <th>alamat member</th> <th>Kontak member</th> <th>Edit</th> <th>Delete</th>
								
								<?php

								include_once("config.php");
								if(isset($_POST['submit'])) {
								$id_member = $_POST['id_member'];

								$result = mysqli_query($mysqli,
								"SELECT * FROM member WHERE id_member = '$id_member' ");
								
			
								while($datacustomer = mysqli_fetch_array($result)) {
									echo "<tr>";
									echo "<td>".$datacustomer['id_member']."</td>";
									echo "<td>".$datacustomer['nama_member']."</td>";
									echo "<td>".$datacustomer['no_ktp']."</td>";
									echo "<td>".$datacustomer['alamat_member']."</td>";
									echo "<td>".$datacustomer['kontak_member']."</td>";
									echo "<td><a href='editmember.php?id_member=$datacustomer[id_member]'>Edit</a></td>";
									echo "<td><a href='tesdelete.php?id_member=$datacustomer[id_member]'>Delete</a></td>";
								}
							}
								?>
								</table>
						
								
								</form>
								
								
							
						</div>											
					</div>
                </div>	
                <?php
                ?>

			</section>

            			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>

