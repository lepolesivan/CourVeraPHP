<?php
    $myPage = 'condition';
    require 'partials/head.php';
?>

    <h1 style= "text-align: center" class="mb-5">Les conditions</h1>
<?php
    echo '<main class="ps-5">';
    $a = 10;
    $b = 5;
    $c = 2;

    //Si la condition est évaluée à TRUE, on exécute les accolades qui suivent :
    if($a > $b){
        echo '<p>$a est supérieur à $b.</p>';
    } else { // Sinon... si la condition est évaluée à false, on exécute le else :
        echo '<p>Non, c\'est $b qui est supérieur ou égal à $a.</p>';
    }

    //Si $a est supérieur à $b ET que dans le même temps $b est supérieur à $c, alors on entre dans les accolades :
    if(($a > $b) AND ($b > $c)){
        echo '<p>OK pour les 2 conditions </p>';
    }

    //Si $a est supérieur à $b ET que dans le même temps $b est supérieur à $c, alors on entre dans les accolades :
    if(($a > $b) && ($b > $c)){
        echo '<p>OK pour les 2 conditions </p>';
    }

    //Si $a est égal à 9 (opérateur ==) OU que $b est supérieur à $c, alors on entre dans les accolades :
    if(($a == 9) || ($b > $c)){
        echo '<p>OK pour au moins une des 2 conditions </p>';
    }

    //Si $a est égal à 9 (opérateur ==) OU que $b est supérieur à $c, alors on entre dans les accolades :
    if(($a == 9) OR ($b > $c)){
        echo '<p>OK pour au moins une des 2 conditions </p>';
    }

    if($a == 8){
        echo '<p>$a est égal à 8</p>';
    } elseif ($a != 10){
        echo '<p>$a n\'est pas égal à 10</p>';
    } else {
        echo '<p>Les 2 conditions précédentes sont fausses </p>';
    }

    $question1 = 'mineur';
    $question2 = 'je vote';

    // XOR ou OU exclusif : 
    //Seulement une des 2 conditions doit être vraie (soit l'une ou soit l'autre). 
    //Si les 2 conditions sont vraies, alors l'expression complète est fausse : c'est le cas ici, on entre donc dans le else
    if(($question1 == 'mineur') XOR ($question2 == 'je vote')) {
        echo '<p>Vos réponses sont cohérentes.</p';
    } else {
        echo '<p>Vos réponses ne sont pas cohérentes.</p>';
    }
?>
    <h2>Les ternaires</h2>
<?php
    echo '<p>($a == 10) ? $a est égal à 10: $a est différent de 10 </p>';
    
    $resultat = ($a == 10) ? '$a est égal à 10 <br>' : '$a est différent de 10 <br>';
    echo "<p>$resultat</p>";

    if($a == 10){
        echo '<p>$a est égal à 10 </p>';
    }else{
        echo '<p>$a est différent de 10 </p>';
    }     
?>

    <h2>== et ===</h2>
<?php
    $varA = 1;
    $varB = '1';

    if ($varA == $varB) echo '<p>$varA est égal à $varB en valeur uniquement </p>';

    if ($varA === $varB) {
        echo '<p>$varA est égal à $varB en valeur ET en type</p>';
    } else {
        echo '<p>$varA est différent de $varB en valeur ou en type</p>';
    }
?>

    <h2>isset() et empty()</h2>
    <p>Définitions :</p>
    <p>isset() teste si c'est défini (si existe) et a une valeur non NULL</p>
    <p>empty() teste si c'est vide, c'est-à-dire 0, string vide '', NULL, false ou non défini</p>
<?php
    $var1 = 0;
    $var2 = '';

    // ici la condition est vraie car $var1 est vide au sens de empty (voir la définition ci-dessus)
    if (empty($var1)) echo '<p>0, vide, NULL, false ou non défini </p>'; 

    // la condition est vraie car $var2 existe bien (et est non NULL)
    if (isset($var2)) echo '<p>existe et non NULL </p>'; 

    $var3 = 'une chaîne de caractères';
    if (!empty($var3)) echo '<p>$var3 n\'est pas vide </p>';

    //PHP7
    //l'opérateur "??" indique qu'il faut prendre la première variable ou valeur qui existe : 
    //$variableInconnue n'existant pas, on passe à $varAutre qui n'existe pas non plus, 
    //donc on prend la 'valeur par défaut' pour l'affecter à $var1
    $var1 = $variableInconnue ?? $varAutre ?? 'valeur par défaut'; 
    echo "<p>$var1</p>";
?>
    <h2> Condition switch </h2>
<?php
    $couleur = 'jaune';

    switch ($couleur) {
        case 'bleu' : 
            echo '<p>Vous aimez le bleu </p>';
        break;  // break est obligatoire pour quitter la condition une fois le case exécuté
        
        case 'rouge' :
            echo '<p>Vous aimez le rouge </p>';
        break;  
    
        case 'vert' :
            echo '<p>Vous aimez le vert </p>';
        break; 
    
        default:  // cas par défaut si on n'entre pas dans les cases précédents (équivalent du else)
            echo '<p>Vous n\'aimez aucune de ces couleurs </p>';
        break;    
    }
    echo '</main>';
?>

<?php
    require 'partials/footer.php';
?>