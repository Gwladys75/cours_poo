<?php require_once view('parts/header'); ?>

<h1>Tous les livres</h1>

<div class="d-flex justify-content-around flex-wrap">

    <?php foreach ($livres as $livre) : ?>

        <div class="card col-3 m-4">
            <img class="card-img-top" src="<?= $livre->couverture ?>" alt="La couverture du livre <?= $livre->titre ?>">
            <div class="card-body">
                <h4 class="card-title"><?= $livre->titre ?></h4>
                <p class="card-text"><?= $livre->auteur ?></p>
            </div>
        </div>

    <?php endforeach; ?>

</div>

<?php require_once view('parts/footer'); ?>