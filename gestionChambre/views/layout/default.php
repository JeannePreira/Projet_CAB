<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="<?=BASE_URL?>/public/css/class.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link text-warning active" href="<?=BASE_URL?>/user/enregistrerEtudiant">Accueil<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link text-body " href="<?=BASE_URL?>/user/listerEtudiant">liste étudiant</a>
            <a class="nav-item nav-link text-body" href="<?=BASE_URL?>/user/enregistrerChambre">Ajout chambre</a>
            <a class="nav-item nav-link text-body" href="<?=BASE_URL?>/user/listerChambre">liste chambre</a>
            <a class="nav-item nav-link text-body fs-4 disabled" href="#" tabindex="-1" aria-disabled="true">Déconnexion</a>
        </div>
    </div>
</nav>
<?php echo  $content_for_layout?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
 integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
 crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
 integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
 crossorigin="anonymous"></script>
</body>
</html>