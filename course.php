<?$course = $_REQUEST['course'];?>

<div class="nav">

	[ <a name="course" href="homework.php?course=<?echo $course;?>" class="default">Homework</a> ]
	[ <a name="course" href="grades.php?course=<?echo $course;?>" class="default">Grades</a> ]

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
		
		// link navigation cosmetics
		$('a[name=course]').removeClass("current").addClass("default");
		$(this).removeClass("default").addClass("current");
	});
</script>