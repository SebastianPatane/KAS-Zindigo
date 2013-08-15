
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>KAS NEWYORK</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" type="text/css">
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/app.css">
  
  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	
    <?php include('inc/header.php'); ?>
    
    
    <!-- Inspire Page Content -->
	<div class="row">
	  <div class="large-12 columns">
		  	
            <div class="top-section-title">What Inspires Us</div>
                
                    <div id="container01">
                        
                        <div class="photo" style="width:210px">
                             <a href="img/popup-img.jpg" class="fancybox" rel="inspire-gallery"><img src="img/inspire-us/01.jpg"/></a>
                        </div>
                        
                        <div class="photo" style="width:246px;">
                        	<a href="img/popup-img.jpg" class="fancybox" rel="inspire-gallery"><img src="img/inspire-us/02.jpg"/></a>
                        </div>
                        
                        <div class="photo" style="width:425px">
                        	<a href="img/popup-img.jpg" class="fancybox" rel="inspire-gallery"><img src="img/inspire-us/03.jpg"/></a>
                        </div>
                        
                        <div class="photo" style="width:210px;">
                        	<a href="img/popup-img.jpg" class="fancybox" rel="inspire-gallery"><img src="img/inspire-us/04.jpg"/></a>
                        </div>
                        
                        <div class="photo" style="width:246px;">
                        	<a href="img/popup-img.jpg" class="fancybox" rel="inspire-gallery"><img src="img/inspire-us/05.jpg"/></a>
                        </div>
                        
                        <div class="photo" style="width:467px;">
                        	<a href="img/popup-img.jpg" class="fancybox" rel="inspire-gallery"><img src="img/inspire-us/06.jpg"/></a>
                        </div>

                        <div class="photo" style="width:246px;">
                        	<a href="img/popup-img.jpg" class="fancybox" rel="inspire-gallery"><img src="img/inspire-us/07.jpg"/></a>
                        </div>

                        <div class="photo" style="width:169px;">
                        	<a href="img/popup-img.jpg" class="fancybox" rel="inspire-gallery"><img src="img/inspire-us/08.jpg"/></a>
                        </div>

                        
                    </div>
               
		</div>
	</div>
    <!-- /Inspire Page Content -->
    
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
  <script src="js/toucheffects.js"></script>
  <script src="source/jquery.fancybox.js?v=2.1.5"></script>
  <script src="js/jquery.isotope.min.js"></script>

  <script type="text/javascript">
   	$(document).ready(function() {
		
		$('.fancybox').fancybox({
			  arrows : false,
			  helpers : {
				  overlay : {
						locked : false
					}
			  }
		  });
		
		// Isotope Instance 01 //
		$(function(){
      		var $container = $('#container01');      
			$container.isotope({
			  itemSelector: '.photo',
				 masonry: {
					columnWidth: 20,
					gutterWidth: 10
				  }
			});
			
    	});
		// END Isotope Instance 01 //

  	});
	
	$(document).foundation();
	
	$(window).load(function(){$('#container01').isotope('reLayout');});
  
  </script>
  
  <?php include('inc/scripts.php'); ?>
  
</body>
</html>
