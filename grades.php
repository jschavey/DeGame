<!-- grades page prototype -->

<!-- database management -->
<?php
require_once('includes/connectvars.php');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// determine course
$course = $_REQUEST['course'];

$query = "SELECT id, assignment, score, value FROM homework WHERE course='".$course."'";

if ($stmt = mysqli_prepare($link, $query)) {

    /* execute statement */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $tmp_id, $tmp_assignment, $tmp_score, $tmp_value);

    /* fetch values */
    while (mysqli_stmt_fetch($stmt)) {
        $id[] = $tmp_id;
        $assignment[] = $tmp_assignment;
		$score[] = $tmp_score;
		$value[] = $tmp_value;
	}

    /* close statement */
    mysqli_stmt_close($stmt);
}

/* close connection */
mysqli_close($link);
?>

<!-- end db management -->

<br>
<table class="grades">
	<tr>
		<th class="name">Assignments</th>
		<th class="score">Score</th>
		<th class="value">Value</th>
	</tr>
<? for($i=0; $i<(count($id)); $i++){ ?>
	<tr>
		<td class="name"><?echo $assignment[$i];?></td>
		<td class="score"><?echo $score[$i];?></td>
		<td class="value"><?echo $value[$i];?></td>
	</tr>
<? } ?>
	<tr>
		<td class="total">Totals:</td>
		<td class="score"><?echo array_sum($score);?></td>
		<td class="value"><?echo array_sum($value);?></td>
</table>
	
<h4>Grades From Database</h4>