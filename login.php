<?php

    $page=[
        "title" => "Track Calorie - Login"
    ];


    include_once('includes/header.php');


    
    @include 'config.php';

    if(isset($_POST['submit'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = mysqli_query($conn, "SELECT * FROM user_id WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0) {
            if($password == $row["password"]) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("Location: index.php");
            }

            else {
                echo "<script> alert('Wrong Password'); </script>";
            } 
        }
        
        else {
            echo "<script> alert('User not registred'); </script>";
        }
    };
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <h1>Login Page</h1>
        </div>
    </div>
</header>


<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="POST">
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