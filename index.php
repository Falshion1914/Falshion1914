<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" onsubmit="return false;">
		<input type="text" id="inp">
		<button id="but">Submit</button>
	</form>
	<div id="txt">
		
	</div>
	<script>
			function makeid(length) {
				  var result           = '';
				  var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
				  var charactersLength = characters.length;
				  for ( var i = 0; i < length; i++ ) {
				      result += characters.charAt(Math.floor(Math.random() * charactersLength));
				  }
				  return result;
			}
			var token = makeid(50);
		document.body.onload = function() {
			var xhr = new XMLHttpRequest();
			document.cookie = "Id="+token+"; path=/; expires=;";
			xhr.onreadystatechange = function(){
				if(this.status == 200 && this.readyState == 4){
					alert("New user create")
				}else {
					
				}
			}
			xhr.open("POST","newuser.php",true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.send("Id="+token);

		}
		but.onclick = function() {
			var len = inp.value;
			if(len.length > 0){
				var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				     txt.innerHTML = this.responseText;
				    }
				 };
			 	xhttp.open("POST", "submit.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("InpValue="+len+"&Id="+token);
			}else{
				alert(0)
			}
		}
		function wait() {
			var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				     txt.innerHTML = this.responseText;
				     wait();
				    }
				 };
			 	xhttp.open("POST", "reload.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send();
		}
		wait();
	</script>
</body>
</html>