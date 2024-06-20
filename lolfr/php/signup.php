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

if(isset($_POST['username'])){
    $pseudo= $_POST['username'];
    $mdp = $_POST['mdp'];
    $email = $_POST['email'];

    $hashedPassword = password_hash($mdp, PASSWORD_DEFAULT);

    $sql = $conn->prepare("INSERT INTO compte (pseudo, mdp, email) VALUES (:username, :mdp, :email) ");
    $sql->execute(array(
    ':username' => $pseudo,
    ':mdp' => $hashedPassword,
    ':email' => $email,
    ));
}
$conn = null;

?>
