<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>KAS NEWYORK</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" type="text/css">
  <link rel="stylesheet" href="css/app.css">

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	

    <?php include('inc/header.php'); ?>
    
    
    <!-- Home Page Content -->
	<div class="row home-grid">
		<div class="large-6 columns">
        	
		  	<div class="home-title orbit-hack"><h1>Shop</h1></div>
        	<div class="preloader"></div>
          	<ul data-orbit data-options="bullets:false; slide_number: false; pause_on_hover: false; timer: false">
                <li class="text-center"><a href="#"><img src="img/home-shop-img.jpg" alt="Shop"></a></li>
                <li class="text-center"><a href="#"><img src="img/home-shop-img.jpg" alt="Shop"></a></li>
                <li class="text-center"><a href="#"><img src="img/home-shop-img.jpg" alt="Shop"></a></li>
          	</ul>
            
          	<div class="home-title no-margin"><h1>Quotes</h1></div>
        	<a href="quotes.php"><img src="img/home-quotes-img.jpg" alt="Quotes"></a>
        </div>
        
        <div class="large-3 columns">
		  	<div class="home-title"><h1>Press</h1></div>
        	<a href="press.php"><img src="img/home-press-img.jpg" alt="Press"></a>
            
          	<div class="home-title"><h1>Trend Reports</h1></div>
        	<a href="trendsettings.php"><img src="img/home-trend-img.jpg" alt="Trend Reports"></a>
		</div>
        
        <div class="large-3 columns">
       	  	<div class="home-title"><h1>Who is KAS</h1></div>
        	<a href="who-is.php"><img src="img/home-kas-img.jpg" alt="Who is KAS"></a>
		</div>
	</div>
    <!-- /Home Page Content -->
    
    
    <?php include('inc/footer.php'); ?>

	

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
	
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
    
  <script>
    $(document).foundation();
  </script>
  
</body>
</html>
