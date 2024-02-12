<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<style>
		body {
			background-image: url("hotel.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			font-family: Arial, sans-serif;
			color: #fff;
			margin: 0;
			padding: 0;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 100px auto;
			max-width: 600px;
			padding: 20px;
			background-color: rgba(0,0,0,0.5);
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
			border-radius: 5px;
		}

		h1 {
			text-align: center;
			margin-bottom: 30px;
		}

		input[type=text], input[type=email], input[type=password] {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			margin-bottom: 20px;
			background-color: rgba(255,255,255,0.8);
			color: #000;
		}

		label {
			font-weight: bold;
			display: block;
			margin-bottom: 10px;
		}

		button[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			margin-top: 20px;
		}

		button[type=submit]:hover {
			background-color: #45a049;
		}

		.error {
			color: red;
			font-size: 0.8em;
			margin-bottom: 10px;
		}


		
	</style>

<div>
	<form action="register.php" method="post">
		<div class="container">
			
			<div class="row">
			
					<h1>Registration</h1>
				
					<br>
					<label for="fname"><b>First Name</b></label>
					<input class="form-control" id="fname" type="text" name="fname" required>

					<label for="lname"><b>Last Name</b></label>
					<input class="form-control" id="lname" type="text" name="lname" required>

					<br>
					<label for="username"><b>Userame</b></label>
					<input class="form-control" id="username" type="text" name="username" required>


					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phone"><b>Phone Number</b></label>
					<input class="form-control" id="phone"  type="text" name="phone" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					
					<button type="submit" id="register" name="submit" value="Sign Up">Sign Up</button>
				
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
$(function(){
  $('#register').click(function(e){

    var valid = this.form.checkValidity();

    if(valid){
	  var username = $('#username').val();
      var fname  = $('#fname').val();
      var lname  = $('#lname').val();
      var email    = $('#email').val();
      var phone = $('#phone').val();
      var password  = $('#password').val();

	  e.preventDefault();	
	  
      // Check if phone number is valid
      var phonePattern = /^[0-9]{10}$/;
      if(!phonePattern.test(phone)) {
        e.preventDefault();
        alert("Please enter a valid phone number.");
        return false;
      }

      // Check if email is valid
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if(!emailPattern.test(email)) {
        e.preventDefault();
        alert("Please enter a valid email address.");
        return false;
      }

      // Check if password is at least 8 characters long
      if(password.length < 8) {
        e.preventDefault();
        alert("Please enter a password that is at least 8 characters long.");
        return false;
      }

      // If all fields are valid, submit the form
      $.ajax({
        type: 'POST',
        url: 'process.php',
        data: {username:username, fname: fname,lname: lname,email: email,phone: phone,password: password},
        success: function(data){
          Swal.fire({
            'title': 'Successful',
            'text': data,
            'type': 'success'
          }).then(function() {
            window.location.href = "login.php";
        });
    },
        error: function(data){
          Swal.fire({
            'title': 'Errors',
            'text': 'There were errors while saving the data.',
            'type': 'error'
          })
        }
      });

    }else{
      alert("Please fill in all required fields.");
      return false;
    }
  });
});
</script>
</body>
</html>