<?php
    $myPage = 'variable';
    require 'partials/head.php'
?>
    <hgroup style="text-align:center" class="mb-5">
        <h1>Les Variables en PHP</h1>
        <h2>Variabe; déclarationt/ affectation / types</h2>
    </hgroup>
    <main class="ps-5">
        <p>
        <span style="color: red">Définition</span> : une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur. En PHP on déclare une variable avec le signe $.<br>
            Par convention, un nom de variable commence par une lettre minuscule, puis on met une majuscule à chaque mot. Il peut contenir des chiffres (jamais au début), ou un "_" (jamais au début car signification particulière en objet, ni à la fin).
        </p>

        <?php
        $maVariable = 127;
        echo '<p>' . $maVariable . '</p>';

        echo '<p>gettype() est une fonction prédéfinis qui indique le type d\'une variable.</p>';
        $a = 'une chaine de caractère';
        $b = true;
        $c = '127';

        echo '<p>Ma variable $a = ' . $a . ' est de type :' . gettype($a) . '</p>';
        echo '<p>Ma variable $b =' . $b . ' est de type :' . gettype($b) . '</p>';
        echo '<p>Ma variable $c =' . $c . ' est de type :' . gettype($c) . '</p>';
        echo '</main>';
        ?>
<?php
    require 'partials/footer.php'
?>