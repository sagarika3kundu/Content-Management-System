<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anjana Plastic Udyog</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="css/responsive.css" rel="stylesheet"/>

	<link href="newsticker/site.css" rel="stylesheet" type="text/css" />
    
    <script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.js"></script>    
    <script src="owl-carousel/owl.carousel.js"></script>
    
  </head>

<body>
    <div class="logo_outer">
    	<div class="container">
        	<div class="logo clearfix"><a class="navbar-brand" href="#"><img src="images/logo.png" alt="..."></a></div>
        </div>
    </div>
    <div class="nav_main">
    	<div id="sticky-anchor"></div>
    		<div id="sticky">
            <nav class="navbar navbar-default  navigation">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                	<div class="navigation_inner">
                    	<div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>

                    </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right navi">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="companyprofile.php">Company Profile</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="enquiry.php">Enquiry</a></li>
                    <li class="active"><a href="contact_us.html">contact us</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
                	</div>
              </div><!-- /.container-fluid -->
            </nav>
            </div>
        </div>
    
    <div class="banner_inner">
    	<img src="images/contact_banner.jpg" alt="...">
    </div>
    
        
    
       <section class="welcome">
         <div class="container">
                    <div class="row">
                    
                    			<div class="col-sm-4">
									<div class="contact-left-outer well well-sm">
                                    	<h2 class="addr-heading">Corporate office: </h2>
                                    	<p class="addressc"><span class="red">Anjana Plastic Udyog</span>
                                        <span>298, RABINDRA SARANI, 4TH FLOOR, ROOM NO 425</span>
                                        <span>Kolkata-700073, West Bengal, India</span></p>
                                    	<h2 class="addr-heading">Support</h2>
                                   		<p class="addressc">+91 7044212184 <br/> +91 9674908602 <br/> 033 25330046</p>
                                                                
                                     	<h2 class="addr-heading">Our Email:</h2>
                                   	<p class="addressc"><a href="#">support@anjanaplasticudyog.in</a></p>
                                  </div>
								</div>
                    	
                      <div class="col-sm-8">
                        <div class="well well-sm complain_form_outer">
                          
<br>
       <?php
      if(isset($_REQUEST['msg']))
      echo "<h3 class=text-center>".$_REQUEST['msg']."</h3>";
     ?>





                          <form class="form-horizontal" action="cont.php" method="post">
                          <fieldset>
                            <legend class="complain_form_heading">Your feedback</legend>
                    
                            <!-- Name input-->
                            <div class="form-group">
                              <label class="col-md-4 complain_form_text" for="name">Name:</label>
                              <div class="col-md-8">
                                <input id="name" type="text" placeholder="Your name" class="form-control" required name="fname">
                              </div>
                            </div>
                            

                    
                            <!-- Email input-->
                            <div class="form-group">
                              <label class="col-md-4 complain_form_text" for="email">Enter e-mail id:</label>
                              <div class="col-md-8">
                                <input id="email" type="text" placeholder="Your email" class="form-control" required name="email">
                              </div>
                            </div>
                            
                            <!-- phno input-->
                            <div class="form-group">
                              <label class="col-md-4 complain_form_text" for="email">Enter Phone no:</label>
                              <div class="col-md-8">
                                <input id="email" type="text" placeholder="Your ph no" class="form-control" required name="mob">
                              </div>
                            </div>                            
                    
                            
                            <!-- feedback body -->
                            <div class="form-group">
                              <label class="col-md-4 complain_form_text" for="message">Share your Feedback:</label>
                              <div class="col-md-8">
                                <textarea class="form-control" id="message" placeholder="Please write your feedback here..." rows="5" required name="msgg"></textarea>
                              </div>
                            </div>
                    
                            <!-- Form actions -->
                            <div class="form-group">
                              <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary submitc">Submit</button>
                              </div>
                            </div>
                          </fieldset>
                          </form>
                        </div>
                      </div>
                    </div>
				</div>   
       </section>
   
	<footer>
    	<div class="footer_outer">
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-4">
                        	<h2 class="footer_heading">Products</h2>
                            <ul class="footer_nav">
                                <li><a href="products.php">Acid Carboys</a></li>
                                <li><a href="products.php">Jerry Cans</a></li>
                                <li><a href="products.php">Bottles</a></li>
                                <li><a href="products.php">Jar</a></li>
                                <li><a href="products.php">Jugs</a></li>
                                <li><a href="products.php">Beakers</a></li>
								<li><a href="products.php">Funnles</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                        	<h2 class="footer_heading">Products</h2>
                            <ul class="footer_nav">
                                <li><a href="products.php">Polythine Bags</a></li>
                                <li><a href="products.php">Pet Bottlles</a></li>
                                <li><a href="products.php">Agricultural</a></li>
                                <li><a href="products.php">Lables &amp; Stickers Drum</a></li>
                                <li><a href="products.php">Grease Bucket</a></li>
                                <li><a href="products.php">Container Paints</a></li>
                                <li><a href="products.php">Container Polythene Shirnl Films</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-sm-4">
                        	<h2 class="footer_heading">Sitemap</h2>
                            <ul class="footer_nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="companyprofile.php">Company Profile</a></li>
                                <li><a href="products.php">Products</a></li>
                                <li><a href="enquiry.php">Enquiry</a></li>
                                <li><a href="contact_us.php">contact us</a></li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="footer_bottom">
            	<div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="footer_bot_text">© Copyright 2015 Anjana Plastic Udyog</p>
                        </div>
                        <div class="col-sm-6 clearfix">
                        	<p class="pull-right footer_bot_text">Designd &amp;Developed By Anjana Plastic Udyog</p>
                        </div>
                    </div>
            	</div>
            </div>
        </div>
    </footer>
   		

   
<script>
function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
    } else {
        $('#sticky').removeClass('stick');
    }
}

$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});
</script> 

     <script>
$(function(){

  var $navBar = $('#navigation_bar');
  var showNavBarMinimum = $('#introduction').height() - $navBar.height();

  var wasNavBarVisible = false;
  // change nav bar visibility on scroll
  function onScroll() {
    var isNavBarVisible = window.pageYOffset >= showNavBarMinimum;
    if ( isNavBarVisible != wasNavBarVisible ) {
      $navBar.toggleClass('show');
      wasNavBarVisible = isNavBarVisible;
    }
  }
  // initial check
  onScroll();

  // http://davidwalsh.name/function-debounce
  function debounce( fn, wait ) {
    var timeout;
    return function() {
      var _this = this;
      var args = arguments;
      var later = function() {
        timeout = null;
        fn.apply( _this, args );
      };
      clearTimeout( timeout );
      timeout = setTimeout( later, wait || 100 );
    };
  }

  $(window).scroll( debounce( onScroll, 10 ) );

 //$('body').scrollspy({ target: '#navigation_bar' });

  // Scroll Animations
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash),
		  nav = $('.navbar-fixed-top').outerHeight();
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - nav
        }, 1000);
        return false;
      }
    }
  });

});
    </script>  
   
</body>
</html>
