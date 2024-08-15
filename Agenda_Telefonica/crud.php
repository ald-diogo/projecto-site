<?php

require_once 'conexao.php';

$nome = $_POST['nome'];
$telefone =  $_POST['telefone'];
$email = $_POST['email'];
$morada = $_POST['morada'];
$grupo = $_POST['grupo'];
$id = $_GET['id'];
$ids = $_POST['ids'];

if (isset($_POST['INSERIR'])) {
$consulta = "INSERT INTO tb_agenda (nome,telefone,email,morada,grupo) VALUES ('$nome','$telefone','$email','$morada','$grupo')";
$resultado = mysqli_query($conexao,$consulta);
mysqli_close($conexao);
header("location:contacto_inserir.php?msg=Contacto salvo com sucesso!");

}

if (isset($_POST['EDITAR'])) {
    $consulta = "UPDATE tb_agenda SET nome='$nome',telefone='$telefone',email='$email',morada='$morada',grupo='$grupo' WHERE id='$ids' ";
    $resultado = mysqli_query($conexao,$consulta);
    mysqli_close($conexao);
   header("location:contacto_editar.php?msg=Contacto salvo com sucesso!");
    
    }
/*----------------------------------*/

if (isset($_GET['deletar'])) {
    $consulta = "DELETE FROM tb_agenda WHERE id = '$id'";
    $resultado = mysqli_query($conexao,$consulta);
    mysqli_close($conexao);
    header("location:contacto_listar.php");
    
    }

?>