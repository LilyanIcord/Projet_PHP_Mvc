<?php include_once ('v_entete.php'); ?>

<div class="container">
    <h2>Ajout d'un Employe</h2>

    <form action="index.php?page=ajoutEmploye" method="post">
        <div class="mb-3">
            <label for="matricule" class="form-label">Matricule :</label>
            <input type="text" class="form-control" name="matricule" size=4><br />
        </div>
        <div class="mb-3">
            <label for="nom" class="form-control"></label>
        </div>
    </form>
</div>