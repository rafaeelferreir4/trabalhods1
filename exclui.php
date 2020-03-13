<?php
$conexao = mysqli_connect("localhost","root","","rafael") or print (mysqli_error());

$query = "DELETE FROM medicamento WHERE cod =".$_GET['cod'];

$result = mysqli_query($conexao,$query);

echo $result;
mysqli_close($conexao);
header('Location: crud.php');
?>