<html> 
<head><title>Form A Group</title>
	
<script type="text/javascript">

function PrintOut(){
	document.getElementById("FriendList").innerHTML += "<p>" + document.getElementById("textfield").value + "<p/";
	document.getElementById("textfield").value = "" ;
}

</script>

</head>

<body>
	<form>
		請輸入朋友名稱： <input id="textfield" type="text">
		<input type="button" value="ADD" onclick="PrintOut()">
	</form>
	
	<div id="FriendList"></div>
</body>

</html>