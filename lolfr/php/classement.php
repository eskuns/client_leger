<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Classement des équipes</title>
  <link rel="stylesheet" href="../css/classement.css">
</head>
<body>
  <div id="wrapper">
    <h1>Classement des équipes</h1>
      <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th><span>Nom de l'équipe</span></th>
            <th><span>Victoires</span></th>
            <th><span>Défaites</span></th>
            <th><span>Numéro de la ligue</span></th>
            <th><span>Numéro du coach</span></th>
          </tr>
        </thead>
        <tbody>
    <?php 
      include ("./cookie.php");
      include("./dbconnect.php");

      if (isset($_GET['id_ligue'])) {
        $id_ligue = intval($_GET['id_ligue']);
        $stmt = $conn->prepare("SELECT nom, victoire, defaite, id_ligue, id_coach FROM equipe WHERE id_ligue = :id_ligue");
        $stmt->bindParam(':id_ligue', $id_ligue, PDO::PARAM_INT);
        
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            foreach ($result as $row) {
      ?>
          <tr>
            <td><a class="no-decoration" href="./joueur.php?page=id_ligue&id_ligue=page=nom&nom=<?php echo urlencode($row['nom']); ?>"><?php echo htmlspecialchars($row['nom']); ?></a></td>
            <td><?php echo htmlspecialchars($row['victoire']); ?></td>
            <td><?php echo htmlspecialchars($row['defaite']); ?></td>
            <td><?php echo htmlspecialchars($row['id_ligue']); ?></td>
            <td><?php echo htmlspecialchars($row['id_coach']); ?></td>
          </tr>
      <?php }
        }
    }
      ?>
          </tbody>
        </table>
      </div>
    </body>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js'></script><script  src="../javascript/classement.js"></script>

</html>