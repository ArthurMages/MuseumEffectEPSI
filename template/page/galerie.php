<?php
include 'data/bdd/bibli.php';
?>

<?php foreach ($oeuvre as $musee => $data): ?>
    <!-- Titre du musée avec ID -->
    <h1 id="<?php echo strtolower(str_replace(' ', '-', $musee)); ?>">
    <?php echo htmlspecialchars($musee); ?>
    </h1>

    <!-- Section des images -->
    <div class="image-container">
        <?php foreach ($data['images'] as $image): ?>
            <img src="<?php echo htmlspecialchars($image); ?>" alt="Image de <?php echo htmlspecialchars($musee); ?>">
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>