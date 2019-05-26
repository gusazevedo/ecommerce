<?php include("header.php") ?>

<?php if(isset($_GET["login"]) && $_GET["login"] == true) { ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <strong>Sucesso! </strong>Logado com sucesso
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php } ?>

<?php if(isset($_GET["login"]) && $_GET["login"] == false) { ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Erro! </strong>Error no login
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php } ?>


<h1>Bem vindo!</h1>
<hr>

<form class="form" action="login.php" method="post">
	<div class="col-md-4 mx-auto">
		<div class="card">
			<div class="card-header">
    			Login
  			</div>
  			<div class="p-4">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="youremail@mail.com">
				<br>
				<label for="senha">Senha</label>
				<input type="password" class="form-control" id="senha" name="senha" placeholder="password">
				<br>
				<button class="btn btn-primary btn-block">Logar</button>
			</div>
		</div>
	</div>
</form>

<?php include("footer.php")?>
