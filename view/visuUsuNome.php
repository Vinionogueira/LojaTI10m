<?php

include_once("../view/header.php");



?>


<div class="centroform">

<form action="../controler/buscaUsuarioNome.php" method="Post"class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do Usuário</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" name="nomeUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome do usuario">
    </div>
  </div>
  
<div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
  <?php
$nomeUsu = isset ($_POST["nomeUsu"])? $_POST["nomeUsu"] : "";

foreach($nomeUsu as $nomeUsuarios):
?>
    <tr>
      <th scope="row"><?=$nomeUsuarios["idusu"]?></th>
      <td><?=$nomeUsuarios["nomeusu"]?></td>
      <td><?=$nomeUsuarios["emailusu"]?></td>
      <td><?=$nomeUsuarios["foneusu"]?></td>
    </tr>
   <?php
   endforeach
   ?>
  </tbody>
</table>

</div>