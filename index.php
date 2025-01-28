<?php
include_once ("header.php");
include_once ("./asset/image/data.php")
?>

<br>

<button class = "btn btn-primary" type="button">Test</button>

<br>
<br>

<div class="container text-center">
  <div class="row g-3">

<?php foreach($articles as $key => $item): ?>


 
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <img src="./asset/image/<?php echo $item["imagePath"]?>">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $item["name"] ?></h5>
          <p class="card-text"> <?php echo getTextPreview($item['article']) ?></p>
          <a href="single.php?position=<?php echo $key; ?>" target="_blank">Article complet</a>
        </div>
      </div>
    </div> 
 

<?php endforeach; ?>

  </div>
</div>

<a href="contact.php" target="_blank">Contact</a>

<?php
include_once ("footer.php");
?>

<?php 
// Je recupére la partie 'article' du tableau $articles
function getTextPreview($texte){

// Je crée un tableau avec la string présent dans 'article'
  $tableau = str_split($texte);

// Je défini la valeur de base de ma string à "vide"
  $string = '';

// Je défini la valeur du nombre d'ajout à 0
  $test = 0;

// Je parcours tous les caractéres présent dans le $tableau
  foreach($tableau as $item){

// je concaténe chaque caractére à la variable $string   
    $string = $string . $item;

// je reste +1 à test qui représente le nombre de fois que je boucle
    $test++;

// je défini l'arret du if quand le test arrive à 25
    if($test > 25){

// J'arrete le if
      break;
    }
  }

// je récupere la variable qui m'interresse dans la fonction et la retourne

return $string;

}