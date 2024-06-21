<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joueurs</title>

    <link rel="stylesheet" href="../css/joueur.css">
</head>
<body>

<?php 
include ("./cookie.php");
include("./dbconnect.php");

if (isset($_GET['nom'])) {
    $nomEquipe = $_GET['nom']; 

    try {
        $sql = "SELECT joueur.*
                FROM joueur
                JOIN equipe ON joueur.id_equipe = equipe.id_equipe
                WHERE equipe.nom = :nomEquipe";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['nomEquipe' => $nomEquipe]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($result) > 0) {
            foreach ($result as $row) {
                echo '<div class="card" style="max-width: 540px;">';
                echo '  <div class="row">';
                echo '    <div class="col">';
                echo '      <div class="card-body">';
                echo '        <h5 class="card-title">Pseudonyme : ' . htmlspecialchars($row["pseudo"]) . '</h5>';
                echo '        <p class="card-text">Nom / Prénom : ' . htmlspecialchars($row["nom"]) . ' ' . htmlspecialchars($row["prenom"]) . '</p>';
                echo '        <p class="card-text">Nationalité / Date de Naissance : ' . htmlspecialchars($row["nationalite"]) . ' ' . htmlspecialchars($row["date_naissance"]) . '</p>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
            }
        } else {
            echo "0 résultats";
        }
    } catch(PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "ID de ligue non défini.";
}
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

