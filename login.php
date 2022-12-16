<?php

    $page=[
        "title" => "Track Calorie - Login"
    ];


    include_once('includes/header.php');
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
                <form>
                    <div class="mt-5">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="mt-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mt-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox">Check me out</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Submit</button>

                </form>
                <a href="register.php">Register</a>
            </div>
        </div>
    </div>
</main>



<?php include_once('includes/footer.php'); ?>