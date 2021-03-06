<!DOCTYPE html>
<style>
/*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */
#playground-container {
    height: 500px;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}

body, html{
    height: 100%;
 	background-repeat: no-repeat;
 	background:url(https://cdn.shutterstock.com/shutterstock/videos/1070608/thumb/1.jpg);
	font-family: Raleway,sans-serif;
	background-size: cover;
}

.main{
 	margin:50px 15px;
}

h1.title { 
	font-size: 50px;
	font-family: Raleway,sans-serif;
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
	font-size:15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 15px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
	padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    margin-top: 28px;
    padding: 6px 12px;
	background:#006064;
	color:#ffffff;    
	font-family: Raleway,sans-serif;
	text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
}
.main-center{
 	margin-top: 5%;
 	max-width: 30%;
	margin-left: 70%;
    padding: 10px 40px;
	background:#78909C;
	color: #FFF;
	background-color:rgba(120, 144, 156, 0.6);
	text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
	-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
	box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
	font-family: Raleway,sans-serif;

}
span.input-group-addon i {
    color: #006064;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.navbar{
	background-color:rgba(120, 144, 156, 0.6);
}
.navbar-brand{
	padding: 5px 5px 5px 5px;
}

option{
font-size:15px;
}
</style>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
		<meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<title>VPS EMR</title>
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-custom navbar-fixed-top" role="navigation">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">
				  <img src="https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/12662435_1504177056556330_2681653421552163030_n.png?oh=4722d3cda2f8bb8d850f353e1e85cfd7&oe=596BEF09" style="height:60px;width:50px;"></img>
				  </a>
				</div>
			</div>
			<div class="row main">
				<div class="main-login main-center">
				<center><h3>LOG IN</h3></center>
					<form class="" method="post" action="#">				
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Select Category</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
										<select name="category" class="form-control">
											<option value="admin">Admin</option>
											<option value="doctor">Doctor</option>
											<option value="receptionist">Receptionist</option>
											<option value="patient">Patient</option>
										</select>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a href="/layout" type="button" id="button" class="btn btn-lg btn-block login-button">LOGIN</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>