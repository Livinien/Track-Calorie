<?php 

    $page=[
        "title" => "Track Calorie - Profile"
    ];


    include_once('includes/header.php');

    @include 'config.php';


    // DELETE ACCOUNT USER //
    
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

    

    // UPDATE INFORMATIONS USER //

    if(isset($_POST["save_account"])) {

        require 'config.php';
        
        $id = $_SESSION["userId"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $size = $_POST["size"];
        $weight = $_POST["weight"];
        $email = $_POST["email"];
        $hashPassword = $_POST["password"];
        

        if(empty($firstname) && empty($lastname)) {
            
            header("location: profile.php?error=emptyfields");
            exit();

        } else if(!preg_match("/^[a-zA-Z0-9]*$/", $firstname)) {
            header("location: profile.php?error=invalidfirstname");
            exit();
        
        } else {
            
            if(empty($firstname)) {
                $sql = "SELECT lastname FROM track_calorie WHERE lastname='".$lastname."';";
                $res = mysqli_query($conn, $sql);

                if(!$res) {
                    header("location: profile.php?error=sqlerror");
                    exit();
                    
                } else {
                    $resultCheck = mysqli_num_rows($res);
                    
                    if($resultCheck > 0) {
                        header("location: profile.php?error=LASTNAMETAKEN");
                        exit();
                        
                    } else {
                        $sql = "UPDATE track_calorie SET lastname='".$lastname."' WHERE id=".$id;
                        $res = mysqli_query($conn, $sql);

                        if(!$res) {
                            header("location: profile.php?error=sqlerror");
                            exit();

                        } else {
                            header("location: profile.php?error=SUCCESS");
                            exit();
                        }
                    }
                    
                }
                
            } 
            
            
            else if(empty($age)) {
                
                $sql = "UPDATE track_calorie SET firstname='".$firstname."' WHERE id=".$id;
                $res = mysqli_query($conn, $sql);

                if(!$res) {
                    header("location: profile.php?error=sqlerror");
                    exit();
                    
                } else {
                    header("location: profile.php?error=SUCCESS");
                    exit();
                }
                
                
            } else if(empty($size)) {
                
                $sql = "UPDATE track_calorie SET firstname='".$firstname."' WHERE id=".$id;
                $res = mysqli_query($conn, $sql);

                if(!$res) {
                    header("location: profile.php?error=sqlerror");
                    exit();
                    
                } else {
                    header("location: profile.php?error=SUCCESS");
                    exit();
                }
                
                
            } else if(empty($weight)) {
                
                $sql = "UPDATE track_calorie SET firstname='".$firstname."' WHERE id=".$id;
                $res = mysqli_query($conn, $sql);

                if(!$res) {
                    header("location: profile.php?error=sqlerror");
                    exit();
                    
                } else {
                    header("location: profile.php?error=SUCCESS");
                    exit();
                }
                
                
            } else if(empty($email)) {
                
                $sql = "UPDATE track_calorie SET firstname='".$firstname."' WHERE id=".$id;
                $res = mysqli_query($conn, $sql);

                if(!$res) {
                    header("location: profile.php?error=sqlerror");
                    exit();
                    
                } else {
                    header("location: profile.php?error=SUCCESS");
                    exit();
                }
                
                
            } else if(empty($hashPassword)) {
                
                $sql = "UPDATE track_calorie SET firstname='".$firstname."' WHERE id=".$id;
                $res = mysqli_query($conn, $sql);

                if(!$res) {
                    header("location: profile.php?error=sqlerror");
                    exit();
                    
                } else {
                    header("location: profile.php?error=SUCCESS");
                    exit();
                }
            } 
            
            
            else {
                $hashPassword = password_hash($password, PASSWORD_DEFAULT);
                $sql = "UPDATE track_calorie SET firstname='".$firstname."', lastname='".$lastname."', age='".$age."', size='".$size."', weight='".$weight."', email='".$email."', password='".$hashPassword."' WHERE id=".$id;
                $res = mysqli_query($conn, $sql);

                if(!$res) {
                    header("location: profile.php?error=sqlerror");
                    exit();

                } else {
                    header("location: profile.php?error=SUCCESS");
                    exit();
                }
                
            }
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

                        <img src="./pictures/admin.jpg" class="rounded mx-auto d-block text-center" name="image"
                            alt="picture profile">

                        <div class="mt-5">
                            <label for="firstname" class="form-label">Firstname</label>
                            <input type="text" name="firstname" class="form-control"
                                value="<?php echo $id['firstname'] ?>">
                        </div>

                        <div class="mt-5">
                            <label for="lastname" class="form-label">Lastname</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>

                        <div class="mt-5">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" name="age" class="form-control">
                        </div>

                        <div class="mt-5">
                            <label for="size" class="form-label">Size</label>
                            <input type="text" name="size" class="form-control">
                        </div>

                        <div class="mt-5">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="text" name="weight" class="form-control">
                        </div>

                        <div class="mt-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>

                        <div class="mt-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success mt-4 mb-5" name="save_account">Save</button>



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
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Delete Account</h1>
                                    </div>

                                    <div class="modal-body">
                                        <h4>Are you sure you want to delete your account ?</h4>
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