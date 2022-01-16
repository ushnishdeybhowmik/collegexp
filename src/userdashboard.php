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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/progress.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9d1c6456d4.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../js/userdashboard.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><strong>COLLEG</strong><span class="text-danger"><strong>EXP</strong></span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class=" fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="projects.php" class="nav-item nav-link">Projects</a>
                    <a href="#" class="nav-item nav-link active">Dashboard</a>
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
            <a class="navbar-brand" href="index.php"><strong>COLLEG</strong><span class="text-danger"><strong>EXP</strong></span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class=" fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="projects.php" class="nav-item nav-link">Projects</a>
                    <a href="#" class="nav-item nav-link active">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="jumbotron round-0 text-center px-5 py-5 text-white bg-dark" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/img/aesthetic_unsplash.jpg');">
        <h2 class="my-4">Hi <?php if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'][0];
                            } ?>!</h2>
        <h4 class="my-4 font-weight-light">Lets Get You Started</h4>
        <div class="d-flex py-3 justify-content-around text-white my-3">
            <a href="projects.php"><button class="btn btn-lg btn-outline-light text-wrap ms-auto me-3 py-2 px-2">What's New?</button></a>
            <a href="projectForm.php"><button class="btn btn-lg btn-outline-light text-wrap ms-3 me-auto py-2 px-2">Create Project</button></a>
        </div>
    </div>
    <div class="container-fluid mx-2 my-3 px-2 px-3 shadow">
        <div class="row d-flex justify-content-around py-3 px-3 bg-light align-items-center">
            <div class="col-sm-4 col-md-4 col-lg-4 text-dark px-1 py-1 text-center">
                <span class="font-weight-bold">Total Projects Completed: </span><span class="font-weight-bold text-danger">2</span>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 text-dark px-1 py-1 text-center">
                <span class="font-weight-bold">XPs earned: </span><span id="xpval" class="font-weight-bold text-danger">505</span>
                <div class="progress mx-2 my-2" style="height: 8px;">
                    <div id="xp_progress_bar" class="progress-bar"></div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 text-dark px-1 py-1 text-center">
                <span class="font-weight-bold">Rank: </span><span id="rank" class="font-weight-bold text-danger">Newbie</span>
            </div>
        </div>
    </div>
    <div class="d-flex font-weight-bold text-start align-items-center">
        <h5 class="mx-3">Your Ongoing Projects</h5><span class="fas fa-angle-right fa-2x"></span>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around d-flex">
            <div class="col-sm-2 col-md-2 col-lg-2 shadow text-dark mx-3 my-3 px-3 py-3 text-center text-wrap w-25 ">
                <h6>New NFT Future Contracts</h6>
                <p class="text-center font-weight-light">Developing New ERC1155 Contracts for better clarity on the
                    Users.</p>
                <div class="progress" style="height: 10px">
                    <div class="progress-bar progressanim"></div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 shadow text-dark mx-3 my-3 px-3 py-3 text-center text-wrap w-25 ">
                <h6>New NFT Future Contracts</h6>
                <p class="text-center font-weight-light">Developing New ERC1155 Contracts for better clarity on the
                    Users.</p>
                <div class="progress" style="height: 10px">
                    <div class="progress-bar progressanim"></div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 shadow text-dark mx-3 my-3 px-3 py-3 text-center text-wrap w-25">
                <h6>New NFT Future Contracts</h6>
                <p class="text-center font-weight-light">Developing New ERC1155 Contracts for better clarity on the
                    Users.</p>
                <div class="progress" style="height: 10px">
                    <div class="progress-bar progressanim"></div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 shadow text-dark mx-3 my-3 px-3 py-3 text-center text-wrap w-25">
                <h6>New NFT Future Contracts</h6>
                <p class="text-center font-weight-light projectCards">Developing New ERC1155 Contracts for better
                    clarity on the
                    Users.</p>
                <div class="progress" style="height: 10px">
                    <div class="progress-bar progressanim"></div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 shadow text-dark mx-3 my-3 px-3 py-3 text-center text-wrap w-25 ">
                <h6>New NFT Future Contracts</h6>
                <p class="text-center font-weight-light">Developing New ERC1155 Contracts for better clarity on the
                    Users.</p>
                <div class="progress" style="height: 10px">
                    <div class="progress-bar progressanim"></div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 shadow text-dark mx-3 my-3 px-3 py-3 text-center text-wrap w-25 ">
                <h6>New NFT Future Contracts</h6>
                <p class="text-center font-weight-light">Developing New ERC1155 Contracts for better clarity on the
                    Users.</p>
                <div class="progress" style="height: 10px">
                    <div class="progress-bar progressanim"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex font-weight-bold text-start align-items-center">
        <h5 class="mx-3">Your Completed Projects</h5><span class="fas fa-angle-right fa-2x"></span>
    </div>
    <div class="container-fluid">
        <div class="row d-flex mb-2">
            <div class=" row d-flex justify-content-between align-items-center col-12 mx-2 my-2 py-3 px-3 text-dark shadow-lg">
                <div class="mx-0 my-0 col-4 text-start">
                    <h6 class="font-weight-bold">E-Commerce Website for Pet Dogs and Cats</h6>
                    <p class="font-weight-light text-truncate">A state of the art website providing one stop solution to
                        all your pet's needs.</p>
                </div>
                <div class="col-4 ms-auto me-4 my-0 text-center">
                    <span class="text-white badge bg-success py-2 px-4">+12 XP</span>
                </div>
            </div>
        </div>
        <div class="row d-flex mb-2">
            <div class=" row d-flex justify-content-between align-items-center col-12 mx-2 my-2 py-3 px-3 text-dark shadow-lg">
                <div class="mx-0 my-0 col-4 text-start">
                    <h6 class="font-weight-bold">E-Commerce Website for Pet Dogs and Cats</h6>
                    <p class="font-weight-light text-truncate">A state of the art website providing one stop solution to
                        all your pet's needs.</p>
                </div>
                <div class="col-4 ms-auto me-4 my-0 text-center">
                    <span class="text-white badge bg-success py-2 px-4">+18 XP</span>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark mt-5 py-5 px-2 container-fluid text-center text-light font-weight-light">
        <i class="fas fa-copyright"></i> 2022. All Rights Reserved.
    </footer>
</body>

</html>