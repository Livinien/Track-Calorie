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

            <div>IMC</div>
            <div><?php echo $user['weight']; ?>Kg</div>
            <div class="custom-shape-divider-bottom-1671192694">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <section class="date">
            <div><?php $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
            echo $formatter->format(time()); ?></div>
        </section>

        <section class="list">
            <div class="food">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quae laudantium corrupti sit, nam quis id mollitia maxime labore tenetur earum fuga eius aut officiis sed voluptatibus non nihil. Praesentium.
                Suscipit temporibus asperiores nam quae. Facilis animi sequi similique aut officiis vero neque magnam maxime ea, iusto ipsam placeat cum soluta eligendi error. Deserunt blanditiis beatae accusamus officiis eius repudiandae!
                Voluptatum illo magni recusandae officia quos quam ad nulla suscipit ipsa rem velit doloremque error culpa sint animi, beatae dolorem et, ex mollitia praesentium dolore, modi excepturi unde laborum! Nihil?
                Non culpa dolores laudantium error nesciunt minima sequi expedita corporis? Sed quia beatae a exercitationem dignissimos quisquam dolorum, nobis, corporis eum ullam iusto fuga, obcaecati deleniti at officiis autem non.
                Veritatis aliquid delectus iure ipsum eveniet modi aliquam voluptas pariatur molestiae exercitationem fuga magnam doloremque voluptates necessitatibus commodi, obcaecati unde tenetur esse aspernatur laboriosam. Error quis harum ut minima odio?
                Optio earum ad rerum deleniti unde illum, cumque sunt aliquam dolorem minima fugiat repellat quas quos ea totam! Earum necessitatibus fugit nobis in voluptatem, inventore blanditiis! Neque incidunt eaque in?
                Voluptate, voluptas ipsam asperiores perferendis unde corporis tempora adipisci alias, consequatur voluptates quis sequi vitae ullam quam maxime necessitatibus, nesciunt eos incidunt inventore repellat quaerat soluta? Minus obcaecati at sunt.
                Quaerat voluptatibus blanditiis facilis debitis assumenda, possimus repudiandae quidem veritatis eligendi! Quod neque nostrum, id necessitatibus quidem nisi? Consequuntur maiores eum quia suscipit, illum quod maxime sapiente amet doloremque modi?
                Beatae debitis reiciendis accusantium a aperiam repellat tenetur temporibus et veritatis repellendus, asperiores est non. Odit totam accusamus temporibus ea ipsam molestiae, quasi eos laborum perferendis ut doloribus doloremque. Praesentium.
                Iure nostrum, obcaecati modi nemo similique quidem culpa nesciunt aspernatur cumque voluptate impedit ad. Dolor, facilis explicabo nesciunt aliquam numquam consequatur, tenetur mollitia at asperiores odio maxime iure perspiciatis eligendi!
                <div class="titleFood">Big Mac</div>
                <div class="kgFood">504 kcal</div>
            </div>
        </section>
    </main>

    <footer>
        <button>+</button>
    </footer>
  </div>

<?php include_once('includes/footer.php'); ?>