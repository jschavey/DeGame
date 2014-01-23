<div class="nav">
	
	<a href="courses/mth201.php" class="default">Calculus I</a> |
	<a href="courses/art132.php" class="default">3D Design Concepts</a> |
	<a href="courses/csc126.php" class="default">Game Design</a> |
	<a href="courses/mus120.php" class="default">Music Appreciation</a> 

</div>

<script> // function updates content
   $('a').click(function(){
	    event.preventDefault();
		var href = $(this).attr('href');

		$.get( href, function( data ) {
			$( "#content" ).load(href);
		});
	});
</script>