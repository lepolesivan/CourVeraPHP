<?php
    $myPage = 'tableau';
    require 'partials/head.php';
?>
    <h1 style="text-align:center" class="mb-5">Les tableau en PHP</h1>
    <p>Un tableau, ou array en anglais, est une variable améliorée dans laquelle on stocke une multitude de valeurs. 
        Ces valeurs peuvent être de n'importe quel type. 
        Elles possèdent un indice dont la numérotation par défaut commence à 0.</p>
<?php
    // Déclaration d'un array (méthode 1) :
    $prenom = array('Abdelkarim', 'Abdou', 'Sarah');

    echo "<p>Ma variable prenom est un ". gettype($prenom) ."</p>";
    var_dump($prenom);

    echo "<p> print_r est plus synthétique que var_dump : il n'affiche pas le type des éléments contenus dans l'array</p>";
    echo print_r($prenom) . "<br>";

    // Déclaration d'un array (méthode 2) :
    $liste = ['Khaoula', 'Fatima', 'Mathis'];
    $liste[] = 'Julien'; // Les [] vides permettent d'ajouter une valeur à la fin de notre array
    echo print_r($liste) . "<br>";
    echo "<p>$liste[1]</p>"
?>
    <h2>Les tableaux associatif</h2>
    <p>Un tableau associatif est un tableau dans lequel on choisit la dénomination des indices.</p>
<?php
    $couleur = array(
        'j' => 'jaune',
        'b' => 'bleu',
        'v' => 'vert'
    );
    echo "<p>$couleur[j]</p>";

    echo "<p>count() et sizeof() font la même chose : ils comptent le nombre d'éléments contenus dans l'array indiqué</p>";
    echo '<p>Taille du tableau $couleur :' . count($couleur) . '</p>';
    echo '<p>Taille du tableau $couleur :' . sizeof($couleur) . '</p>';
?>
    <h2>Array multidimensionnel</h2>
    <p>Nous parlons de tableau multidimensionnel quand un tableau est contenu dans un autre tableau. Chaque tableau représente une dimension.</p>
<?php
    $tab_multi = array(
        0 => array(
            'prenom' => 'Julien',
            'nom'    => 'Dupon',
            'telephone' => '0601020304'
        ),
        1 => array(
            'prenom' => 'Nicolas',
            'nom'    => 'Duran',
            'telephone' => '0601020304'
        ),
        2 => array(
            'prenom' => 'Pierre',
            'nom'    => 'Dulac'
        )
    );

    echo "<p>" . $tab_multi[0]['prenom'] . "</p>";

    for($i = 0; $i < count($tab_multi); $i++){

        $prenom = $tab_multi[$i]['prenom'];

        echo "<p>$prenom</p>";
    }
?>
<?php
    require 'partials/footer.php';
?>