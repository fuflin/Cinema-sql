<?php ob_start()?>

<h1 style="text-align: center; color: white; margin-bottom: 30px;">Bienvenue sur la page Ajouter Réalisateur</h1>

<h2 style="text-align: center; color: white; margin-bottom: 30px;">Ajouter Réalisateur</h2>


    
<form class="row g-3" action="index.php?action=ajoutFilm" method="post">
    <div class="col-md-4">
        <label for="photo" class="form-label" style="text-align: center; color: white;">Photo</label>
        <input type="text" class="form-control" name="photo">
    </div>
    <div class="col-md-4">
        <label for="lastname" class="form-label" style="text-align: center; color: white;">Nom</label>
        <input type="text" class="form-control" name="lastname">
    </div>
    <div class="col-md-4">
        <label for="firstname" class="form-label" style="text-align: center; color: white;">Prénom</label>
        <input type="text" class="form-control" name="firstname">
    </div>
        <!-- bouton pour ajouter le réalisateur saisie -->
    <div class="col-12" style="display: flex;justify-content: center;">
        <input type="submit" class="btn btn-primary w-50" name="submit" value="Ajouter">
    </div>
</form>

<?php

$title = "Ajouter realisateur";
$contenu = ob_get_clean(); 
require "View/layout.php";