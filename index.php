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
				          <li class="menu-active"><a href="member.php">Member</a><ul>
							  <li><a href="member.php">Tambah member</a></li>
							  <li><a href="deletemember.php">Kelola member</a></li>
				            </ul>

						  
				          <li class="menu-has-children"><a href="index.php">Penyewaan</a><ul>
							  <li><a href="index.php">Penyewaan</a></li>
							  <li><a href="laporan.php">Laporan Harian</a></li>
				            </ul>
				            
						  <li class="menu-has-children"><a href="pengembalian.php">Pengembalian</a></li>
				            
				          <li class="menu-has-children"><a href="komplain.php">komplain</a></li>
				            		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Book Your Car Today!</h4>
							<form class="form" role="form" autocomplete="off" method="post">
							<div class="form-group">
							<input class="form-control txt-field" type="text" name="id_sewa" placeholder="id. sewa">
							<input class="form-control txt-field" type="text" name="id_member" placeholder="id. member">
							<input class="form-control txt-field" type="text" name="id_detil_mobil" placeholder="id. detil mobil">

								
								<input class="form-control txt-field" type="text" name="id_supir" placeholder="id. supir">
							    	<input class="form-control txt-field" type="text" name="lama_sewa" placeholder="Lama sewa">
							    	<input class="form-control txt-field" type="text" name="id_pegawai" placeholder="Id pegawai">
							    </div>
							    <div class="form-group row">
								<div class="col-md wrap">
										<div class="input-group dates-wrap">                                          
											<input id="date" class="dates form-control" name="tgl_sewa" placeholder="Tanggal sewa" type="text" onfocus="(this.type='date')">                        
																						
										</div>
										
										</div>
										
								</div>
								<div class="form-group row">
								<div class="col-md wrap">
										<div class="input-group dates-wrap">                                          
											<input id="date" class="dates form-control" name="tgl_kembali" placeholder="Tanggal kembali" type="text" onfocus="(this.type='date')">                        
																						
										</div>
										
										</div>
										
								</div>
								<div class="form-group row" >
							        <div class="col-md-12" >
								<input class="form-control txt-field" type="text" name="total_harga" placeholder="Total sewa">
								</div>
								</div>
							    	
							    
							    <div class="form-group row" >
							        <div class="col-md-12" >
										<button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="submit"  >Confirm Car Booking</button>
										
							        </div>
							    </div>
								<?php
								if(isset($_POST['submit'])) {
									$id_sewa = $_POST['id_sewa'];
									$id_member = $_POST['id_member'];
									$id_detil_mobil = $_POST['id_detil_mobil'];
									$id_supir = $_POST['id_supir'];
									$lama_sewa = $_POST['lama_sewa'];
									$id_pegawai = $_POST['id_pegawai'];
									$tgl_sewa = $_POST['tgl_sewa'];
									$tgl_kembali = $_POST['tgl_kembali'];
									$total_harga = $_POST['total_harga'];

									include_once("config.php");

									$result = mysqli_query($mysqli,
									"INSERT INTO penyewaan(id_sewa,id_member,id_detil_mobil,id_supir,lama_sewa,id_pegawai,tgl_sewa,tgl_kembali,total_harga) VALUES ('$id_sewa','$id_member','$id_detil_mobil','$id_supir','$lama_sewa','$id_pegawai','$tgl_sewa','$tgl_kembali','$total_harga')");

							
								}
								?>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

				

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



