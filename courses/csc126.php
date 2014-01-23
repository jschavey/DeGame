<div class="nav">

	<a href="courses/csc126/homework.php" class="default">Homework</a> | 
	<a href="courses/csc126/grades.php" class="default">Grades</a> |
	<a href="courses/csc126/prototype.php" class="default">Prototype</a>

</div>

<div id="csc126content">
</div>

<script> // function updates content
   $('a').click(function(){
	    event.preventDefault();
		var href = $(this).attr('href');

		$.get( href, function( data ) {
			$( "#csc126content" ).load(href);
		});
	});
</script>