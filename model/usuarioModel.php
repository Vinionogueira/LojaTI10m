<?php 

function inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$cpfusu,$tipousu,$cepusu,$numusu,$compusu) {



$query = "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `foneusu`, `tipousu`, `cpfusu`, `cepusu`, `numusu`, `compusu`) 
VALUES (NULL,'{$nomeusu}','{$emailusu}','{$foneusu}', 
'{$tipousu}','{$cpfusu}','{$cepusu}','{$numusu}','{$compusu}')";


$dados = mysqli_query($conn,$query);
return $dados; 

}

?>