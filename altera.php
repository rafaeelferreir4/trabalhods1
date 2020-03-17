<?php 
$conexao = mysqli_connect("localhost","root","root","rafael") or print (mysqli_error());

$query = "UPDATE `medicamento` SET
`nome` = '". $_GET["nome"] ."', `fabricante` = '". $_GET["fabricante"] ."', `controlado` = '". $_GET["controlado"] ."', `quantidade` = '". $_GET["quantidade"] ."', `preco` = '". $_GET["preco"] ."' WHERE `medicamento`.`cod` = '". $_GET["cod"] ."';";

$result = mysqli_query($conexao,$query);
echo $query;
if ($result) {
    echo 'funcionou';
} else {
    echo 'nao';
}
mysqli_close($conexao);
header('Location: crud.php');
?>