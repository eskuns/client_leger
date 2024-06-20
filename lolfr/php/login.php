<?php
    $servername = "localhost";
    $dbname="lolfr";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    session_start();
    if(isset($_POST['username-login'])){
        $identifiant= $_POST['username-login'];
        $mdp = $_POST['mdp-login'];


        $sql = "SELECT * FROM compte;";
        $result = $conn->query($sql);

        if ($result->rowCount() > 0) {
            $data = $result->fetchAll();

            foreach ($data as $row) {
                if (($row["pseudo"] == $identifiant || $row["email"] == $identifiant) && password_verify($mdp, $row["mdp"])) {
                    $_SESSION['loggedin'] = true;                   
                    header("location: ./php/accueil.php");
                    }
                    
                }
            }
    }
    $conn = null;
?>