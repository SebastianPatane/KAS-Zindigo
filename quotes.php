<?php include('inc/facebook-check.php'); ?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>KAS NEWYORK</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" type="text/css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/app.css">

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	
    <?php include('inc/header.php'); ?>
    
    
    <!-- Quotes Page Content -->
	<div class="row">
	  <div class="large-12 columns">
		  	
            <div class="top-section-title">QUOTES</div>
            
        	<div class="preloader"></div>
          	<ul data-orbit data-options="bullets:false; slide_number: false; pause_on_hover: false; timer: false">
                <li class="text-center"><div class="quotes-item"><img src="img/quotes-img-test.jpg"></div></li>
                <li class="text-center"><div class="quotes-item"><img src="img/home-quotes-img.jpg"></div></li>
                <li class="text-center"><div class="quotes-item"><img src="img/quotes-img-test.jpg"></div></li>
                <li class="text-center"><div class="quotes-item"><img src="img/home-quotes-img.jpg"></div></li>
          	</ul>
            
        </div>
        

	</div>
    <!-- /Quotes Page Content -->
    
    
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
  
  <?php include('inc/scripts.php'); ?>
  
</body>
</html>
