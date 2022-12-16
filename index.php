<?php

// Connexion à la BDD 

// Un user s'est connecté

// On stock les informations du user dans une variable

$user= [
    "id"=>1,
    "name"=>" Flavien",
    "age"=>29,
    "sexe"=>"homme",
    "weight"=>70,
    "size"=>173,
    "IMC"=>23.4,
    "email"=>"blabla@gmail.com",
    "isLogged"=>true

];

if(!$user["isLogged"]){
    header("location:login.php");
    exit;
}

$page=[
    "title" => "Track Calorie - Accueil"
];

include_once('includes/header.php');

?>

<div class="containerApp">
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <h1>Track Calories</h1>
                </div>

                <div class="col-auto">
                    <div class="profile"><i class="bi bi-person"></i><?php echo $user['name']; ?></div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="dataUser">
            <div class="doughnut">
                <canvas id="myChart"></canvas>
                <div class="kcal">1700 Kcal</div>
            </div>

            <div class="container">
                <div class="row text-center">
                    <div class="col">IMC</div>
                    <div class="col"><?php echo $user['weight'];?>Kg</div>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1671199301">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                        class="shape-fill"></path>
                </svg>
            </div>
</div>
</section>

<section class="date">
    <div class="text-center py-3"><?php $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
            echo $formatter->format(time()); ?></div>
</section>


<section class="list">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="food">
                    <div class="titleFood">
                        <h3>Big Mac</h3>
                    </div>
                    <div class="kgFood">
                        <p>504 kcal</p>
                    </div>
                </div>

                <div class="food">
                    <div class="titleFood">
                        <h3>Hamburger</h3>
                    </div>
                    <div class="kgFood">
                        <p>400 kcal</p>
                    </div>
                </div>

                <div class="food">
                    <div class="titleFood">
                        <h3>Sunday au Chocolat</h3>
                    </div>
                    <div class="kgFood">
                        <p>250 kcal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</main>

<footer class="py-5">
    <div class="text-center">
        <button type="button" class="btn btn-primary">+</button>
    </div>
</footer>
</div>

<?php include_once('includes/footer.php'); ?>