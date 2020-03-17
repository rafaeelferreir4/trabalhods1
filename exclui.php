<?php
$conexao = mysqli_connect("localhost","root","root","rafael") or print (mysqli_error());

$query = "DELETE FROM medicamento WHERE cod =".$_GET['cod'];

$result = mysqli_query($conexao,$query);

print_r ($result);
mysqli_close($conexao);
header('Location: crud.php');
?>