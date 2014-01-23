<div class="nav">

	<a href="courses/mth201/homework.php" class="default">Homework</a> | 
	<a href="courses/mth201/grades.php" class="default">Grades</a> |
	<a href="courses/mth201/prototype.php" class="default">Prototype</a>

</div>

<div id="MTH201content">
</div>

<script> // function updates content
   $('a').click(function(){
	    event.preventDefault();
		var href = $(this).attr('href');

		$.get( href, function( data ) {
			$( "#MTH201content" ).load(href);
		});
	});
</script>