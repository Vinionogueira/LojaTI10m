<?php 

function inserirUsuario($conn,$nomejog,$valorjog,$genjog,$qtdjog,$idjog,$ddljog,$studjog,){



$query = "INSERT INTO `tbjogos` (`idjogo`, `nomejogo`, `valorjogo`, `generojogo`, `qtdjogo`, `datalancamentojogo`, `studiojogo`) VALUES (NULL,'{$nomejog}','{$valorjog}','{$genjog}', '{$qtdjog}','{$idjog}','{$ddljog}','{$studjog}')";


$dados = mysqli_query($conn,$query);
return $dados; 

}

function visuUsuarioNome ($conn,$nomejog){
    $query = "select * from tbusuario where nomeusu like '%{$nomejog}%' ";
    $resultado = mysqli_query($conn, $query);
    return $resultado;

}

function visuCadastroValor($conn,$valorjog){
    $query = "select * from tbusuario where valorjogo like '%{$valorjog}%";
$resultado = mysqli_query($conn,$query);
return $resultado;
}

function visuCadastroCodigo ($conn,$idjogo){
    $query = "select * from tbusuario where idjogo =
     '%{$idjogo}%' ";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
}
?>