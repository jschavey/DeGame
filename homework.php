<?
//////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	PAGE: homework.php	- displays homework for course as tabular data
//
//	02.15.2014	|	js	|	revamped to use mySQL library
//
//////////////////////////////////////////////////////////////////////////////////////////////////////

//	Includes	//////////////////////////////////////////////////////////////////////////////////////

require_once('includes/mySQL.php');

//////////////////////////////////////////////////////////////////////////////////////////////////////

//	Inputs	//////////////////////////////////////////////////////////////////////////////////////////

$course = $_REQUEST['course'];
//var_dump($course);

//	Data	//////////////////////////////////////////////////////////////////////////////////////////

$select 	= "SELECT due,
				CONCAT(assignment, description) AS details,
				completed FROM homework";
$where		= "WHERE course='$course'";
$homework 	= select($select, $where);

//////////////////////////////////////////////////////////////////////////////////////////////////////

//	Logic	//////////////////////////////////////////////////////////////////////////////////////////?>

<?
//////////////////////////////////////////////////////////////////////////////////////////////////////

//	View	//////////////////////////////////////////////////////////////////////////////////////////?>

<br>
<table id="homeworkTable">
	<thead>
		<tr>
			<th>Due Date</th>
			<th>Details</th>
			<th>Completed</th>
		</tr>
	</thead>
	<tbody>
		<?foreach( $homework as $assignment ) {?>
		<tr>
			<td><?=$assignment['due'];?></td>
			<td><?=$assignment['details']?></td>
			<td><?=$assignment['completed']?></td>
		</tr>
		<?} unset( $assignment );?>
	</tbody>
</table>
<?
//////////////////////////////////////////////////////////////////////////////////////////////////////?>