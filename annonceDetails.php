<?php
require_once(__DIR__ . '/fonctionAnnonceDetails.php');

$id = isset($_GET['ad_id']) ? $_GET['ad_id'] : null;
if ($id !== null) {
    afficherAnnonceDetail($id);
} else {
    echo "L'identifiant de l'annonce n'a pas été spécifié.";
}
?>