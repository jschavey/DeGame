<!-- homework page prototype -->

<!-- database management -->
<?php
require_once('../../includes/connectvars.php');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT id, assignment, description, due, completed FROM homework WHERE course='MTH201'";

if ($stmt = mysqli_prepare($link, $query)) {

    /* execute statement */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $tmp_id, $tmp_assignment, $tmp_description, $tmp_due, $tmp_completed);

    /* fetch values */
    while (mysqli_stmt_fetch($stmt)) {
        $id[] = $tmp_id;
        $assignment[] = $tmp_assignment;
		$description[] = $tmp_description;
        $due[] = $tmp_due;
        $completed[] = $tmp_completed;
    }

    /* close statement */
    mysqli_stmt_close($stmt);
}

/* close connection */
mysqli_close($link);
?>


<br>
<table class="homework">
	<tr>
		<th clas="date">Due Date</th>
		<th class="name">Assignments</th>
<!--		<th class="completed">Completed<br>(To Be Implemented)</th> -->
	</tr>
<? for($i=0; $i<(count($id)); $i++){ ?>
	<tr>
		<td class="date"><?echo $due[$i];?></td>
		<td class="name"><?echo $assignment[$i];?> <br> <?echo $description[$i];?></td>
<!--		<td class="completed"><input type="checkbox" value="completed"></td> -->
	</tr>
<? } ?>
</table>
	
<h4>Homework From Database</h4>