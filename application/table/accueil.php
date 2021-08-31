<?php
function find_prepa()
{
    global $link;

    $sql = "select * from stagiaire
    order by desc sta_nom, sta_prenom, sta_adresse, sta_ville,sta_code_postal ";
    $result = mysqli_query($link, $sql);
    if ($result === false) {
        echo mysqli_error($link);
        exit();
    }
    return $result;
}
?>
