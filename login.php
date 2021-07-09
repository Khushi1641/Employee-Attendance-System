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
<div class="container-fluid" style="background-color: #c5d6ca;">
<div class ="container">
	<div CLASS="row justify-content-center" style="background-image: url('bg.jpg'); width:100%; background-size: 100%;background-position: center; height:100%; background-repeat: no-repeat;">
		<div class="col-12 col-sm-9 col-md-5 h-100" >
			<div class="container my-auto align-self-center"  style="font-family:sans seris;">
			<!-- <b><h1 class="animate__animated animate__fadeInDown" style="font-family: mv boli;">Employee Attendance System</h1></b> -->
			<form action="checklogin.php" method="POST" style="padding: 30px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000;background: rgba(0,0,0,0.8); margin-top: 270px;" >
				<?php
				if (isset($_GET['signup_success'])) { ?>
     			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Registration</strong> successful!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
     			<?php } ?>
				<?php
				if (isset($_GET['error'])) { ?>
     			<p class="error" style="color: #A94442; background: #F2DEDE; padding: 10px; width: 95%; border-radius: 5px; margin: 6px auto;"><?php echo $_GET['error']; ?></p>
     			<?php } ?>
     			<?php if (isset($_GET['success'])) { ?>
            	<p class="success" style="background: #D4EDDA; color: #40754C; padding: 10px; width: 95%; border-radius: 5px; margin: 20px auto;"><?php echo $_GET['success']; ?></p>
        		<?php } ?>
				<div class="form-group text-white">
					<center><h3 style="font-family: mv boli;" class=" animate__animated animate__fadeInDown text-white">LOGIN</h3></center>
			    	<label for="email">Email address:</label>
			    	<input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
				</div>
				<div class="form-group text-white">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
				</div>
				<div class="form-group text-white">
				    <label for="Usertype">User Type:</label>
				    <select name="usertype" class="form-control">
                        <option value="Employee" class="form-control">Employee</option>
                        <option value="Manager" class="form-control">Manager</option>
                        <option value="Admin" class="form-control">Admin</option>
                        <option value="HR" class="form-control">HR</option>
                    </select>
				</div>
				<div class="row">
				<div class="form-group">
					<a href="forgetpassword.php">Forgot password?</a>	
				</div>
				<!-- <div class="form-group text-white">
					Not Yet Registered?
					<a href="signup.php" style="font-size: 23px;">Signup Here..</a>	
				</div> -->
				</div>
				<!-- <div class="form-group form-check">
				    <label class="form-check-label">
				    <input class="form-check-input" type="checkbox"> Remember me
				    </label>
				</div> -->
				<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
			</form>
		</div>
		</div>
	</div>
</div>
</div>
</body>
</html>
