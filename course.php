<?$course = $_REQUEST['course'];?>

<div class="nav">

	[ <a href="homework.php?course=<?echo $course;?>" class="default">Homework</a> ]
	[ <a href="grades.php?course=<?echo $course;?>" class="default">Grades</a> ]

</div>

<div id="course">
</div>

<script> // function updates content
   $('a').click(function(){
	    event.preventDefault();
		var href = $(this).attr('href');

		$.get( href, function( data ) {
			$( "#course" ).load(href);
		});
	});
</script>