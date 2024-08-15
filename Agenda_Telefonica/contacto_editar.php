<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">
<script src="js/bootstrap.bundle.min.js" defer></script>
<section id="menu_crud">
<form method="post" action="crud.php">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="Nome">Nome</label>
      <input type="text" name ="ids" value="<?php if(isset($_GET['id'])){ echo $_GET['id']; } ?>" hidden>
      <input type="text" value="<?php if(isset($_GET['nome'])){ echo $_GET['nome']; } ?>" name="nome" class="form-control" id="Nome">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="Telefone">Telefone</label>
      <input type="number" value="<?php if(isset($_GET['telefone'])){ echo $_GET['telefone']; } ?>" name="telefone" class="form-control" id="Telefone">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="Email">Email</label>
      <input type="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email']; } ?>" name="email" class="form-control" id="Email">
    </div>
  </div>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputState">Morada</label>
      <select id="inputState" name="morada" class="form-control">
        <option   value="<?php if(isset($_GET['morada'])){ echo $_GET['morada']; } ?>" selected><?php if(isset($_GET['morada'])){ echo $_GET['morada']; } ?></option>
        <option value="Katepa" >Katepa</option>
        <option  value="Ritondo" >Ritondo</option>
        <option value="Maxinde" >Maxinde</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Grupo</label>
      <select id="inputState" name="grupo" class="form-control">
      <option   value="<?php if(isset($_GET['grupo'])){ echo $_GET['grupo']; } ?>" selected><?php if(isset($_GET['grupo'])){ echo $_GET['grupo']; } ?></option>
        <option  value="Família" >Família</option>
        <option value="Colega">Colega</option>
        <option value="Colega"> Trabalho</option>
      </select>
    </div>
</div>  
  <a href="#" class="btn btn-danger">Regressar</a>
  <input type="submit" class="btn btn-primary" name="EDITAR" value="Salvar contacto">
</form>
</section>