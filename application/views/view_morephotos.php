<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mapres UIN 2014</title>

    <!-- Bootstrap Core CSS -->
 
    <link href="<?php echo base_url("asset/css-fe/bootstrap.min.css");?>" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url("asset/img-fe/logo-uin.ico");?>" rel="shortcut icon" type="image/x-icon" />
       
    <!-- Fonts -->
    <link href="<?php echo base_url("asset/font-awesome-fe/css/font-awesome.min.css");?>"  rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("asset/css-fe/nivo-lightbox.css");?>" rel="stylesheet" />
	<link href="<?php echo base_url("asset/css-fe/nivo-lightbox-theme/default/default.css");?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url("asset/css-fe/animate.css");?>" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo base_url("asset/css-fe/style.css");?>" rel="stylesheet">
	<link href="<?php echo base_url("asset/color-fe/default.css");?>" rel="stylesheet">

<?php //echo base_url(""); ?>

</head>

<body data-spy="scroll">

<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				
				 

				<li><a href="<?php echo base_url();?>">
				<img src="<?php echo base_url("asset/img-fe/logo-uin.png"); ?>" width="40">
				&nbsp;
					Mapres UIN 2014
				</a></li>
				<li><ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	</li>
			</ul>
	</div>

	 
	<!-- Section: works -->
    <section id="gallery" class="home-section text-center bg-gray">
		<div class="heading-works marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
		
					<div class="section-heading">
					<h2>Gallery</h2>
					<!-- <p>Lorem ipsum dolor sit amet, no nisl mentitum recusabo per, vim at blandit qualisque dissentiunt. Diam efficiantur conclusionemque ut has</p> -->
					</div>
		
				</div>
			</div>
			</div>
		</div>
		<div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                    	<?php 
                    	foreach ($data_gallery as $data) {
                    	 

                    	?>
                        <div class="col-md-3">
							<a href="<?php echo $data->photo_file ?>" title="<?php echo $data->photo_title ?>" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="<?php echo $data->photo_file ?>" class="img-responsive" alt="img">
							</a>
						</div>
						 
						 <?php } ?>
					</div>

					
                </div>
            </div>
 
		
		</div>
	</section>
	<!-- /Section: works -->

 

	<footer style="background: #0B2E7A;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
		
					<p>Copyright &copy; 2015 - by Muhammad Assegaf. All Rights Reserved</p>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="<?php echo base_url("asset/js-fe/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/js-fe/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("asset/js-fe/jquery.easing.min.js"); ?>"></script>	
	<script src="<?php echo base_url("asset/js-fe/classie.js"); ?>"></script>
	<script src="<?php echo base_url("asset/js-fe/gnmenu.js"); ?>"></script>
	<script src="<?php echo base_url("asset/js-fe/jquery.scrollTo.js"); ?>"></script>
	<script src="<?php echo base_url("asset/js-fe/nivo-lightbox.min.js"); ?>"></script>
	<script src="<?php echo base_url("asset/js-fe/stellar.js"); ?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url("asset/js-fe/custom.js"); ?>"></script>

</body>

</html>
