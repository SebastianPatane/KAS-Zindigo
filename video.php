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
  <link rel="stylesheet" href="css/app.css">

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	
    <?php include('inc/header.php'); ?>
    
    
    <!-- Video Page Content -->
	<div class="row">
	  <div class="large-12 columns">
		  	
            <div class="top-section-title">VIDEO</div>
            
            
            <div class="row video-content text-center">
            
				<div class="large-4 columns"><div class="video"><span>Video Name</span><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" rel="video-gallery"><img src="http://placehold.it/400x300"></a></div></div>
                <div class="large-4 columns"><div class="video"><span>Video Name</span><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" rel="video-gallery"><img src="http://placehold.it/400x300"></a></div></div>
                <div class="large-4 columns"><div class="video"><span>Video Name</span><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" rel="video-gallery"><img src="http://placehold.it/400x300"></a></div></div>
                
                <div class="large-4 columns"><div class="video"><span>Video Name</span><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" rel="video-gallery"><img src="http://placehold.it/400x300"></a></div></div>
                <div class="large-4 columns"><div class="video"><span>Video Name</span><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" rel="video-gallery"><img src="http://placehold.it/400x300"></a></div></div>
                <div class="large-4 columns"><div class="video"><span>Video Name</span><a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" rel="video-gallery"><img src="http://placehold.it/400x300"></a></div></div>
                
			</div>
            
        </div>
	</div>
    <!-- /Video Page Content -->
    
    
    <?php include('inc/footer.php'); ?>

	

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/jquery-1.10.2.min.js"></script>	
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="source/jquery.fancybox.js?v=2.1.5"></script>
  <script src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
  <script src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {

			$('.fancybox-media')
				.attr('rel', 'video-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

		});
	</script>
    
  <script>
    $(document).foundation();
  </script>
  
</body>
</html>
