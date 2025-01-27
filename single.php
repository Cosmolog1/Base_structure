<?php
include_once ("header.php");
include_once ("./asset/image/data.php");
?>

<?php


//var_dump($_GET);
$position = $_GET["position"];
$sport = $articles[$position];
//var_dump($sport);
//var_dump($articles[$position]["date"]);

?>

<div class="card">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $articles[$position]["name"]; ?></h5>
          <p class="card-text"> <?php echo $articles[$position]["article"]; ?></p>
          <img src="./asset/image/<?php echo $articles[$position]["imagePath"]?>">
         
        </div>
      </div>


 

 















<?php
include_once ("footer.php");
?>