<?php
    $myPage = 'arithmetique';
    require 'partials/head.php';
?>

    <h1 style= "text-align: center" class="mb-5">L'arithmetique en PHP</h1>
<main class="ps-5">
    <h2>Opérateurs</h2>
<?php
    $a = 10;
    $b = 2;
    
    echo "<p>Ma variable a = $a et ma variable b = $b.</p>";

    $total = $a + $b;
    //$total affiche 12
    echo "<p>Ma variable a + ma variable b = $total</p>";

    $total = $a - $b;
    //$total affiche 8
    echo "<p>Ma variable a - ma variable b = $total</p>";

    $total = $a * $b;
    //$total affiche 20
    echo "<p>Ma variable a x ma variable b = $total</p>";

    $total = $a / $b;
    //$total affiche 5
    echo "<p>Ma variable a ÷ ma variable b = $total</p>";

    $total = $a % $b;
    //$total affiche 0
    //Modulo = reste de la division entière. 
    //Exemple 3%2 = si on a 3 billes réparties entre 2 personnes, il nous en reste 1 dans la main 
    echo "<p>Le modulo de ma variable a et ma variable b = $total</p>";
?>

    <h2>Opération et affectation combinées</h2>

<?php
    $c = 10;
    $d = 2;

    //Ca équivaut à $c = $c + $d, donc $c vaut au final 12
    $c += $d;
    echo "<p>Le total de ma variable c est = $c</p>";

    //Ca équivaut à $c = $c - $d, donc $c vaut au final 10
    $c -= $d;
    echo "<p>Maintenant le total de ma variable c est = $c</p>";

    //Ca équivaut à $c = $c * $d, donc $c vaut au final 20
    $c *= $d;
    echo "<p>Maintenant le total de ma variable c est = $c</p>";

    //Ca équivaut à $c = $c / $d, donc $c vaut au final 10
    $c /= $d;
    echo "<p>Maintenant le total de ma variable c est = $c</p>";

    //Ca équivaut à $c = $c % $d, donc $c vaut au final 0
    $c %= $d;
    echo "<p>Maintenant le total de ma variable c est = $c</p>";

?>

    <h2>Incrémenter et décrémenter</h2>
<?php
    $i = 0;
    $i++; // On ajoute 1 à $i qui vaut au final 1
    $i--; // On retire 1 à $i qui vaut au final 0

    echo '<p>$i++;</br>// on ajoute 1 à $i qui vaut au final 1</p>';
    echo '<p>$i--;</br>// on soustrait 1 à $i qui vaut au final 0</p>';

    $i = 0;
    $k = ++$i; // La variable $i est incrémentée de 1, puis elle est retournée : on affecte donc 1 à $k

    $i = 0;
    $k = $i++;

    echo '<p>$i = 0</p>';
    echo '<p>$k = ++$i; </br>// la variable $i est incrémentée de 1, puis elle est retournée : on affecte donc 1 à $k</p>';
    echo '</main>';
?>

<?php
    require 'partials/footer.php';
?>