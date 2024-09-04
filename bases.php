<?php
require 'partials/head.php'
?>
<h1 style= "text-align: center" class="mb-5">Ici ma page base!</h1>
<?php
echo '<main class="ps-5">';
echo '<h2>Les balises</h2>';
echo '<p class="fst-italic text-secondary"> Ici je suis dans les balises PHP</p>';
?>
<p>
    Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP on utilise : < ?php pour le refermer on utilise ?>.
        En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
</p>
<?php
echo '<p>echo est une instruction qui permet d\'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML. </p>';
?>
<h3>Différens affichages</h3>
<?php
echo '<p>Ici c\'est un echo</p>';
print '<p>Ici c\'est un print</p>';
?>
<p>echo accepte plusieurs arguments et ne retourne aucune valeur.</p>
<?php
echo '<p>valeur i</p>', '<p>valeur 2</p>';
print '<p>La différence majeure avec echo est que print n\'accepte qu\'un seul argument et retourne toujours 1.</p>'
?>
<ul>
    <li>print_r, affiche des informations à propos d'une variable, demanière à ce que'elle soit lisible</li>
    <li>var_dump, affiche des informations structurées d'une variable, y compris son type et sa valeur.</li>
</ul>
</main>
<?php
require 'partials/footer.php'
?>