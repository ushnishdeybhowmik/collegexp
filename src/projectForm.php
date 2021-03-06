<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('Location: userlogin.php');
}

?>
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
    <script src="../js/projectForm.js"></script>
    <title>Document</title>
</head>

<body class="gradientbackground">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><strong>COLLEG</strong><span
                    class="text-danger"><strong>EXP</strong></span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class=" fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="projects.html" class="nav-item nav-link">Projects</a>
                    <a href="userdashboard.php" class="nav-item nav-link">Dashboard</a>
                </div>
            </div>
            <?php
            if (isset($_SESSION['name'])) {
                echo '<div class="navbar-nav ms-auto px-3"> Hi '.$_SESSION['name'][0].'</div>';
                echo '<div class="navbar-nav ms-auto"><a href="logout.php" style="text-decoration: none;">Logout</a></div>';
            }
            ?>
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
                    <a href="#" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link">Projects</a>
                    <a href="#" class="nav-item nav-link active">Profile</a>
                </div>
            </div>
            <div class="navbar-nav ms-auto">
                Login
            </div>
        </div>
    </nav>
    <div class="row d-flex justify-content-center mx-5 py-0 my-5 shadow" style="border-radius: 20px;">
        <div class="col-md-6 col-sm-6 col-lg-6 px-3 py-3 bg-light" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
            <img class="shadow" src="../assets/img/jpmorgam.jpg" style="height: 65vh; max-width: 100%; width:100%; border-radius:20px;">
        </div>
        <div class="container col-md-6 col-sm-6 col-lg-6 px-3 py-3 bg-light row"style="border-top-right-radius:20px; border-bottom-right-radius: 20px;">
            <div class= "col-md-12 col-sm-12 col-lg-12 text-center text-dark my-1 pt-4 pb-0">
                <h3 class="font-weight-bold">Create.</h3>
            </div>
            <form class=" col-md-12 col-sm-12 col-lg-12 mb-3 mt-0 mx-0 bg-light" style="border-radius: 20px;" action="../php/projectUpload.php">
                <div class="row container-fluid mx-auto my-auto">
                    <div class="col-sm-12 col-md-12 col-lg-12 px-2 py-2 text-muted mt-4 mb-4">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input form-control" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto px-2 py-2 text-muted mb-4">
                        <div>
                            <input type="text" class="form-control" placeholder="Project Name" id="projectName">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mx-auto px-2 py-2 text-muted mb-4">
                        <div>
                            <textarea style="min-height: 110px" type="text" class="form-control"
                                placeholder="Project Description" id="projectDesc"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 mx-auto px-2 py-2 text-dark row mb-4">
                        <div class="col-sm-12 col-md-12 col-lg-12 py-0 mb-3">
                            <input type="text" class="form-control" placeholder="Enter Tags (space between each tag)"
                                id="projectTags">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 py-0">
                            <button type="submit" class="btn form-control btn-success self-align-right">Upload
                                Project</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-dark mt-5 py-5 px-2 container-fluid text-center text-light font-weight-light">
        <i class="fas fa-copyright"></i> 2022. All Rights Reserved.
    </footer>
</body>

</html>