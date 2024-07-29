<?php require_once VIEWS . '/parts/header.html.php'; ?>

<h1>Modifier un abonné</h1>

<form method="POST" action="<?= url('modifier-abonne-handler') ?>&id=<?= $abonne->id_abonne ?>">
    <div class="form-group row">
        <label for="prenom" class="col-sm-12 col-form-label">Prénom</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom" value="<?= $abonne->prenom ?>">
        </div>
    </div>

    

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
</form>

<?php require_once VIEWS . '/parts/footer.html.php'; ?>