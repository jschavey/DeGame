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

$query = "SELECT * FROM homework WHERE course='MTH201'";

if ($stmt = mysqli_prepare($link, $query)) {

    /* execute statement */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $tmp_id, $tmp_course, $tmp_assignment, $tmp_due, $tmp_value, $tmp_score);

    /* fetch values */
    while (mysqli_stmt_fetch($stmt)) {
        $id[] = $tmp_id;
        $course[] = $tmp_course;
        $assignment[] = $tmp_assignment;
        $due[] = $tmp_due;
        $value[] = $tmp_value;
        $score[] = $tmp_score;
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
		<th class="score">Score</th>
		<th class="value">Value</th>
	</tr>
<? for($i=0; $i<(count($id)); $i++){ ?>
	<tr>
		<td class="date"><?echo $due[$i];?></td>
		<td class="name"><?echo $assignment[$i];?></td>
		<td class="score"></td>
		<td class="value"><?echo $value[$i];?></td>
	</tr>
<? } ?>
</table>
	
<h4>Homework From Database</h4>