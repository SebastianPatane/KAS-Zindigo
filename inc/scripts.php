<script>
  // Footer Fixed or Relative Validation //
  $(document).ready(function() {
	  if ( $("body").height() < $(window).height() ) {
		  $("#footer-id").addClass("relative");
	  }
  });
</script>