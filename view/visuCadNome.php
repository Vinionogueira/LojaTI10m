<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/cadastroModel.php");

?>


<div class="centroform">

<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do jogo</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" name="idjogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Id do jogo">
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>
  <?php
$idjog = isset ($_POST["idjog"])? $_POST["idjog"]:"" ;

if($idjog){

$dado = visuCadastroCodigo($conn,$idjog);


?>
    <tr>
      <th scope="row"><?=$dado["idjog"] ?></th>
      <td><?=$dado["nomejog"] ?></td>
      <td><?=$dado["valorjog"] ?></td>
      <td><?=$dado["genjog"] ?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

</div>

<?php

include_once("../view/footer.php")

?>