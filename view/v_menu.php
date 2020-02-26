<?php require 'v_header.php'; ?>
<?php require 'v_navbar.php'; ?>

  <img src="./images/logo.jpg">

  <h1>L'Italiano</h1>

  <h3>Le menu du jour</h3>

  <div class="card">
  <img src="./images/<?php echo $menuJour->getPhotoMenuDs(); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Menu du <?php echo $dateFr; ?></h5>
    <p class="card-text">Plat : <?php echo $menuJour->getPlatMenuDs(); ?></p>
  </div>
</div>



<?php require 'v_footer.php'; ?>
