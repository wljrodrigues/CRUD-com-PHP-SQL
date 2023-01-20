<?php 
	include "header.php";
?>
<div id="main-content">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<h2>Adicionar dados</h2>
	
	<form class="post-form" action="savedata.php" method="post">
	
	<div class="form-group">
<label>Nome</label>
<input type="text" name="sname" required/>
	</div>
<br>
	
	<div class="form-group">
		<label>Endereço </label>
		<input type="text" name="saddress" required/>
    </div>
<br>
	
	<div class="form-group">
		<label>Classe </label>
		<input type="text" name="sclass" required/>
	</div>
<br>
	
	<div class="form-group">
		<label>Telefone </label>
		<input type="text" name="sphone" required/>
	</div>
	<br>
		<button class="btn btn-dark" name="submit" value="Salvar">Salvar</button>

	
	</form>
	</div>
	