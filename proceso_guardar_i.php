<?php
	include("conexion.php");

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$altura = $_POST['altura'];
	$tipo = $_POST['tipo'];
	$genero = $_POST['genero'];
	$peso = $_POST['peso'];
	$edad = $_POST['edad'];
	$poder1 = $_POST['poder1'];
	$poder2 = $_POST['poder2'];
	$poder3 = $_POST['poder3'];
	$poder4 = $_POST['poder4'];
	$poder5 = $_POST['poder5'];
	$input1 = addslashes(file_get_contents($_FILES['input1']['tmp_name']));
	$input2 = addslashes(file_get_contents($_FILES['input2']['tmp_name']));
	$input3 = addslashes(file_get_contents($_FILES['input3']['tmp_name']));
	$input4 = addslashes(file_get_contents($_FILES['input4']['tmp_name']));
	$input5 = addslashes(file_get_contents($_FILES['input5']['tmp_name']));


	$query = "INSERT INTO personajesi(id,nombre,imagen,altura,tipo,genero,peso,edad,poder1,poder2,poder3,poder4,poder5,input1,input2,input3,input4,input5) VALUES ('$id','$nombre' ,'$imagen','$altura','$tipo','$genero','$peso','$edad','$poder1','$poder2','$poder3','$poder4','$poder5','$input1','$input2','$input3','$input4','$input5')";
	$resultado = $conexion->query($query);

	if($resultado){
		header("location: mostrar.php");
	}
		else
		{

			echo "No se insertó";			
		}
	
?>