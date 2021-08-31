<?php
require "../../config/inc_config.php";
?>
<body>
    <header>
    <?php require "../../config/inc_header.php"; ?>
    </header>

    <!-- Lien de navigation -->
    <nav id="navigation">
        <?php require "../../config/inc_nav.php"; ?>
    </nav>

<h1>TOTAL ETUDIANT</h1>
<form method="post">
    <p><label for="sta_nom">Nom : </label><input type="text" name="sta_nom" id="sta_nom" required></p>
    <p><label for="sta_prenom">Prénom :</label><input type="text" name="sta_prenom" id="sta_prenom" required></p>
    <p><label for="sta_adresse">Adresse :</label><input type="text" name="sta_adresse" id="sta_adresse" required></p>
    <p><label for="sta_ville">Ville :</label><input type="text" name="sta_ville" id="sta_ville" required></p>
    <p><label for="sta_code_postal">Code postal :</label><input type="number" name="sta_code_postal" id="sta_code_postal" required></p>
    <select label="PROMOTION" >
        <option>Prépa</option>
        <option>Tertiaire</option>
        <option>IFMK</option>
    </select>
    <p><input type="submit" name="btSubmit" value="Valider"></p>
</form>
</body>