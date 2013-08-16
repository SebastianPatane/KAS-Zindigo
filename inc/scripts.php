<script>
  // Footer Fixed or Relative Validation //
  $(document).ready(function() {
	  if ( $("body").height() < $(window).height() ) {
		  $("#footer-id").addClass("relative");
	  }
	  
	  /*$('header').addClass('animated fadeIn');
	  $('#content').addClass('animated fadeInDown');
	  $('#footer-id').addClass('animated fadeInUp');*/
	  
	  // jQuery Custom Scroll Bars
	  $(".designer-content").mCustomScrollbar({
		  theme:"dark-thick",
		  scrollInertia: 1000
	  });
	  
  });
  
  
  // Fire Reveal Modal with Scroll Query
  function Show_Designer() {
	  $('#designer-interview').foundation('reveal', 'open', {animation: 'fade'});
	  setTimeout(function(){$(".designer-content").mCustomScrollbar("update");},500)
  }
	
</script>