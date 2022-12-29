<?php

    $page=[
        "title" => "Track Calorie - Login"
    ];


    include_once('includes/header.php');


    
    @include 'config.php';


    if(isset($_POST["submit"])) {
        
        require 'config.php';

        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM track_calorie WHERE email='".$email."';";
        $res = mysqli_query($conn, $sql);

        if(!$res) {
            header("location: login.php?error=sqlerror");
            exit();

        } else {
            if($row = mysqli_fetch_assoc($res)) {
                $password = password_verify($password, $row["password"]);

                if($password==false) {
                    header("location: login.php?error=wrongpassword");
                    exit();
                    
                } else if($password==true) {
                    session_start();
                    $_SESSION["userId"]=$row["id"];
                    $_SESSION["firstname"]=$row["firstname"];

                    header("location: index.php?login=SUCCESS");
                    exit();
                } 
                
            } else {
                header("location: login.php?error=doesntwork");
                exit();
            }
        }

        mysqli_close($conn);
    }

    
    
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <h1>Login</h1>
        </div>
    </div>
</header>


<div class="mt-4 text-light bg-danger text-center d-grid gap-2 col-6 mx-auto rounded-1 fw-bold">

    <?php 
            
        if(isset($_GET['error'])) {
            if($_GET['error']=="doesntwork") {
                echo '<p class="msg-error mt-3">Your email address does not exist</p>';
                
            } else if($_GET['error']=="wrongpassword") {
                echo '<p class="msg-error mt-3">Your password is invalid</p>';
                
            }
        }        
    ?>

</div>


<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="login.php" method="POST">
                    <div class="mt-5">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="mt-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mt-4 mb-4">Submit</button>

                </form>
                <p>Don't have an account ? <a href="register.php">Register</a></p>
            </div>
        </div>
    </div>
</main>



<?php include_once('includes/footer.php'); ?>