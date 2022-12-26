<?php

    $page=[
        "title" => "Track Calorie - Register"
    ];


    include_once('includes/header.php');



    @include 'config.php';

    if(!empty($_SESSION["id"])) {
        header("Location: index.php");
    }
    
    if(isset($_POST['submit'])) {
        
        $firstname = $_POST['firstname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $size = $_POST['size'];
        $weight = $_POST['weight'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $duplicate = mysqli_query($conn, "SELECT * FROM user_id WHERE firstname = '$firstname' OR email = '$email'");

        if(mysqli_num_rows($duplicate) > 0) {
            echo "<script> alert('Fistname or Email has already taken'); </script>";

        } else {
            if($password == $confirm_password) {
                $query = "INSERT INTO user_id VALUES('', '$firstname', '$age', '$gender', '$size', '$weight', '$email', '$password')";
                header("Location: index.php");
                mysqli_query($conn, $query);
                
                echo "<script> alert('Registration Successful'); </script>";

            } else {
                echo "<script> alert('Password does not match'); </script>";
            }
        }
    };

?>

<header>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <h1>Register Page</h1>

            <?php 
            if(isset($error)) {
                foreach($error as $error) {
                    echo '<span class="error-msg>'.$error.'</span>';
                };
            };
            ?>
        </div>
    </div>
</header>


<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="POST">

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