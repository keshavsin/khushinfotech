<?php include 'header.php'; ?>

<style>
	.header-banner-area {   
    background: url(img/header/contact.jpg) no-repeat !important;

}
#googleMap{
	width:100%;
	height:500px;
}
	</style>
    <!--  Header Area End Here -->
    <!-- Header Banner Area section Start Here -->
    <div class="header-banner-area">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1>Contact Us</h1>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>/ Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Banner Area section End Here -->
    <!-- Main Contact Page Section Area start here-->
   
    <!-- Contact Form Page start Here -->
    <div class="main-conatct-form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="main-contact-form contact-form">
                        <form id='contact-form' role="form">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name*" class="form-control" id="form-name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email*" class="form-control" id="form-email" data-error="Email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject*" class="form-control" id="form-name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Phone*" class="form-control" id="form-email" data-error="Email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn-read-more-fill btn-send">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class='form-response'></div>
                                </div>
                            </fieldset>
                        </form>
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
	
	
        <!-- Google Map Integrate Start Here -->
        <div class="google-map-area">
            
              <div id="googleMap">&nbsp;</div> 
        </div>
        <div class="clearfix"></div>
        <!-- Google Map Integrate End Here -->

  
    <!-- Footer Start Here -->
	
   <?php include 'footer.php'; ?>
