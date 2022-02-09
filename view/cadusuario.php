<?php
include_once("header.php");
?>

<div class="container">

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-6">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" class="form-control" id="inputfone
    " placeholder="(11)969480059">
  </div>
  <div class="col-6">
    <label for="inputCPF" class="form-label">CPF</label>
    <input type="text" class="form-control" id="inputCPF" placeholder="777.777.777-77">
  </div>
  <div class="col-md-4">
    <label for="inputCEP" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCEP" placeholder=00000-000>
  </div>
  <div class="col-4">
    <label for="inputNumero" class="form-label">Número</label>
    <input type="number" class="form-control" id="inputNumero
    " placeholder="00">
    <div class="col-5">
    <label for="inputComple" class="form-label">Complemento</label>
    <input type="text" class="form-control" id="inputComple
    " placeholder="Casa 2/Bloco -A">
  </div>
  </div>
  <div class="col-md-6">
    <label for="inputTipo" class="form-label">Tipo de usuário</label>
    <select id="inputTipo" class="form-select">
      <option selected>Escolha...</option>
      <option value="1">Funcionario</option>++++++++++++++++++++++++++++++++++++++++
      <option value="2"> Cliente</option>
    </select>
  </div>
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceita-se os termo de uso do sistema de jogos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>
</form>

</div>

<?php
include_once("footer.php");
?>
