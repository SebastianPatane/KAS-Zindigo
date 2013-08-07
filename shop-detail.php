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
    
    
    <!-- Shop Detail Page Content -->
	<div class="row">
	  <div class="large-12 columns">
		  	
            <div class="top-section-title">
            	<div class="row collapse">
                	<div class="large-5 small-5 columns"><a href="#">BACK</a></div>
                	<div class="large-7 small-7 columns text-right"><a href="#" class="shop-next">Next</a> <a href="#" class="shop-prev">Previous</a></div>
                </div>
            </div>
            
            <div class="row">
            	
                <div class="large-5 columns" id="big-image">
           	    	<img src="img/shop-img-detail.jpg"> 
                </div>
                
                <div class="large-7 columns shop-detail">
                
                	<h1>SMOKY TOPAZ AND DIAMOND RING</h1>
					        <h2>in 14k White Gold plated Sterling Silver</h2>
                    
                    <div class="row collapse">
                    	<div class="large-6 small-6 columns"><h3 class="old-price">$525</h3> <h3 class="new-price">$425</h3></div>
                        <div class="large-6 small-6 columns text-right"><a href="#" class="small button add-cart-button add-cart-price">ADD TO CART</a></div>
                    </div>
                        
                    <hr>
                    
                    <p>For a chic look at this season’s parties, the dramatic draping in contrast to the tight fitting skirt makes this the ultimate Cocktail Dress.</p>
                    
                    
                    
                    <!-- // COLOR BOXES WITH TOOLTIPS -->
                    <!-- span data-tooltip class="has-tip tip-top product-color color-01" title="Color Name"></span>
                    <span data-tooltip class="has-tip tip-top product-color color-02" title="Color Name"></span>
                    <span data-tooltip class="has-tip tip-top product-color color-03" title="Color Name"></span -->

                    
                    <form class="custom">
                    	<div class="row">
                    	 
                    		<div class="large-12 columns">
                            	<!-- label class="normal">Color</label><input type="text" class="size-color" -->
                            	<label class="normal">Color</label>
                                <select id="color" class="choose-color">
                                  <option selected DISABLED>CHOOSE COLOR</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                </select> 
                                <label class="small">Qty</label><input type="text" class="size-qty">
                            </div>
                    		<div class="large-12 columns">
                            	<label class="normal">Sizes</label>
                                <select id="size" class="select-size">
                                  <option selected DISABLED>CHOOSE SIZE</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                </select>
                                <a href="#" class="sizes-guide">Size<br>Guide</a>
                            </div>
                            <div class="large-12 columns">
                            	<!-- Product Thumbails -->
                            	<div id="images-shop-thumbails">
                                    <img src="http://placehold.it/70x70">
                                    <img src="http://placehold.it/70x70">
                                    <img src="http://placehold.it/70x70">
                                    <img src="http://placehold.it/70x70">
                                </div>
                                <!-- Ship message -->
                                <span class="shipping-note">(Usually ships in 2 to 5 business days)</span>
                            </div>
                            <div class="large-6 columns">
                            	<a href="#" class="small button add-cart-button">Add To Cart</a>
                            </div>
                            <div class="large-5 columns">
                            	<div class="shop-share-links">
                            		<span>Share</span>
                                    <ul>
                                        <li><a href="#" class="facebook">Facebook</a></li>
                                        <li><a href="#" class="twitter">Twitter</a></li>
                                        <li><a href="#" class="pinterest">Pinterest</a></li>
                                        <li><a href="#" class="mail">Email</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    
                    <hr>
                    
                    <!-- Recomended Products -->
                    <h4>You May also Like</h4>
                    
                    <div class="related-products">
                        <ul class="small-block-grid-5 small-block-grid-5">
                            <li><a href="#"><img src="http://placehold.it/100x85"></a></li>
                            <li><a href="#"><img src="http://placehold.it/100x85"></a></li>
                            <li><a href="#"><img src="http://placehold.it/100x85"></a></li>
                            <li><a href="#"><img src="http://placehold.it/100x85"></a></li>
                            <li><a href="#"><img src="http://placehold.it/100x85" class="no-margin"></a></li>
                        </ul>
                    </div>
                    <!-- /Recomended Products -->
                    
                    <!-- Remove this / Used to force scrolling 
                    <br><br><br><br><br><br><br><br>-->
                    
                </div>
            
            </div>
            
            
        </div>
        

	</div>
    <!-- /Shop Detail Page Content -->
    
    
    <?php include('inc/footer.php'); ?>

	

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>

  <script src="js/jquery-1.10.2.min.js"></script>		
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script>
    $(document).foundation();
	
	$(document).ready(function () {
		$("#images-shop-thumbails img").click(function () {
			var changeSrc = $(this).attr("src");
			var changeAlt = $(this).attr("alt");
			$("#big-image img").fadeOut("fast");
			$("#big-image img").attr("src", changeSrc);
			$("#big-image img").fadeIn("fast");
			var changeAlt = $(this).attr("alt");
		});
	}); 
	
  </script>
  
  <?php include('inc/scripts.php'); ?>
  
</body>
</html>
