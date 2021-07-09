<!DOCTYPE html>
<head>
<title>Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<div class ="container-fluid">
	<div CLASS="row " style="background: url('1.jpg'); width:100%; background-size: 100%; height:100vh; padding-left: 1000px;">
		<div class="col-12 col-sm-10 text-white">
			<form action="registration.php" method="POST" style="background: rgba(0,0,0,0.8); padding: 30px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000; margin-top: 80px;">
				<div class="form-group">
					<center><h3 style="font-family: mv boli;" class=" animate__animated animate__fadeInDown text-white">SIGN UP</h3></center>
			    	<label for="name">Name:</label>
			    	<input type="text" class="form-control" placeholder="Enter name" id="name" name="name" required>
				</div>
				<div class="form-group">
			    	<label for="username">Username:</label>
			    	<input type="text" class="form-control" placeholder="Enter username" id="uname" name="uname" required>
				</div>
				<div class="form-group">
			    	<label for="email">Email address:</label>
			    	<input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
				</div>
				<div class="form-group">
			    	<label for="mno">Mobile no.:</label>
			    	<input type="text" class="form-control" placeholder="Enter mobile no." id="mno" name="mno" required>
				</div>
				<div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
			</form>
		
		</div>
	</div>
</div>
</body>
</html>