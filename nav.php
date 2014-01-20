<div class="nav">

	<button type="button" onclick="loadContent('courses/mth201.php')" class="default">Calculus I</button> |
	<button type="button" onclick="loadContent('courses/art132.php')" class="default">3D Graphic Design</button> |
	<button type="button" onclick="loadContent('courses/cs161.php')" class="default">Game Design</button> |
	<button type="button" onclick="loadContent('courses/mus120.php')" class="default">Music Appreciation</button>

</div>

<script> // function updates content
	function loadContent(location)
	{
		var xmlhttp;
		if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else {// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("content").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET",location,true);
		xmlhttp.send();
	}
</script>