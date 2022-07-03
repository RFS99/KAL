<?php defined('BASEPATH') OR exit("No direct script access allowed");?>
<?PHP
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PISH">
    <meta name="keywords" content="PISH">
    <meta name="author" content="PISH">

    <title>PISH</title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.css')?>">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome/css/all.css')?>">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/animate-css/animate.css')?>">
    <!-- Icofont -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/icofont/icofont.css')?>">

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

	<!-- Alertify -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Alertify Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
</head>


<body data-spy="scroll" data-target=".fixed-top">



    <nav class="navbar navbar-expand-lg fixed-top trans-navigation header-white">
        <div class="container">
            <a class="navbar-brand" href="<?=base_url('admin')?>">PISH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="<?=base_url("/")?>">Home 
						</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
	<div class="banner-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
							<div class="banner-content content-padding">
								<h5 class="subtitle">Message</h5>
								<h1 class="banner-title" style="color: #000;"><?=@$message?></h1>
								<div class="col-12 text-center mt-5">
									<span style="color: #000;">Buat token baru? 
									<button type="button" style="color: #635cdb;" class="btn-generate" data-id="<?=@$user_id?>" data-uri="<?=base_url("generate-token")?>">Token Baru</button></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!-- Main jQuery -->
    <script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="<?=base_url('assets/plugins/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- Woow animtaion -->
    <script src="<?=base_url('assets/plugins/counterup/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/counterup/jquery.easing.1.3.js')?>"></script>
    <!-- Counterup -->
    <script src="<?=base_url('assets/plugins/counterup/jquery.waypoints.js')?>"></script>
    <script src="<?=base_url('assets/plugins/counterup/jquery.counterup.min.js')?>"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Alertify JavaScript -->
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<!-- home js -->
	<script src="<?=base_url('assets/js/home.js')?>"></script>
</body>

</html>
