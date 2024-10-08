<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases en PHP - <?php echo $myPage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="/">
                    <img src="/public/img/logo_poleS.png" alt="Logo" width="30" class="d-inline-block align-text-top">
                    Les bases en PHP
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php
                            if($myPage !== 'acceuil'){
                                echo '<a class="nav-link text-light" href="/index.php">Accueil</a>';
                            }  
                        
                            if($myPage !== 'bases'){
                                echo '<a class="nav-link text-light" href="/bases.php">Les bases</a>';
                            }  
                        
                            if($myPage !== 'variable'){
                                echo '<a class="nav-link text-light" href="/variable.php">Variables</a>';
                            }  
                       
                            if($myPage !== 'constante'){
                                echo '<a class="nav-link text-light" href="/constante.php">Les constantes</a>';
                            }  
                        
                            if($myPage !== 'concatenation'){
                                echo '<a class="nav-link text-light" href="/concatenation.php">Concatenation</a>';
                            }  
                      
                            if($myPage !== 'arithmetique'){
                                echo '<a class="nav-link text-light" href="/arithmetique.php">Arithmétique</a>';
                            }  
                        
                            if($myPage !== 'condition'){
                                echo '<a class="nav-link text-light" href="/condition.php">Condition</a>';
                            }  
                            if($myPage !== 'tableau'){
                                echo '<a class="nav-link text-light" href="/tableau.php">Tableau</a>';
                            }  
                            if($myPage !== 'boucle'){
                                echo '<a class="nav-link text-light" href="/boucle.php">Boucle</a>';
                            }  
                            if($myPage !== 'date'){
                                echo '<a class="nav-link text-light" href="/date.php">Date</a>';
                            }  
                            if($myPage !== 'inclusion'){
                                echo '<a class="nav-link text-light" href="/inclusion.php">Inclusion</a>';
                            }  
                            if($myPage !== 'fonction'){
                                echo '<a class="nav-link text-light" href="/fonction.php">Fonction</a>';
                            }  
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>