<?php

    $page=[
        "title" => "Track Calorie - Register"
    ];


    include_once('includes/header.php');
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
                <form>

                    <div class="mt-3">
                        <label for="firstname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="firstname">
                    </div>

                    <div class="mt-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" id="age">
                    </div>

                    <select class="form-select mt-5" aria-label="Default select example">
                        <option selected>Quel genre êtes-vous ?</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                        <option value="3">Unisexe</option>
                    </select>

                    <div class="mt-5">
                        <label for="size" class="form-label">Size</label>
                        <input type="range" class="form-range" id="size">
                    </div>

                    <div class="mt-4">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" class="form-number" id="weight">
                    </div>

                    <div class="mt-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <div class="mt-4">
                        <label for="password" class="form-label">Confirm your Password</label>
                        <input type="password" class="form-control" id="confirm-password">
                    </div>

                    <!-- <div class="mt-4 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox">Check me out</label>
                    </div> -->

                    <button type="submit" class="btn btn-primary mt-4">Submit</button>

                </form>
                <br>
                <a href="login.php">Login</a>
            </div>
        </div>
    </div>
</main>

<footer>

</footer>

</header>




<?php include_once('includes/footer.php'); ?>