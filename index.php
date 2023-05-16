<?php
include './Models/Movie.php';
?>

<?php include './components/header.php'; ?>

<main class="overflow-hidden">
    <div class="container py-5">
        <div class="row">
            <?php foreach ($movies as $movie) { ?>
                <?php include './components/card.php'; ?>
            <?php } ?>
        </div>
    </div>
</main>



<?php include './components/footer.php'; ?>