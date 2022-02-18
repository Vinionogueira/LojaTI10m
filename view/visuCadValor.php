<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/cadastroModel.php");

?>


<div class="centroform">

<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Valor do jogo</label>
    <div class="input-group">
      <div class="input-group-text">Valor</div>
      <input type="text" name="valorjog" class="form-control" id="inlineFormInputGroupUsername" placeholder="Valor do jogo">
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>



<table class="table">
  <thead>
    <tr>
      <th scope="col">codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>
  <?php
$valorjog = isset ($_POST["valorjog"])? $_POST["valorjog"]:"" ;

if($emailusu){


$dado = visuCadastroValor($conn, $valorjog);

foreach($dado as $emailUsuarios): 
?>
    <tr>
      <th scope="row"><?=$emailUsuarios["idjog"] ?></th>
      <td><?=$emailUsuarios["nomejog"] ?></td>
      <td><?=$emailUsuarios["valorjog"] ?></td>
      <td><?=$emailUsuarios["genjog"] ?></td>
    </tr>
    <?php
      endforeach;
    }
    ?>
  </tbody>
</table>

</div>

<?php

include_once("../view/footer.php")

?>