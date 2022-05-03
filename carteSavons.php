<?php
    require("command.php");

    $Produits=afficher();
?>


<!DOCTYPE html>
<html lang="fr"> 
	<head>
		<meta charset="UTF-8">
		<meta name="nom" content="auteur">
        <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00,minimum-scale=1.00">
		<title>Savons</title>
        <link rel="icon" type="image/x-icon" href="savon.png">
		<style> @import url('style.css'); </style>
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
   		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   		crossorigin=""></script>
           
		
	</head>
		

<body onload = "init()">



    <div class = "navigation">
        <ul>
            <li class ="list active">
                <a href="#">
                    <span class = "icon">
                        <ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Home</span>
                    <span class="infomenu">
                    <p>La plupart des savons proposés par la grande distribution sont saponifiés à chaud. L'intérêt de la saponification à froid est de préserver les matières premières utilisées et leurs propriétés : par exemple, si on prend du beurre de karité et qu'on le chauffe à haute température, il perd en qualité. Le "défaut" de la saponification à froid est qu'elle impose un temps de cure : temps pendant lequel la réaction fini de se faire entre les huiles et la soude pour produire le savon. Ce temps est d'environ 4 semaines : il faut donc un peu de patience avant de pouvoir vendre un savon.Attention, un savon artisanal n’est pas toujours saponifié à froid.Pour fabriquer un savon, il faut mélanger des corps gras (huiles, cires ou beurres) avec de la soude. Le mélange crée une réaction chimique qui donne de la glycérine et du savon. La glycérine obtenue est naturelle et très bénéfique pour la peau. Dans un savon solide industriel, la glycérine est extraite du savon pour le rendre plus dur : il perd alors une grande partie de ses bienfaits.Chaque huile ou beurre contient aussi des composants qui ne réagissent pas lors de la saponification : ils restent donc intacts et sont présents dans le savon. Ce sont ces composants qui apportent les propriétés intéressantes du savon : effet hydratant, nourrissant, réparateur, moussant… Avec la saponification à chaud, le mélange se fait à plus de 100°C ce qui altère les huiles et ne leur permet pas de garder toutes leurs propriétés ; pour la saponification à froid, le mélange se fait autour de 40°C.</p>
                    </span>
                </a>
            </li>
            <li class ="list">
                <a href="#">
                    <span class = "icon">
                    <ion-icon name="sparkles-outline"></ion-icon></span>
                    <span class="text">Savons</span>  
                    <span class = "savon">
                        <p>Fleur de Shampoing</p><img class="imgsavon" src="fleurdesavons.jpg" alt="fleur de shampoing">
                        <p>Shampoing pour tous types de cheveux. Réalisé avec la bière de l'ours ambrée.</p>
                        <p><strong>Caractéristiques : </strong></p>
                        <p>Petite Bulle</p><img class="imgsavon" src="PetiteBulle.jpg" alt="Petite Bulle">
                        <p>Les Bulles de Tremblay</p><img class="imgsavon" src="BullesdeTremblay.jpg" alt="les Bulles de Tremblay">
                        <p>Bulle Verte</p><img class="imgsavon" src="BulleVerte.jpg" alt="Bulle Verte">
                        <p>Douceur des Alpages</p><img class="imgsavon" src="DouceurdesAlpages.jpg" alt="Douceur des Alpages">
                        <p>Pause Café</p><img class="imgsavon" src="pausecafe.jpg" alt="Pause Café">
                    </span> 
                </a>
            </li>
            <li class ="list">
                <a href="#">
                    <span class = "icon">
                        <ion-icon name="chatbubble-outline"></ion-icon></span>
                    <span class="text">Message</span>
                    <ul>
                        <li class = "sub-menu" >
                        <a class="socicon" href="mailto:mathurinelsen@gmail.com" target="_blank"><ion-icon name="mail-open-outline"></a>
                        <a class="socicon" href="https://www.facebook.com/letempsdunebulle/"target="blank"><ion-icon name="logo-facebook"></a>
                        <a class="socicon" href="https://www.instagram.com/le_temps_dune_bulle/"target="blank"><ion-icon name="logo-instagram"></a></li>
                    </ul>
                    <p class="infocontact">N'hésitez pas à nous contacter pour plus de renseignement et pour passer commande!</p>
                </a>
            </li>
            <li class ="list">
                <a href="#">
                    <span class = "icon">
                    <ion-icon name="bag-handle-outline"></ion-icon></span>
                    <span class="text">Shop</span>                   
                </a>
            </li>
            <li class ="list">
                <a href="#">
                    <span class = "icon">
                    <ion-icon name="map-outline"></ion-icon></span>
                    <span class="text">Provenances</span>
                    <span class ="carto">
                    <div id="geoportail"></div>
                    </span>
                </a>
            </li>
            <div class = "indicator"></div>
        </ul>
    </div>

    <div class = "bordure">
        <h3> Des ingrédients locaux </h3>
        <img src="bio.png" alt="Logo Biologique">
        <p>Pour le bien de la planète mais aussi pour l'aspect humain, Le Temps d'une Bulle privilégie à chaque fois que c'est possible des fournisseurs locaux. Quoi de plus agréable que de connaître la personne qui a produit ce que vous utilisez pour votre recette et de savoir que ça vient de derrière le coin ?</p>
        <h3>Des ingrédients équitables</h3>
        <img src="commerce_equitable.png" alt="Logo Commerce Equitable">
        <p>Que ce soit pour les produits locaux ou pour les autres, l'aspect équitable est essentiel. Pour l'avenir de notre société, il est primordial que chaque travailleur soit rémunéré au prix juste, quel que soit son travail et l'endroit où il l'exerce.</p>
        <h3>Des ingrédients Biologiques</h3>
        <img src="produits_locaux.png" alt="Logo Produits Locaux">
        <p>Pour la planète autant que pour notre peau, avec Le Temps d'une Bulle, nous avons fait le choix de n'utiliser que des ingrédients issus de l'agriculture biologique.</p>
    </div>
<div class = "bordureR">
    <?php foreach($Produits as $produit): ?>
        <div>
        <h3> <?= $produit-> Savon ?></h3>
        <p> <?= $produit-> Provenance ?></p>
        <p> <?= $produit-> Produit ?></p>
        </div>
    <?php endforeach; ?>
    </div>
    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item)=>item.classList.remove('active'));

            this.classList.add('active');

        }
        list.forEach((item)=>item.addEventListener('click',activeLink))
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="Page4.js"></script>

	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
		crossorigin=""> 
	</script>

    <!-- <script src = "./leaflet.js">
    </script> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <footer>
		<table id="mentions">
			<td>Mentions</td> <td>Plan du site</td> <td>Cookies</td> <td>Conditions d'utilisation</td> <td>Confidentialité</td> <td>bibliographie</td><td> <?php $date = date("d/m/Y"); Print("$date"); ?></td>
			</table>
	</footer>

</body>
</html>