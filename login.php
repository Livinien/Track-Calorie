<?php

    $page=[
        "title" => "Track Calorie - Login"
    ];


    include_once('includes/header.php');


    
    @include 'config.php';

    
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