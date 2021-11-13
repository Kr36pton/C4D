<!DOCTYPE html>
<html>
<head>
	<title>Insertar</title>
</head>
<body>
	<center>
	<form action="proceso_guardar_i.php" method="POST" enctype="multipart/form-data"></br></br></br>
			<input type="text" REQUIRED name="id" placeholder="id" value=""/></br></br>
			<input type="text" REQUIRED name="nombre" placeholder="Nombre.." value=""/></br></br>
			<input type="file" REQUIRED name="imagen"/></br></br>
			<input type="text" REQUIRED name="altura" placeholder="altura" value=""/></br></br>
			<input type="text" REQUIRED name="tipo" placeholder="tipo" value=""/></br></br>
			<input type="text" REQUIRED name="genero" placeholder="genero" value=""/></br></br>
			<input type="text" REQUIRED name="peso" placeholder="peso" value=""/></br></br>
			<input type="text" REQUIRED name="edad" placeholder="edad" value=""/></br></br>
			<input type="text" REQUIRED name="poder1" placeholder="poder 1" value=""/></br></br>
			<input type="text" REQUIRED name="poder2" placeholder="poder 2" value=""/></br></br>
			<input type="text" REQUIRED name="poder3" placeholder="poder 3" value=""/></br></br>
			<input type="text" REQUIRED name="poder4" placeholder="poder 4" value=""/></br></br>
			<input type="text" REQUIRED name="poder5" placeholder="poder 5" value=""/></br></br>
			<input type="file" REQUIRED name="input1"/></br></br>
			<input type="file" REQUIRED name="input2"/></br></br>
			<input type="file" REQUIRED name="input3"/></br></br>
			<input type="file" REQUIRED name="input4"/></br></br>
			<input type="file" REQUIRED name="input5"/></br></br>
		<input type="submit" value="Aceptar"/>
		<a href="mostrar.php">Mostrar tabla</a>
		</form>
	</center>
</body>
</html>