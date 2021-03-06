<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/display5.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9d1c6456d4.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>COLLEG</strong><span class="text-danger"><strong>EXP</strong></span></a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class=" fas fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav">
          <a href="#" class="nav-item nav-link active">Home</a>
          <a href="projects.php" class="nav-item nav-link">Projects</a>
          <a href="userdashboard.php" class="nav-item nav-link">Dashboard</a>
        </div>
      </div>
      <?php
      if (!isset($_SESSION['name'])) {
        echo '<div class="navbar-nav ms-auto"><a href="userlogin.php" style="text-decoration: none;">Login</a></div>';
      } else {
        echo '<div class="navbar-nav ms-auto px-3"> Hi '.$_SESSION['name'][0].'</div>';
        echo '<div class="navbar-nav ms-auto"><a href="logout.php" style="text-decoration: none;">Logout</a></div>';
      }
      ?>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><strong>COLLEG</strong><span class="text-danger"><strong>EXP</strong></span></a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class=" fas fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav">
          <a href="#" class="nav-item nav-link">Home</a>
          <a href="projects.php" class="nav-item nav-link">Projects</a>
          <a href="userdashboard.php" class="nav-item nav-link active">Dashboard</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container-fluid px-5 py-5" style="background-image: url('../assets/img/college_unsplash.jpg'); background-repeat: no-repeat;">
    <div class="mx-auto my-auto py-5 px-5 text-white text-center align-items-center text-wrap">
      <h2 class="my-5 py-3">Trying To Get More Out Of College Life?</h2>
      <a href="#"><button class="btn btn-lg btn-outline-light">Begin Here</button></a>
    </div>
  </div>
  <div class="text-center text-dark py-4 mx-auto">
    <h2>How Does <strong>COLLEG<span class="text-danger">EXP</span></strong> Work?</h2>
  </div>
  <div class="text-dark py-4 px-5 my-5 mx-auto">
    <h3 class="display-4">It's Simple Really.</h3>
  </div>
  <div class="container-fluid">
    <div class="d-flex row justify-content-around px-5">
      <div class="d-flex col col-md-12 col-sm-12 text-center mx-3 py-3 align-items-center justify-content-center font-weight-light text-justify">
        <h3 class="display-5">Freshers apply for projects of all interests, posted by Final Year students or young entrepreneurs.</h3>
      </div>
      <div class="d-flex col-md-12 col-sm-12 text-center mx-3 py-3 align-items-center justify-content-center">
        <span class="fas fa-arrow-down fa-3x"></span>
      </div>
      <div class="d-flex col-md-12 col-sm-12 text-center mx-3 py-3 align-items-center justify-content-center font-weight-light text-justify">
        <h3 class="display-5">Entrepreneurs can accept applications from their dashboard and initiate communication.</h3>
      </div>
      <div class="d-flex col-md-12 col-sm-12 text-center mx-3 py-3 align-items-center justify-content-center">
        <span class="fas fa-arrow-down fa-3x"></span>
      </div>
      <div class="d-flex col-md-12 col-sm-12 text-center mx-3 py-3 align-items-center justify-content-center font-weight-light text-justify">
        <h3 class="display-5">Freshers gain experience while entrepreneurs achieve their dreams!</h3>
      </div>
    </div>
  </div>
  <footer class="bg-dark mt-5 py-5 px-2 container-fluid text-center text-light font-weight-light">
    <i class="fas fa-copyright"></i> 2022. All Rights Reserved.
  </footer>
</body>

</html>