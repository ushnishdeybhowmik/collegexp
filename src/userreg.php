<?php

include '../config/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$student_year = $_POST['student_year'];
	$email = $_POST['email'];
	$password = md5($_POST['pwd']);
	$cpassword = md5($_POST['cnfpwd']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user_base WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO `users` (`name`,`student_year`, `email_id`, `password`)
					VALUES ('$name','$student_year', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/display5.css">
    <link rel="stylesheet" type="text/css" href="../css/gradient.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9d1c6456d4.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body class="gradientbackground">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><strong>COLLEG</strong><span
                    class="text-danger"><strong>EXP</strong></span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class=" fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="projects.php" class="nav-item nav-link">Projects</a>
                    <a href="userdashboard.php" class="nav-item nav-link">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><strong>COLLEG</strong><span
                    class="text-danger"><strong>EXP</strong></span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class=" fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="projects.php" class="nav-item nav-link">Projects</a>
                    <a href="userdashboard.php" class="nav-item nav-link">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid my-5 py-0 px-5 d-flex justify-content-center" style="min-height:60vh;">
        <div class="row container-fluid py-3 px-5 my-0 d-flex justify-content-center bg-light shadow" style="max-width: 600px; border-radius: 20px;">
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex align-items-center justify-content-center">
                <h3 class="display-5 font-weight-bold">Sign Up</h3>
            </div>
            <form class="col-sm-9 col-md-9 col-lg-9 px-3 py-3" action="" method="POST">
                <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                    <label for="student_year" class="form-label">Year in College:</label>
                    <input list="student_year_list" id="student_year" name="student_year" class="form-control" />
            
                    <datalist id="student_year_list">
                        <option value="First Year">
                        <option value="Second Year">
                        <option value="Third Year">
                        <option value="Fourth Year">
                        <option value="Fifth Year">
                        <option value="Passed College!">
                    </datalist>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                    <input type="password" name="pwd" placeholder="New Password" class="form-control">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                    <input type="password" name="cnfpwd" placeholder="Confirm Password" class="form-control">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex my-3 py-0 justify-content-center">
                    <p class="text-muted text-center my-0 smalltext"><i>Already have an account? <a href="userlogin.html" style="text-decoration: none;">Click Here</a></i></p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 my-2 d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-outline-info">Submit</button>
                </div>
            </form>
            
        </div>
    </div>
    <footer class="bg-dark mt-5 py-5 px-2 container-fluid text-center text-light font-weight-light">
        <i class="fas fa-copyright"></i> 2022. All Rights Reserved.
    </footer>
</body>

</html>