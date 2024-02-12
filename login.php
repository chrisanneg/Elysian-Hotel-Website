<?php
$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `info` WHERE username=?";
    $stmtselect = $conn->prepare($sql);

    if ($stmtselect) {
        $stmtselect->bind_param("s", $username);
        $stmtselect->execute();
        $result = $stmtselect->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("Location: welcome.php");
                exit;
            } else {
                $showError = "Incorrect password.";
            }
        } else {
            $showError = "User not found.";
        }
    } else {
        $showError = 'Statement preparation failed: ' . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
		
		
		<link rel="stylesheet" type="text/css" href="login1.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Wendy+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
		
		<style>
			
		label {
			font-weight: bold;
			color:white;
			display: block;
			margin-bottom: 10px;
			font-family:Cascadia Mono;
			
		}
		</style>
	</head>
	<body>
		
	<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

		<section class="con">
			<div class="overlay">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-md-8 p-3 mt-5">
							<h2 class="text-center display-3">Login for the Journey of your lives</h2>
						</div>
					</div>
					<div class="row h-50 justify-content-center">
						<div class="col-md-8 main-con p-3 justify-content-center">

							<form class="form-horizontal" method ="POST" formaction="">
								<div class="form-group row justify-content-center">
								<div class="col-md-10 mb-5">
									<div class="wrapper">

									<label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
										 <span class="underline"></span>
										</div>

								</div>
								</div>
								<div class="form-group row">
								<div class="col-md-10 offset-md-1 mb-5">
									<div class="wrapper">
									<label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
										<span class="underline"></span>

									</div>

								</div>
								</div>

								<div class="form-group row justify-content-center">
									<div class="col-md-6">
										<button type ="submit" class="btn btn-primary btn-block" >Login</button>

										<br>
										<p> <font color=white><font size=3px;>No Username and Password? Register Here For Free!</p>										
										<button type="submit" formaction="register.php" class="btn btn-primary btn-block">Register Now</button>
										
									</br>

									</div>

								</div>

							</form>


							
						</div>
					</div>
				</div>
		</section>
		

	

</body>
</html>