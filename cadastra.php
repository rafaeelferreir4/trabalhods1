<?php 
$conexao = mysqli_connect("localhost","root","root","rafael") or print (mysqli_error());

$query = "INSERT INTO medicamento (cod ,nome, fabricante, controlado, quantidade, preco)
VALUES (null,'".$_GET["nome"]."','".$_GET["fabricante"]."','".$_GET["controlado"]."','".$_GET["quantidade"]."','".$_GET["preco"]."');";

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