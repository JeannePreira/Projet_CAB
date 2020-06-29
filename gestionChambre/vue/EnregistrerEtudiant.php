<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="cool.css">
</head>
<body>
<!-- 
    nav barr
-->  
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand font-weight-bolder" href="#">UNIVERSITE<br>Code and Bugs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" ; id="navbarNav">
    <ul class="navbar-nav  " >
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Etudiant
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ListeEtudiant.php">Lister Etudiant</a>
          <a class="dropdown-item" href="index.php">Ajouter Etudiant</a>
         
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Chambre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ListeChambre.php">Liste Chambre</a>
          <a class="dropdown-item" href="EnregistrerChambre.php">Ajouter une Chambre</a>
        
      </li>
     
    </ul>
  </div>
</nav>  


<div class="container bg-dark d-flex align-items-center justify-content-center mt-3">

<form class="border col-md-6 rounded p-4 bg-info" >



  



  <div class="form-row ">
  
    <div class="form-group col-md-6">
    
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prenom</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
  </div>


  <div class="form-row">
  
    <div class="form-group col-md-6">
    
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Telephone</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
  </div>

  <div class="form-group col-md-5 ml-1 ">
    <label for="inputAddress">Date de Naissance</label>
    <input type="date" id="start"  min="1978-01-01" max="2020-12-31" name="trip-start" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-5 ml-1 mb-5">
      <label for="inputPassword4">Bourse</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
 
   
    <button style="margin-left:150px" type="submit" class="btn btn-light ml-auto col-md-6">Enregistrer</button>
  
  </div>

</form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
 integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
 crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
 integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
 crossorigin="anonymous"></script>
</body>
</html>