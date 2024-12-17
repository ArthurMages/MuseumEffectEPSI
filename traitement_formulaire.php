<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $raison = htmlspecialchars(trim($_POST['raison'] ?? ''));
    $civilite = htmlspecialchars(trim($_POST['civilite'] ?? ''));
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $prenom = htmlspecialchars(trim($_POST['prenom'] ?? ''));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone'] ?? ''));
    $objet = htmlspecialchars(trim($_POST['objet'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!$raison || !$civilite || !$nom || !$prenom || !$email || !$objet || !$message) {
        echo "Tous les champs obligatoires doivent être remplis.";
        exit;
    }

    try {
        $stmt = $pdo->prepare("
            INSERT INTO users (raison, civilite, nom, prenom, email, telephone, objet, message)
            VALUES (:raison, :civilite, :nom, :prenom, :email, :telephone, :objet, :message)
        ");

        $stmt->execute([
            ':raison' => $raison,
            ':civilite' => $civilite,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':telephone' => $telephone,
            ':objet' => $objet,
            ':message' => $message,
        ]);

        header("Location: accueil.php");
        exit;

    } catch (PDOException $e) {
        echo "Erreur lors de l'enregistrement : " . $e->getMessage();
    }
} else {
    echo "Méthode non autorisée.";
}
?>