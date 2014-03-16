<?
//////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	SCRIPT: completed.php	- handles completed homework
//
//	02.15.2014	|	js	|	prototyped
//
//	TODOs:	all
//
//////////////////////////////////////////////////////////////////////////////////////////////////////

//	Includes	//////////////////////////////////////////////////////////////////////////////////////
	
require_once('includes/mySQL.php');
	
//////////////////////////////////////////////////////////////////////////////////////////////////////
	
//	Data	//////////////////////////////////////////////////////////////////////////////////////////
	
$isCompleted = 0;	
	
//////////////////////////////////////////////////////////////////////////////////////////////////////
	
//	Logic	//////////////////////////////////////////////////////////////////////////////////////////
	
drawCompleted($isCompleted);	
	
//////////////////////////////////////////////////////////////////////////////////////////////////////
	
//	View	//////////////////////////////////////////////////////////////////////////////////////////

function drawCompleted($isCompleted) {
	if($isCompleted) {
		echo '&#10004;';
	}	
}
	
//////////////////////////////////////////////////////////////////////////////////////////////////////