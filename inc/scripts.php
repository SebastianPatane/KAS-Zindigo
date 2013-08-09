<script>
  // Footer Fixed or Relative Validation //
  $(document).ready(function() {
	  if ( $("body").height() < $(window).height() ) {
		  $("#footer-id").addClass("relative");
	  }
	  
	  $('header').addClass('animated fadeIn');
	  $('#content').addClass('animated fadeInUp');
	  $('footer').addClass('animated fadeIn');
	  
  });
</script>