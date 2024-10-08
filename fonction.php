<?php
    $myPage = 'fonction';
    require 'partials/head.php';
?>

    <h1 style="text-align:center" class="mb-5">Les fonctions</h1>
    <h2>Quelques fonctions prédéfinies</h2>
    <p>Une fonction prédéfinie permet de réaliser un traitement spécifique prédéterminé dans le langage PHP. </p>

<?php
    $email1 = 'prenom@site.fr';
    $result = strpos($email1, '@');
    echo "<p>Affiche la position 6 de l'@ en comptant à partir de 0</p>";
    $email2 = 'bonjour';
    var_dump(strpos($email2, '@'));

    $phrase = 'mettez une phrase ici à cet endroit';
    $result = strlen($phrase);
    echo "<p>strlen retourne la taille de la chaîne et la taille avec les espaces</p>";

    $texte = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum aperiam maiores tenetur veritatis ipsum debitis nostrum, nobis, quo at id dolore optio maxime natus quis? Accusantium debitis minima dignissimos necessitatibus!';
    $result =  substr($texte, 0, 20);// retourne les 20 premiers caractères du texte

?>
    <h2>Fonctions utilisateur </h2>
    <p>Des fonctions sont des morceaux de codes encapsulés dans des accolades et portant un nom, qu'on appelle au besoin pour exécuter le code qui s'y trouve.</p>

<?php
    function hello($gender){
        if($gender == 'homme'){
            echo "<p>Bonjour Monsieur.</p>";
        }else {
            echo "<p>Bonjour Madame.</p>";
        }
    }
    
?>
<?php
    require 'partials/footer.php';
?>