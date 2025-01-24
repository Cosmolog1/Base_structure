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

<?php foreach($articles as $item): ?>

    <div class="col-lg-4 col-md-6">
      <div class="card">
        <img src="./asset/image/<?php echo $item["imagePath"]?>">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $item["name"] ?></h5>
          <p class="card-text"> <?php echo $item["article"]?>
        </div>
      </div>
    </div>
 

<?php endforeach; ?>

  </div>
</div>

<?php
include_once ("footer.php");
?>
