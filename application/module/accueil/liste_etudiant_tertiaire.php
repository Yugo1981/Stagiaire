<?php
require "../../config/inc_config.php";
$sql="select * from stagiaire
where sta_promotion=tertiaire
order by sta_nom, sta_prenom, sta_adresse, sta_ville,sta_code_postal
";
$result = mysqli_query($link,$sql);
if ($result===false) {
    echo mysqli_error($link);
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <?php require "../../gabarit/inc_head.php"; ?>
    </head>
<body>
    <!-- entete de page -->
    <header>
    <?php require "../../config/inc_header.php"; ?>
    </header>
    <!-- liens de navigation -->
    <nav>
    <?php require "../../config/inc_nav.php"; ?>
    </nav>
    <!-- contenu principal -->
    <div id="main">
        <table>
            <thead>
                <tr>
                    <th>sta_id</th>
                    <th>sta_nom</th>
                    <th>sta_prenom</th>
                    <th>sta_adresse</th>
                    <th>sta_code_postal</th>
                    <th>sta_promotion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    //Application de htmlspecialchar à chaque élement de $row
                    extract(array_map("hsc",$row));    
                    ?>
                <tr>
                    <td><?=$sta_id?></td>
                    <td><?=$sta_nom?></td>
                    <td><?=$sta_prenom?></td>
                    <td><?=$sta_adresse?></td>
                    <td><?=$sta_code_postal?></td>
                    <td><?=$sta_promotion?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- pied de page -->
    <footer>
    <?php require "../../gabarit/inc_pied.php"; ?>
    </footer>
</body>
</html>