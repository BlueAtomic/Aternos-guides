<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php require_once('src/models/functions.php'); echo getPageName(basename($_SERVER['PHP_SELF'])) ?></title>
        <script src="https://kit.fontawesome.com/d1393c407a.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="src/styling/auth.css">
    </head>

    <?php include_once 'src/models/navbar.php' ?>

    <body>
        <form action="/src/validation/loginValidation.php" method="post">
            <div class=" top row align-items-start">
                <div class="col">
                </div>
                <div class="col">
                    <div class="row align-items-start">
                        <div class="col">
                            <div>
                            <img class="float-end img" src="src/img/Aternos_logo.svg" alt="Aternos Logo" >
                            </div>
                            <div class="top">
                            <img class="float-end img" src="src/img/Atomic.png" alt="Blue Atomic">
                            </div>
                        </div>
                        <div class="col">
                            <div class="e-mail ">
                                <label for="user"><b>E-mail address</b></label>
                                <input class="form-control" type="email" placeholder="example@gmail.com" name="mail" id="user" required>
                            </div>
                            <div class="password top">
                                <label for="psw"><b>Password</b></label>
                                <input class="form-control" type="password" placeholder="Enter Password" name="psw" id="psw" required>
                            </div>
                            <div class="top  ">
                                <button class="btn btn-primary" type="submit" name="login">Login</button>
                                <button class="btn btn-primary" type="button" class="cancelbtn" onclick="history.back()">Cancel</button>
                            </div>
                            <div class="top">
                                <span class="psw top"><a href="register.php">Don't have an account?</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
                <?php
                session_start();

                if (isset($_SESSION['exCode'])) {
                    if ($_SESSION['exCode'] == 404) {
                        echo "<p style='color: red;'>Unknown mail address.</p>";
                    } elseif ($_SESSION['exCode'] == 403) {
                        echo "<p style='color: red'>Wrong password</p>" ;
                    }
                }
                session_destroy();
                ?>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>