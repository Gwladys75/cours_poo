<?php require_once VIEWS . '/parts/header.html.php'; ?>

<h1>Tous les abonnés</h1>

<div class="d-flex flex-wrap justify-content-around">
    <?php foreach ($abonnes as $abonne) : ?>

        <p class="col-2 m-4">
            <span class="badge badge-primary" style="font-size: 20px;"><?= $abonne->prenom ?>
            </span>
            <a href="<?= url('modifier-abonne') ?>&id=<?= $abonne->id_abonne ?>" class="btn btn-warning">
                <i class="fa fa-pencil" aria-hidden="true">

                </i>
            </a>
        </p>

    <?php endforeach; ?>
</div>

<?php require_once VIEWS . '/parts/footer.html.php'; ?>