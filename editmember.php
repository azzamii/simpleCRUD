<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['ubah']))
{   
    $id_member = $_POST['id_member'];
									$nama_member = $_POST['nama_member'];
									$no_ktp = $_POST['no_ktp'];
									$alamat_member = $_POST['alamat_member'];
									$kontak_member = $_POST['kontak_member'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE member SET id_member='$id_member',nama_member='$nama_member',no_ktp='$no_ktp',alamat_member='$alamat_member',kontak_member='$kontak_member' WHERE id_member='$id_member'");
	header("Location:deletemember.php");
    // Redirect to homepage to display updated user in list

}
?>
<?php
// Display selected user data based on id
// Getting id from url
if(isset($_GET['id_member'])){
$id_member = $_GET['id_member'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM member WHERE id_member='$id_member'");

while($user_data = mysqli_fetch_array($result))
{
    $id_member = $user_data['id_member'];
	$nama_member = $user_data['nama_member'];
	$no_ktp = $user_data['no_ktp'];
	$alamat_member = $user_data['alamat_member'];
	$kontak_member = $user_data['kontak_member'];
}}
?>
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
							<form class="form" action="editmember.php" name="update_data" method="post">
							<div class="form-group">
							
							<input class="form-control txt-field" type="text" name="nama_member" value=<?php echo $nama_member;?>>
							<input class="form-control txt-field" type="text" name="no_ktp" value=<?php echo $no_ktp;?>>

								
								<input class="form-control txt-field" type="text" name="alamat_member" value=<?php echo $alamat_member;?>>
							    	<input class="form-control txt-field" type="text" name="kontak_member" value=<?php echo $kontak_member;?>>
							    	
							    </div>
							
					
							    	
							    
							    <div class="form-group row" >
							        <div class="col-md-12" >
									<input class="form-control txt-field" type="hidden" name="id_member" value=<?php echo $_GET['id_member'];?>>
										<input type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="ubah" value="Ubah">
										
							        </div>
							    </div>
								
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
