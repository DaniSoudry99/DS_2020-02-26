<script>
//script qui affiche les messages d'erreurs
$(document).ready(function ()
{
  var erreur = '<?php echo $erreur; ?>';

  $(".erreur").html(erreur);
});
</script>
