<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Gestion du personnel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-Language" content="fr"/>

        <meta name="viewport" content="text/html; initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <h1>Gestion du personnel</h1>
            <div class="d-grid gap-2 d-md-block">
                <a class="btn btn-primary" href="index.php?page=acceuil" role="button">acceuil</a>

                <a class="btn btn-primary dropsown-toggle" href="#" role="button"
                 data-bs-toggle="dropdown" aria-expanded="false">Liste des employés</a>

                 <ul class="dropdown-menu">
                    <?php
                    foreach ($this->data["lesServices"] as $unService)
                    {
                        echo '<li><a class="dropdown" href="index.php?service='.
                        $unService->GetCode().'$page=listeEmployes">'.
                        $unService->GetDesignation().'</a></li>';
                    }
                    ?>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="index.php?service=all&page=listeEmployes">
                    Tous les services</a></li>
                 </ul>
                 <br>
                 <br>
            </div>
        </div>
