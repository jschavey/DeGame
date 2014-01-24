<!-- navigation prototype -->

<!-- database management -->
<?php
require_once('connectvars.php');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// determine course to output homework for

$query = "SELECT * FROM courses WHERE deprecated='0'";

if ($stmt = mysqli_prepare($link, $query)) {

    /* execute statement */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $tmp_id, $tmp_code, $tmp_name, $tmp_deprecated);

    /* fetch values */
    while (mysqli_stmt_fetch($stmt)) {
        $id[] = $tmp_id;
        $code[] = $tmp_code;
        $name[] = $tmp_name;
        $deprecated[] = $tmp_deprecated;
    }

    /* close statement */
    mysqli_stmt_close($stmt);
}

/* close connection */
mysqli_close($link);
?>

<!-- end db management -->

<!-- begin view -->

<div class="nav">
<? for($i=0; $i<(count($id)); $i++){ ?>	
	 [ <a href="course.php?course=<?echo $code[$i];?>" class="default"><?echo $name[$i];?></a> ] 
<? } ?>
</div>

<script> // function updates content
   $('a').click(function(){
	    event.preventDefault();
		var href = $(this).attr('href');

		$.get( href, function( data ) {
			$( "#content" ).load(href);
		});
		
		// link navigation cosmetics
		$('a').removeClass("current").addClass("default");
		$(this).removeClass("default").addClass("current");
	});
</script>