<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('Location: userlogin.php');
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

<body>
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
                    <a href="#" class="nav-item nav-link active">Projects</a>
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
            <a class="navbar-brand" href="index.php"><strong>COLLEG</strong><span
                    class="text-danger"><strong>EXP</strong></span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class=" fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link active">Projects</a>
                    <a href="userdashboard.php" class="nav-item nav-link">Dashboard</a>
                </div>
            </div>
            
        </div>
    </nav>
    <div class="container-fluid gradientbackground my-0">
        <div class="row py-3 px-5 d-flex justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-8 px-3 py-3 row shadow rounded-pill bg-light">
                <div class="col-sm-6 col-md-6 col-lg-6 mx-0 my-0 text-center"><img src="../assets/img/bulb_unsplash.jpg"
                        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)); height: 60vh; max-width:100% !important; width: 100%;""></div>
                    <div class=" col-sm-6 col-md-6 col-lg-6 mx-0 my-0 py-1 px-1 text-dark text-center text-wrap">
                    <h2 class="font-weight-bold mt-3 mb-3 px-3">Decentralised Crptocurrency and NFT Platform</h2>
                    <p class="font-weight-light text-center my-3 px-3">A one of a kind innovative project to create a
                        Dencentralised Land with its own currency and assets that can be bought as NFT</p>
                    <div class="container-fluid d-flex justify-content-center my-3 px-3 py-3">
                        <button class="btn btn-lg btn-outline-black font-weight-light">Apply Now</button>
                    </div>
                    <div class="container-fluid d-flex justify-content-between px-0 my-3">
                        <cite class="font-weight-light text-muted text-start px-3" style="font-size: 12px;">Posted on 17
                            Jan 2022</cite>
                        <cite class="font-weight-light text-muted text-end px-3" style="font-size: 12px;">by
                            Ushnish</cite>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-3 px-5 d-flex justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-8 px-3 py-3 row shadow rounded-pill bg-light">
                <div class="col-sm-6 col-md-6 col-lg-6 mx-0 my-0 text-center"><img
                        src="../assets/img/aesthetic_unsplash.jpg"
                        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)); height: 60vh; max-width:100% !important; width: 100%;""></div>
                    <div class=" col-sm-6 col-md-6 col-lg-6 mx-0 my-0 py-1 px-1 text-dark text-center text-wrap">
                    <h2 class="font-weight-bold mt-3 mb-3 px-3">Decentralised Crptocurrency and NFT Platform</h2>
                    <p class="font-weight-light text-center my-3 px-3">A one of a kind innovative project to create a
                        Dencentralised Land with its own currency and assets that can be bought as NFT</p>
                    <div class="container-fluid d-flex justify-content-center my-3 px-3 py-3">
                        <button class="btn btn-lg btn-outline-black font-weight-light">Apply Now</button>
                    </div>
                    <div class="container-fluid d-flex justify-content-between px-0 my-3">
                        <cite class="font-weight-light text-muted text-start px-3" style="font-size: 12px;">Posted on 17
                            Jan 2022</cite>
                        <cite class="font-weight-light text-muted text-end px-3" style="font-size: 12px;">by
                            Ushnish</cite>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark mt-0 py-5 px-2 container-fluid text-center text-light font-weight-light">
        <i class="fas fa-copyright"></i> 2022. All Rights Reserved.
    </footer>
</body>

</html>