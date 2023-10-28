<?php

include_once("templates/header.php");

?>

<div class="container">
  <!-- botão de voltar -->
  <?php include_once("templates/backBtn.html"); ?>

  <h1 id="main-title">Editar Contato</h1>
  <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
    <div class="form-group">
      <label for="name">Nome do Contato:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="<?= $contact['name'] ?>" required>
    </div>
    <div class="form-group">
      <label for="phone">Telefone do Contato:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="(xx) 99999-9999" value="<?= $contact['phone'] ?>" required>
    </div>
    <div class="form-group">
      <label for="observations">Observações:</label>
      <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira uma observação" rows="3"><?= $contact['observations'] ?></textarea>
    </div>
    <!-- required só deixa enviar se o campo não estiver vazio -->
    <button id="creatBtn" type="submit" class="btn btn-primary">Editar</button>
  </form>
</div>

<?php

include_once("templates/footer.php");

?>