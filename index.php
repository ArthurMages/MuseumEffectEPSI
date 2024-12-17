<?php
session_start();

// Définir une liste de pages autorisées
$allowed_pages = ['home', 'contact', 'galerie'];

// Vérifier que la page demandée est autorisée, sinon utiliser 'home' par défaut
$page = isset($_GET['page']) && in_array($_GET['page'], $allowed_pages) ? $_GET['page'] : 'home';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/globale.css">
    <link rel="stylesheet" href="css/template-part/template-part.css">
    <link rel="stylesheet" href="css/page/<?=($page)?>.css">
    <title>Museum Effect</title>
</head>

<body>
    
    <?php include 'template/template-part/navbar.php' ;?>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        include('template/page/' . $page . '.php');
        ?>
    </main>
    
    <?php include 'template/template-part/footer.php' ;?>

    <script src="js/template-part.js" defer></script>
</body>
</html>