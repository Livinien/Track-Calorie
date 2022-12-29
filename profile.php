<?php 

    $page=[
        "title" => "Track Calorie - Profile"
    ];


    include_once('includes/header.php');

    @include 'config.php';


    session_start();

    if(isset($_POST["delete_account"])) {
        
        require 'config.php';
        
        $id =  $_SESSION["userId"];
        $sql = "DELETE FROM track_calorie WHERE id=".$id.";";
        $res = mysqli_query($conn, $sql);

        if(!$res) {
            header("location: profile.php?error=sqlerror");
            exit();

        } else {
            header("location: delete.php");
            exit();
        }
        
        mysqli_close($conn);
        
    } 
    
?>




<div class="containerApp">
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h1>Profile</h1>
                </div>

                <div class="d-flex col-auto link">
                    <div class="profile px-5 fw-bold">
                        <h3><a href="index.php">Home</a></h3>
                    </div>

                    <div class="logout">

                        <?php 
                    
                            if(isset($_SESSION["userId"])) {

                                echo '<form action="logout.php" method="POST">
                                        <button type="submit" name="submit" class="btn btn-warning fw-bold">Logout</button>
                                    </form>';
                                
                            }
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="profile.php" method="POST">

                        <img src="./pictures/admin.jpg" class="rounded mx-auto d-block text-center"
                            alt="picture profile">

                        <div class="mt-5">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>

                        <div class="mt-5">
                            <label for="email" class="form-label">Lastname</label>
                            <input type="email" name="lastname" class="form-control">
                        </div>

                        <div class="mt-5">
                            <label for="email" class="form-label">Size</label>
                            <input type="email" name="size" class="form-control">
                        </div>

                        <div class="mt-5">
                            <label for="email" class="form-label">Weight</label>
                            <input type="email" name="weight" class="form-control">
                        </div>

                        <div class="mt-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>

                        <div class="mt-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <button type="button" class="btn btn-success mt-4 mb-5" name="save_account">Save</button>



                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger mt-4 mb-5 ms-4" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Delete Account
                        </button>

                        <!-- Modal -->
                        <div class="modal fade mt-5 text-center" id="exampleModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h4>Would you like to delete your account ?</h4>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success"
                                            name="delete_account">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>



    <?php include_once('includes/footer.php'); ?>