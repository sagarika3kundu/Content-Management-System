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

<body data-spy="scroll" data-target="#navigation_bar">
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
                    <li class="active"><a href="enquiry.php">Enquiry</a></li>
                    <li><a href="contact_us.php">contact us</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
                	</div>
              </div><!-- /.container-fluid -->
            </nav>
            </div>
        </div>
    
    <div class="banner_inner">
    	<img src="images/enquiry_banner.jpg" alt="...">
    </div>
    
        
    
       <section class="welcome">
         <div class="container">
					<div class="contact-inner mission">
						<h2 class="contact">ENQUIRY</h2>




						<br>
       <?php
	   	if(isset($_REQUEST['msg']))
			echo "<h3 class=text-center>".$_REQUEST['msg']."</h3>";
	   ?>




						<div class="row">
                                <div class="col-sm-4">
                                    <img src="images/enquiry.png"/>
                                </div>
								<div class="col-sm-8">
									<div class="contact-bor">
										<div class="enquiry-right-outer">
											




											<form class="contact-form form_name" action="enq.php" method="post">
												<div class="form-group">
													<label for="exampleInputname" class="name">Name</label>
													<input type="text" class="form-control name-input" id="exampleInputname" placeholder="" required name="fname">
												</div>
                                                <div class="form-group">
													<label for="exampleInputmessage"  class="name">Address</label>
													<textarea class="form-control name-input" rows="3" required name="addr"></textarea>
												</div>
                                                <div class="form-group">
													<label for="exampleInputtelephone" class="name">Mobile No</label>
													<input type="text" class="form-control name-input" id="exampleInputtelephone" placeholder="" required name="mob">
												</div>
												<div class="form-group">
                                                    <label for="exampleInputEmail1"  class="name">Email Id</label>
                                                    <input type="email" class="form-control name-input" id="exampleInputPassword1" placeholder="" required name="email">
												</div>
												<div class="form-group">
													<label for="exampleInputmessage"  class="name">Message</label>
													<textarea class="form-control name-input" rows="3" required name="msgg"></textarea>
												</div>
												<button type="submit" class="btn btn-primary submit-btn submitc">Submit</button>
											</form>	





										</div>
									</div>
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
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="companyprofile.html">Company Profile</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="enquiry.html">Enquiry</a></li>
                                <li><a href="contact_us.html">contact us</a></li>
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
