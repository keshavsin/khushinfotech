<?php
require('constant.php');
?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/auston/multi-page/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 06:26:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khushi Infotech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link href="img/favicon.png" rel="shortcut icon" type="image/png" />
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="lib/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="home-2 home-4">
    <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    <!-- Add your site or application content here -->
    <!--  Header Area Start Here -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo-area">
                             <a href="/"><img src="img/logo.png" id="logoHome" alt="image"></a>							 
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12  acurate">
                        <div class="main-menu-area">
                            <nav>
                                <ul id="nav">
                                   <li><a id="home" href="/">Home</a>
                                      
                                    </li>
                                    <li><a id="about" href="khushi-infotech.php">About</a>
                                       
                                    </li>
                                    <li><a id="services" href="software-training-services.php">Services</a>
                                        
                                    </li>
                                    <li><a id="our_work" href="software-platforms.php">Platform</a>
                                       
                                    </li>
                                    <li><a href="idea-software.php">Projects</a>
                                       
                                    </li>
                                  
                                    <li><a id="contact" href="khushi-infotech-contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a id="home" href="/">Home</a>
                                       
                                    </li>
                                    <li><a id="about" href="khushi-infotech.php">About</a>
                                      
                                    </li>
                                    <li><a id="services" href="software-training-services.php">Services</a>
                                     
                                    </li>
                                    <li><a id="our_work" href="software-platforms.php">Our Platform</a></li>
                                      
                                    <li><a href="idea-software.php">Projects</a>
                                     
                                    </li>
                                    <li><a id="contact" href="khushi-infotech-contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<style>
	.header-banner-area {   
    background: url(img/header/contact.jpg) no-repeat !important;

}
#googleMap{
	width:100%;
	height:500px;
}
	</style>
	<script src="component/jquery/jquery-3.2.1.min.js"></script>
	<script>
	$(document).ready(function (e){
		$("#contact-form").on('submit',(function(e){
			e.preventDefault();
			$("#mail-status").hide();
			$('#send-message').hide();
			
			$.ajax({
				url: "contact-form.php",
				type: "POST",
				dataType:'json',
				data: {
				"name":$('input[name="name"]').val(),
				"email":$('input[name="email"]').val(),
				"subject":$('input[name="subject"]').val(),
				"phone":$('input[name="phone"]').val(),
				"content":$('textarea[name="content"]').val(),
				"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
				success: function(response){
				$("#mail-status").show();
				
				if(response.type == "error") {
					$('#send-message').show();
					$("#mail-status").attr("class","error");				
				} else if(response.type == "message"){
					 $('#name').val("");					
					$('#email').val("");
					$('#phone').val("");
					$('#subject').val("");
					$('#content').val("");	
                    $('#send-message').show();
					$('#send-message').hide();
					$("#mail-status").attr("class","success");							
				}
				$("#mail-status").html(response.text);	
				},
				error: function(){} 
			});
		}));
	});
	</script>
   <script src='https://www.google.com/recaptcha/api.js'></script>	
    <div class="header-banner-area">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1>Contact Us</h1>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/ Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="main-conatct-form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="main-contact-form contact-form">
					<div id="message">
                        <form id='contact-form' role="form" action="" method="POST">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name*" pattern="[A-Za-z-\s]+" class="form-control" name="name" id="name" data-error="Name is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" id="email" class="form-control" data-error="Email is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject*" pattern="[A-Za-z-\s]+" class="form-control" id="subject" name="subject" data-error="Subject is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone*" pattern="[0-9]{10}" class="form-control" id="phone" name="phone" data-error="Phone number is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="Message*" class="textarea form-control" id="content" name="content" rows="8" cols="20" data-error="Message is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-sm-12">
								<div class="form-group">
									<div id="mail-status"></div>
									</div>
								</div>
								<!--<div class="col-sm-12">
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
									</div>
								</div>-->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn-read-more-fill btn-send" id="send-message" style="clear:both;">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class='form-response'></div>
                                </div>
                            </fieldset>
                        </form>
						<div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="page-sidebar-area">
                        <div class="single-sidebar">
                            <h3>Get In Touch</h3>
                            <nav>
								<p>If you need more information about our services or have any other queries fill the form and let us help you out.</p>
                                <ul>
                                    <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i> #2, 3rd Main Road, Postal Colony, Sanjay Nagar, Bengaluru - 94</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> +91 - 9845032710</li></br>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> keshavsin@khushinfotech.com</li>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
        <div class="google-map-area">
            
              <div id="googleMap">&nbsp;</div> 
        </div>
        <div class="clearfix"></div>
		
		
       
 <footer class="footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-one">
                            <h3>About Us</h3>
                            <p>If you need more information about our services or have any other queries fill the form and let us help you out. Our custom application and software development services cater a diverse range of industry verticals. </p>
                            
                        </div>
                    </div>					
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <div class="single-footer footer-two">
                            <h3>Quick Links</h3>
                            <nav>
                                <ul>
                                    <li><a href="khushi-infotech.php">About</a></li>
                                    <li><a href="software-training-services.php">Services</a></li>
									<li><a href="software-platforms.php">Our Platform</a></li>
                                    <li><a href="idea-software.php">Projects</a></li>
									<li><a href="khushi-infotech-contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="single-footer footer-two">
                            <h3>Quick Services</h3>
                            <nav>
                                <ul>
                                    <li><a href="software-training-services.php">IT Services & Training</a></li>
                                    <li><a href="software-training-services.php">Web Development</a></li>
									<li><a href="software-training-services.php">IT Products</a></li>
                                    <li><a href="software-training-services.php">IT Consulting</a></li>
									<li><a href="software-training-services.php">Corporate Training</a></li>
									<li><a href="software-training-services.php">Software Development</a></li>
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-footer footer-four">
                            <h3>Address</h3>
                            <nav>
                                <ul>
                                    <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i> #2, 3rd Main Road, Postal Colony, Sanjay Nagar, Bengaluru - 94</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> +91 - 9845032710</li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> keshavsin@khushinfotech.com</li>
                                    <!--<li><i class="fa fa-fax" aria-hidden="true"></i> Fax: (123) 118 9999</li>-->
									<div class="footer-social-media">
									
									</div>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-buttom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="copy-right-text">
                            <p>Copyright © 2018 Khushi-Infotech | All Rights Reserved.</p>
                        </div>
                    </div>
                     <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<p class="bottom">
                    Created By : <a href="http://www.mindstuff.in/" target="_blank"><span style="color:red">Mind</span><span style="color:#0099cc">stuff</span> <span style="color:#CBC8C2">Innovations</span></a>
					</p>
                        <!--<div class="footer-social-media">
                            <ul id="fnav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End Here -->
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Nivo slider js -->
    <script src="lib/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/custom-slider/home.js" type="text/javascript"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- jquery.scrollUp js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Cycle 2 slider js -->
    <script src="js/cycle2.js"></script>
    <script src="js/jquery.cycle2.carousel.js"></script>
    <!-- knob circle js -->
    <script src="js/jquery.knob.js"></script>
    <!-- jquery.appear js -->
    <script src="js/jquery.appear.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js" type="text/javascript"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1cZtqidvg0m-f8Hd3S6RHx1mY-omuLS4"></script>
	<script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(13.0344493, 77.57601769999997),
                };

                var map = new google.maps.Map(document.getElementById('googleMap'),
                    mapOptions);


                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation: google.maps.Animation.BOUNCE,
                    icon: 'img/map.png',
                    map: map
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script src="js/circleChart.min.js"></script>		
		<script>
        $(".circleChart#1").circleChart({
			size: 170,
            value: 95,	
			text: 'Corporate Training',	
			color: "#63b12d",
			relativeTextSize: 1 / 15,
			textWeight: 'bold',
			
		});
		
		$(".circleChart#2").circleChart({
			size: 170,
            value: 80,
			text: 'Technical Traning',	
			relativeTextSize: 1 / 15,			
			color: "#c88818",	
			textWeight: 'bold',			
		});
		
		$(".circleChart#3").circleChart({
			size: 180,
            value: 90,
			text: 'Process Training',	
			relativeTextSize: 1 / 15,			
			color: "#29a0cc",	
			textWeight: 'bold',			
		});
		
		$(".circleChart#4").circleChart({
			size: 170,
            value: 85,
			text: 'Domian Traning',	
			relativeTextSize: 1 / 15,			
			color: "#ccca29",	
			textWeight: 'bold',			
		});
		
        $(".circleChart#0").circleChart({
            size:200,
            value: 50,
            text: 0,
            onDraw: function(el, circle) {
                circle.text(Math.round(circle.value) + "%");
            }
        });
        setInterval(function() {
            $("#0").circleChart({
                value: Math.random() * 100
            });
        }, 4000);
    </script>
</body>
</html>