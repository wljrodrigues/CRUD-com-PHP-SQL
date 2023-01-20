<?php
include "header.php";
?>

<div id="main-content">	
	<div id="record">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<h2>Lista de registros gravados</h2>
	
	</div>
<hr>
	
	<?php
		include "connection.php";
		
		$sql = "SELECT * FROM student";
		$result = mysqli_query($conn,$sql) or die ("query unsuccessful.");
		
		if(mysqli_num_rows($result) > 0)
		{
		?>
			<table cellpadding="8px">
			<thead id="th">
			<th>Id</th>
			<th>Nome</th>
			<th>Endereço</th>
			<th>Classe</th>
			<th>Telefone</th>
			<th>#</th>
			</thead>
			
			<tbody>
			<?php
				while($row = mysqli_fetch_assoc($result))
				{
					?>
					<tr>
						<td><?php echo $row['sid']; ?></td>
						<td><?php echo $row['sname']; ?></td>
						<td><?php echo $row['saddress']; ?></td>
						<td><?php echo $row['sclass']; ?></td>
						<td><?php echo $row['sphone']; ?></td>
						<td>
						<button type="button" class="btn btn-light">
						<a href="edit.php?id=<?php echo $row['sid']; ?>">Editar</a>
						</button>
				
						<button type="button" class="btn btn-light">
						<a href="delete-inline.php?id=<?php echo $row['sid']; ?>">Apagar</a>
						</button>


						</td>
					</tr>	
			<?php	} ?>
			</tbody>
		  </table>
                   <?php }
			else
			{
				echo "<h2> Não há registros para exibir</h2>";
			}
			mysqli_close($conn);
			?>
</div>
</body>
