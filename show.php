<?php

include_once("templates/header.php");

?>

<!-- Exibir o contato e os dados ao clicar em visualizar -->
<div class="container" id="view-contact-container">
  <!-- botão de voltar -->
  <?php include_once("templates/backBtn.html"); ?>

  <h1 id="main-title"><?= $contact["name"] ?></h1>
  <p class="showTitle">Telefone:</p>
  <p class="showDescription"><?= $contact["phone"] ?></p>
  <p class="showTitle">Observações:</p>
  <p class="showDescription"><?= $contact["observations"] ?></p>
</div>

<?php

include_once("templates/footer.php");

?>