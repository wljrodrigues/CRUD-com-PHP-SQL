<?php
	include "header.php";
	
 ?>
 
 <div id=main-content'>
	<h2>Atualizando dados</h2>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<?php
			include "connection.php";
			
			$stu_id=$_GET["id"];
			
			$sql="SELECT * FROM student WHERE sid={$stu_id}";
			$result = mysqli_query($conn, $sql) or die("query unsuccessful.");
			
			if(mysqli_num_rows($result) >0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<form class="post-form" action="updatedata.php" method="post">
						<div class="form-group">
							<label>Nome	</label>
							<input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
							<input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
						</div>
						
						<div class="form-group">
							<label>Endereço</label>
				            <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
						</div>
						
						<div class="form-group">
							<label>Classe</label>
							<input type="text" name="sclass" value="<?php echo $row['sclass']; ?>"/>
						</div>
						
						<div class="form-group">
								<label>Telefone</label>
								<input type="text" name="sphone" value="<?php echo $row['sphone']; ?>"/>
						
							</div>		
						<button class="btn btn-dark" name="submit" value="Atualizar">ATUALIZAR</button>
						
						</form>
				    
					<?php
				}
			}
	?>
 </div>
	