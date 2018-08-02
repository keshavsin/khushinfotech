<?php
require('constant.php');
?>
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
		
		
       
   <?php include 'footer.php'; ?>
