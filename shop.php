
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
    
    
    <!-- LookBook Page Content -->
	<div class="row">
	  <div class="large-12 columns">
		  	
            <div class="top-section-title">SHOP</div>
            
            		
                    <div id="shop">
                        
                        <div class="shop-item shop-big">
                        	<a href="shop-detail.php"><img src="img/shop-img-orbit.jpg"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                        <div class="shop-item">
                        	<a href="#"><img src="http://placehold.it/180x240"></a><br><span>Lorem ipsum<br>$450</span>
                        </div>
                       
                        
                    </div>
                    
                    
                
        </div>
	</div>
    <!-- /LookBook Page Content -->
    
    
    <?php include('inc/footer.php'); ?>

	

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
    
  <script>
  
  	$(document).ready(function() {		
		// Isotope Instance 01 //
		$(function(){
      		var $container = $('#shop');      
			$container.isotope({
			  itemSelector: '.shop-item',
				 masonry: {
					columnWidth: 240
				  }
			});
			
    	});
		// END Isotope Instance 01 //

  	});
	
    $(document).foundation();
  </script>
  
  <?php include('inc/scripts.php'); ?>
  
</body>
</html>
