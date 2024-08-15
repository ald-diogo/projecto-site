<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<script src="js/bootstrap.bundle.min.js" defer></script>
<section id="menu_crud">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Grupo</th>
      <th scope="col">Email</th>
      <th scope="col">Morada</th>
      <th scope="col">Deletar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
<?php
        require_once 'conexao.php';
        $consulta = "SELECT * FROM tb_agenda";
        $resultado = mysqli_query($conexao,$consulta);
        while ($dados = mysqli_fetch_assoc($resultado)) {
?>        
<tr>
     <td><?php  echo $dados['id']; ?></td>
     <td><?php  echo $dados['nome']; ?></td>
     <td><?php  echo $dados['telefone']; ?></td>  
     <td><?php  echo $dados['grupo']; ?></td>  
     <td><?php  echo $dados['email']; ?></td>
     <td><?php  echo $dados['morada']; ?></td>  
     <td><a class="btn-sm btn-danger"  href="crud.php?id=<?php  echo $dados['id']; ?>&deletar">Deletar</a></td> 
     <td><a class="btn-sm btn-primary" href="contacto_editar.php?id=<?php  echo $dados['id']; ?>&nome=<?php  echo $dados['nome']; ?>&telefone=<?php  echo $dados['telefone']; ?>&email=<?php  echo $dados['email']; ?>&grupo=<?php  echo $dados['grupo']; ?>&morada=<?php  echo $dados['morada']; ?>">Editar</a></td> 
</tr>
<?php } ?>
  </tbody>
</table>
</section>