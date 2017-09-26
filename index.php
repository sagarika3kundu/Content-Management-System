<?php include("admin/lib/connection.php"); ?>

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
    
    <script src="newsticker/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

    
	<script >
    $(document).ready(function() {
     
    $("#owl-demo").owlCarousel({
     
    autoPlay:2000,
	stopOnHover: true,
    items :4,
	navigation:false,
	pagination:false,
     
    });
     
    });
    </script>
    
    <script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 2,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval:2000,
            onToDo: function () {
                //console.log(this);
            }
        });

    });
</script>
    
    
    
    
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="companyprofile.php">Company Profile</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="enquiry.php">Enquiry</a></li>
                    <li><a href="contact_us.php">contact us</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
                	</div>
              </div><!-- /.container-fluid -->
            </nav>
            </div>
        </div>
    
    <div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            
        <?php
        $i=0;
        $galleryy=mysql_query("select * from `banners`");
          while($bann = mysql_fetch_array($galleryy)){
            ?>
          }
            <div class="item <?php if($i==0){ echo "active";} ?>">         
              <img src="<?php echo "admin/".$bann['image_big'];?>" alt="...">
              <div class="carousel-caption">
              </div>
            </div>
        
            <?php
            $i++;
          }
          ?>
            
        
          </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    
            
            
        
         
    
    	<div class="container">
        	<div class="offer_outer">
            	<div class="row">
                    <div class="col-sm-3"><img src="images/product_we_offer.jpg" alt="product" /></div>
                    <div class="col-sm-8">
                        <div class="offer">
                            <p>We are a Plastic Company providing our customer’s services of 
                    manufacturing various spares for the plastic Industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="product_home">
            <div class="container">
                <div class="product_home_inner">
                    <div class="row">
                    	<div class="col-sm-12">
                            <div class="products_details">
                            <div id="owl-demo" class="owl-carousel owl-theme">
                              


                              <?php
          $gallery=mysql_query("select * from `gallery` order by `image_id`");
          while($show = mysql_fetch_array($gallery))
          {
          ?>


           <div class="item">
                              <img src="<?php echo "admin/".$show['image_big']; ?>"/>
                              <h2><?php echo $show['image_desc'] ?></h2>
            
                              <div class="more"><a href="products.php">m</a></div>
                              </div>
                              

                        
                  <?php
          }
          ?>
                              
                        </div>                    
                	</div>
                </div>
            </div>
        </div>
    </div>
 </div>
    
   <section class="welcome">
   	<div class="container">
    	<div class="welcome_inner">
            <div class="row">
                <div class="col-sm-8">
                <?php
      $cms=mysql_fetch_array(mysql_query("select * from `cms` where page_id = '1'"));
      ?>
                    <div class="mission clearfix">
                        <h4 class="iheading"><span>Our</span> MISSION</h4>
                        <img src="<?php echo "admin/".$cms['page_image_thumb2']; ?>" class="pull-left"/>
                        

                        <p><?php echo $cms['page_desc']; ?></p>
                        <div class="read_more"><a href="services.html">Read More</a></div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="mission">
                        <h4 class="iheading"><span>Company</span> News</h4>
                          <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="row">
                            <div class="col-xs-12">
                            <ul class="demo1">
                            <?php
                            $news = mysql_query("select * from `news` order by `event_id`");
        while($show = mysql_fetch_array($news))
        {
        ?>
                            <li class="news-item">
                            <table cellpadding="4">
                            <tr>
                            <td><img src=<?php echo "admin/".$show['thumb_image1']; ?> width="60"/></td>
                            <td><?php echo $show['event_desc']; ?></td>
                            </tr>
                            </table>
                            </li>
               <?php
         }
         ?>
   
                            
                           
                            </ul>
                            </div>
                            </div>
                            </div>
                           </div>
                        <div class="read_more"><a href="services.html">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        	<div class="row">
				<div class="col-sm-12">
                    <div class="mission customer">
                        <h4 class="iheading"><span>Our</span> Customers</h4>
                         <?php
      $cms=mysql_fetch_array(mysql_query("select * from `cms` where page_id = '2'"));
      ?>
                        <p<?php echo $cms['page_desc'];?> </p>
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
   
</body>
</html>
