<?php
    require 'partials/head.php';
?>
    <h1 style= "text-align: center" class="mb-5">La concatenation</h1>
<?php
    $x = 'Bonjour';
    $y = 'tout le monde !';

    // Dans l'instruction echo on peut séparer les éléments à afficher par une virgule. 
    // Cette syntaxe est spécifique à echo et ne marche pas avec print.
    echo '<p>' . $x . ' ' . $y . '</p>';
    echo '<p>' , $x , ' ' , $y , '</p>';

    // Ici je créer une variable prenom je lui donne la valeur Abdou 
    $prenom = 'Abdou';
    // Ici j'appel ma variable prenom je lui donne une nouvelle valeur Sarah 
    $prenom = 'Sarah';
    // Ici j'affiche la valeur de la variable prenom
    echo "<p>$prenom</p>";

    // Ici je créer une variable prenom je lui donne la valeur Mathis
    $prenomBis = 'Mathis';
    //Ici j'appel ma varible prenomBis et je lui AJOUTE la valeur Fatima
    $prenomBis .= ' Fatima';
    //Ici j'appel ma varible prenomBis et je lui AJOUTE la valeur Radouane
    $prenomBis .= ' Radouane';

    //Ici j'affiche dans un p les valeurs donc "Mathis Fatima Radouane"
    echo "<p>$prenomBis</p>";
?>
    <h2>Les guillemets et les quotes</h2>
<?php
    //On échappe les apostrophes dans les quotes simples avec \ (alt Gr + 8)
    $message = 'aujourd\'hui';

    //Ou bien
    $message = "aujourd'hui";

    //Dans des quotes simples, la variable n\'est pas évaluée, elle est traitée comme du texte brut.
    echo '<p>$message</p>';
    //Dans les guillemets, la variable est évaluée : c\'est son contenu qui est affiché
    echo "<p>$message</p>";
?>
<?php
    require 'partials/footer.php';
?>