<!DOCTYPE html>
<html>
<head>
	<title>Mostrar imagenes</title>
</head>
<body>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th colspan="5"><a href="index.php">Nuevo</th>
				</tr>
				<tr>
			
					<th>Id</th>
					<th>Nombre</th>
					<th>Imagen</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include("conexion.php");
					$query = "SELECT * FROM personajes";
					$resultado = $conexion->query($query);
					while ($row = $resultado->fetch_assoc()) {
				?>		
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['nombre'];?></td>
						<td><img height="44px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
						<th><a href="characters.php?id=<?php echo $row['id'];?>">Ver más</th>
					</tr>
				<?php
					}
				?>

				
			</tbody>
		</table>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th colspan="5"><a href="index.php">Nuevo</th>
				</tr>
				<tr>
			
					<th>Id</th>
					<th>Nombre</th>
					<th>Imagen</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include("conexion.php");
					$query = "SELECT * FROM personajessf";
					$resultado = $conexion->query($query);
					while ($row = $resultado->fetch_assoc()) {
				?>		
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['nombre'];?></td>
						<td><img height="44px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
						<th><a href="characters.php?id=<?php echo $row['id'];?>">Ver más</th>
					</tr>
				<?php
					}
				?>

				
			</tbody>
		</table>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th colspan="5"><a href="index.php">Nuevo</th>
				</tr>
				<tr>
			
					<th>Id</th>
					<th>Nombre</th>
					<th>Imagen</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include("conexion.php");
					$query = "SELECT * FROM personajesmk";
					$resultado = $conexion->query($query);
					while ($row = $resultado->fetch_assoc()) {
				?>		
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['nombre'];?></td>
						<td><img height="44px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
						<th><a href="characters.php?id=<?php echo $row['id'];?>">Ver más</th>
					</tr>
				<?php
					}
				?>

				
			</tbody>
		</table>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th colspan="5"><a href="index.php">Nuevo</th>
				</tr>
				<tr>
			
					<th>Id</th>
					<th>Nombre</th>
					<th>Imagen</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include("conexion.php");
					$query = "SELECT * FROM personajeskof";
					$resultado = $conexion->query($query);
					while ($row = $resultado->fetch_assoc()) {
				?>		
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['nombre'];?></td>
						<td><img height="44px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
						<th><a href="characters.php?id=<?php echo $row['id'];?>">Ver más</th>
					</tr>
				<?php
					}
				?>

				
			</tbody>
		</table>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th colspan="5"><a href="index.php">Nuevo</th>
				</tr>
				<tr>
			
					<th>Id</th>
					<th>Nombre</th>
					<th>Imagen</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include("conexion.php");
					$query = "SELECT * FROM personajesi";
					$resultado = $conexion->query($query);
					while ($row = $resultado->fetch_assoc()) {
				?>		
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['nombre'];?></td>
						<td><img height="44px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
						<th><a href="characters.php?id=<?php echo $row['id'];?>">Ver más</th>
					</tr>
				<?php
					}
				?>

				
			</tbody>
		</table>
	</center>
</body>
</html>