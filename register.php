<?php

    $page=[
        "title" => "Track Calorie - Register"
    ];


    include_once('includes/header.php');



    @include 'config.php';

    

    if(isset($_POST['submit'])) {

    require 'config.php';


    $firstname = $_POST["firstname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $size = $_POST["size"];
    $weight = $_POST["weight"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    

    if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $firstname)) {
        
        header("location: register.php?error=invalidfirstname&email");
        exit();

    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        header("location: login.php?error=invalidemail");
        exit();

    } else if(!preg_match("/^[a-zA-Z0-9]*$/", $firstname)) {
        header("location: register.php?error=invalidfirstname");
        exit();

    } else if(!preg_match("/[0-9]/", $size)) {
        header("location: register.php?error=invalidsize");
        exit();
        
    } else if(!preg_match("/[0-9]/", $weight)) {
        header("location: register.php?error=invalidweight");
        exit();
        
    } else if($password!=$confirm_password) {
        header("location: register.php?error=passworddontmatch");
        exit();
        
    } else {
        $sql = "SELECT firstname FROM track_calorie WHERE firstname='".$firstname."';";
        $res = mysqli_query($conn, $sql);

        if(!$res) {
            header("location: register.php?error=sqlerror");
            exit();
        
        } else {
            $resultCheck = mysqli_num_rows($res);
            
            if($resultCheck > 0) {
                header("location: register.php?error=FIRSTNAMETAKEN");
                exit();
                
            } else {
                $hashPassword = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO track_calorie(firstname, age, gender, size, weight, email, password) VALUES ('".$firstname."','".$age."','".$gender."','".$size."','".$weight."','".$email."','".$hashPassword."');";
                
                $res = mysqli_query($conn, $sql);

                if(!$res) {
                    header("location: register.php?=sqlerror");
                    exit();

                } else {
                    header("location: login.php?register=SUCCESS");
                    exit();
                }
                
            }
        }
    }

    mysql_close($conn);

   } 

?>

<header>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <h1>Register Page</h1>
        </div>
    </div>
</header>


<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="register.php" method="POST">

                    <div class="mt-5">
                        <label for="firstname" class="form-label">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname">
                    </div>

                    <div class="mt-4">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" name="age" class="form-control" id="age">
                    </div>

                    <select class="form-select mt-5" name="gender" aria-label=" Default select example">
                        <option value="man">Homme</option>
                        <option value="woman">Femme</option>
                        <option value="unisex">Unisexe</option>
                    </select>

                    <div class="mt-4">
                        <label for="size" class="form-label">Size</label>
                        <input type="number" name="size" class="form-control" id="size">
                    </div>

                    <div class="mt-4">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" name="weight" class="form-control" id="weight">
                    </div>

                    <div class="mt-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="mt-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mt-4">
                        <label for="password" class="form-label">Confirm your Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>

                </form>
                <br>
                <p>Already have account ? <a href="login.php">Login</a></p>
            </div>
        </div>
    </div>
</main>

<footer>

</footer>

</header>




<?php include_once('includes/footer.php'); ?>