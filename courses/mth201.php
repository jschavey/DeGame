<div class="nav">

	<button type="button" onclick="loadMTH201Content('mth201/homework.php')" class="default">Homework</button> |
	<button type="button" onclick="loadMTH201Content('mth201/grades.php')" class="default">Grades</button>

</div>

<div class="MTH201content">
</div>

<script> // function updates content
	function loadMTH201Content(location)
	{
		var xmlhttp;
		if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("MTH201content").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET",location,true);
		xmlhttp.send();
	}
</script>