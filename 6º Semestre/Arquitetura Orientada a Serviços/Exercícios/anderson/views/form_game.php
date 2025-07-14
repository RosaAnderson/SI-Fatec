<?php
	require_once "header.php";
?>
	<div class="content">
	  <div class="container">
		<h1>Cadastro de Game</h1>
		<form class="form-control" action="/anderson/inserir_game" method="POST" enctype="multipart/form-data">

		<div class="mb-3">
				<label for="nome" class="form-label">Nome do Game</label>
				<input type="text"  id="nome" name="nome" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
				<div style="color:red"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
			</div>
			<br><br>
			
			<div class="mb-3">
				<label for="console" class="form-label">Console</label>
				<select name="console" id="console">
					<option value="0">Escolha um o console</option>
					<?php
				foreach($ret as $dado)
				{
					if(isset($_POST["console"]) && $_POST["console"] == $dado -> idConsole)
					{
						echo "<option value='{$dado -> idConsole}' selected>{$dado -> descritivo}</option>";
					}
					else
					{
						echo "<option value='{$dado -> idConsole}'>{$dado -> descritivo}</option>";
					}
				}
						
					?>
				</select>
				<div style="color:red"><?php echo $msg[2] != ""?$msg[2]:'';?></div>
			</div>
			
			<br><br>
			<input class="btn btn-primary" type="submit" value="Cadastrar">
		</form>
	  </div>
	</div>

<?php
	require_once "footer.html";
?>