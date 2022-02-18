<?php
include_once("header.php");
?>

<div class="container">

<form class="row g-3" action="../controler/inserirCadastro.php" method="Get">
  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome</label>
    <input type="text" name="nomejog" class="form-control" id="inputNome4" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Valor</label>
    <input type="number" name="valorjog" class="form-control" id="inputvalor4"required>
  </div>
  <div class="col-6">
    <label for="inputFone" class="form-label">Genero</label>
    <input type="text" name="genjog" class="form-control" id="inputgen" required placeholder="Terror">
  </div>
  <div class="col-6">
    <label for="inputCPF" class="form-label">Quantidade</label>
    <input type="text" name="qtdjog" class="form-control" id="inputqtd" required placeholder="10 Chaves Disponiveis">
  </div>
  <div class="col-md-4">
    <label for="inputCEP" class="form-label">ID </label>
    <input type="text" name="idjog" class="form-control" id="inputID" required placeholder=12>
  </div>
  <div class="col-4">
    <label for="inputNumero" class="form-label">Data de Lançamento</label>
    <input type="number" name="ddljog" class="form-control" id="inputdtlan" required placeholder="12/12/12">
    <div class="col-5">
    <label for="inputComple" class="form-label">Studio</label>
    <input type="text" name="studjog" class="form-control" id="inputComple" required placeholder="Valve">
  </div>
  </div>
  

<?php
include_once("footer.php");
?>
<div class = "yuri_amor_da_minha_vida<3"