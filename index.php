<?php

// Connexion à la BDD 

// Un user s'est connecté

// On stock les informations du user dans une variable

$user= [
    "id"=>1,
    "name"=>"Flavien",
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

  <div class="container">
    <header>
        <div class="title">Track Calories</div>
        <div class="profile"><?php echo $user['name']; ?></div>
    </header>

    <section class="dataUser">
        <div>Graph</div>
        <div>IMC</div>
        <div><?php echo $user['weight']; ?>Kg</div>
    </section>

    <section class="date">
        <div><?php echo date('l d M Y'); ?></div>
    </section>

    <section class="list">
        <div class="food">
            <div class="titleFood">Big Mac</div>
            <div class="kgFood">504 kcal</div>
        </div>
    </section>

    <footer>
        <button>+</button>
    </footer>
  </div>

<?php include_once('includes/footer.php'); ?>