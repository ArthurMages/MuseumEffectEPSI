<?php
$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'accueil';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cité du Vin</title>
    <link rel="stylesheet" href="css/templates-parts/header.css">
    <link rel="stylesheet" href="css/templates-parts/footer.css">
    <link rel="stylesheet" href="css/globale.css">
    <?php if (file_exists('css/pages/' . $page . '.css')): ?>
        <link rel="stylesheet" href="css/pages/<?= $page ?>.css">
    <?php endif; ?>
</head>

<body>
 
<?php include('template/templates-parts/header.php'); ?>

    <main>
        <?php
        $pageFile = 'template/pages/' . $page . '.php';
        if (file_exists($pageFile)) {
            include($pageFile);
        } else {
            echo '<p>Page non trouvée.</p>';
        }
        ?>
    </main>

    <?php include('template/templates-parts/footer.php'); ?>
</body>
</html>