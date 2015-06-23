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

	 
	<!-- Section: services -->
    <section id="activity" class="home-section text-center">
		
		<div class="heading-about marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
		
					<div class="section-heading">
					<h2>Our Activity</h2>
			 		</div>
			
				</div>
			</div>
			</div>
		</div>
		<div class="container">
        <div class="row">

        				<?php 
                    	foreach ($data_article as $data) {
                    	 

                    	?>
                         <div class="col-sm-4 col-md-4">
			
			                <div class="service-box">
								<div class="service-icon">
									<center>
									<img src="<?php echo $data->photo ?>" width="250" class="img-responsive" alt="img"/>
									</center>
								</div>
								<div class="service-desc">
									<h5><?php echo $data->title ?></h5>
									<p><?php echo substr($data->content, 0, 150)." ..."; ?>&nbsp;
									 
                            			<a href="<?php echo base_url();?>mprs/Artcl/<?php echo $data->id_article; ?>">
                            				<button class="btn btn-warning btn-sm">Read More</button>
                            			</a>
                        			</p>
								</div>
			                </div>
			       		</div>
						 
						 <?php } ?>
           </div> 
        		
		</div>
	</section>
	<!-- /Section: services -->
	
	 

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
