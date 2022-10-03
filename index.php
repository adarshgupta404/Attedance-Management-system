<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>Teens Of GOD Attendance Management System</title>
		<script type="text/javascript" src="js/adapter.min.js"></script>
		<script type="text/javascript" src="js/vue.min.js"></script>
		<script type="text/javascript" src="js/instascan.min.js"></script>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
		<link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
	</head>
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top" style="background-color: blue; color: white;" >
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "admin/images/chmsc.png" width = "50px" height = "50px"/>
					<p class = "navbar-text pull-right" style="color: white;">Teens Of GOD Attendance Management System</p>
				</div>
			</div>
		</nav>
		<div class="col-md-14">
					<br>
					<br>
					<br>
		<div class = "container-fluid">
			<div class = "vid"><video width= "30%" id="preview"></video>
			</div>
			<table>
			<tr>
			<div class = "col-lg-1"></div>
			</tr>
			<tr>
			<div class = "col-lg-2"></div>
			<div class = "col-lg-6 well" >
				<p align = "center" ></p>
				<h2 class = "btn btn-success" style="background-color: blue;">Attendance Login</h2>
				<a text-color = "white;" class ="anchor" href="/attendance/admin/"><button class="button"><span>Login As Admin</span></button></a>
				<br />
				<div id = "result"></div>
				<br />
				<br />
				<form enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Student ID:</label>
						<input type="text" id="student" placeholder="Scan QRcode/ Enter Your ID" class="form-control" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<button type = "button" id = "login" class = "btn btn-success btn-block"><span class = "glyphicon glyphicon-login"></span>Login</button>
					</div>
				</form>
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom" style="background-color: blue; color: white;">
			<div class = "container-fluid">
				<center><label>&copy; Teens Of GOD Attendance Management System 2022</label></center>
			</div>	
		</div>	
		</tr>
		
		</table>
	</body>
	<script>
       let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
       Instascan.Camera.getCameras().then(function(cameras){
           if(cameras.length > 0 ){
               scanner.start(cameras[0]);
           } else{
               alert('No cameras found');
           }
	   
       }).catch(function(e) {
           console.error(e);
       });
	
       scanner.addListener('scan',function(c){
           document.getElementById('student').value=c;
       });
    </script>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>