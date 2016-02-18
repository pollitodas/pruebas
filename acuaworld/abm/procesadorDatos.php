<?php

include "conex.inc";

$tipoDeProceso = $_GET['proceso'];

if ($tipoDeProceso == 'agregar') {
	
	$dir_subida = 'images/';
	$fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);

	
	if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
	    
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$descripcion = $_POST['desc'];

		if ($nombre == '') {
			header("Location: pages/agregar.php?msg=Todos los campos son obligatorios!");
		}else{
			if ($precio == '') {
				header("Location: pages/agregar.php?msg=Todos los campos son obligatorios!");
			}else{
				if ($descripcion == '') {
					header("Location: pages/agregar.php?msg=Todos los campos son obligatorios!");
				}else{
					$query = "INSERT INTO `acuadb`.`product` (`desc`, `price_unit`, `price_old`, `name`,`image`) VALUES ('".$descripcion."', '".$precio."', '0', '".$nombre."','".$_FILES['imagen']['name']."')";
					echo $query;
					$result_productos = mysqli_query($conex,$query);

					header("Location: pages/agregar.php?msg=Prodcuto guardado con exito!");
				}
			}
			
		}	


	} else {
	     header("Location: pages/agregar.php?msg=error al tratar de subir la imagen");
	}
}
if ($tipoDeProceso == 'borrar') {
	echo $_GET['id'];
}
if ($tipoDeProceso == 'modificar') {
	
	$dir_subida = 'images/';
	$fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
	$id_prod = $_POST['id'];
	
	if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
	    
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$descripcion = $_POST['desc'];

		if ($nombre == '') {
			header("Location: pages/modificar.php?msg=Todos los campos son obligatorios!&id=".$id_prod);
		}else{
			if ($precio == '') {
				header("Location: pages/modificar.php?msg=Todos los campos son obligatorios!&id=".$id_prod);
			}else{
				if ($descripcion == '') {
					header("Location: pages/modificar.php?msg=Todos los campos son obligatorios!&id=".$id_prod);
				}else{
					$query = "UPDATE `acuadb`.`product` set `desc`='".$descripcion."', `price_unit`='".$precio."',  `price_old`='0', `name`= '".$nombre."',`image`='".$_FILES['imagen']['name']."' where id_prod =".$id_prod;
					echo $query;
					$result_productos = mysqli_query($conex,$query);

					header("Location: pages/listado.php?msg=Prodcuto guardado con exito!");
				}
			}
			
		}	


	} else {
	     

		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$descripcion = $_POST['desc'];

		if ($nombre == '') {
			header("Location: pages/modificar.php?msg=Todos los campos son obligatorios!&id=".$id_prod);
		}else{
			if ($precio == '') {
				header("Location: pages/modificar.php?msg=Todos los campos son obligatorios!&id=".$id_prod);
			}else{
				if ($descripcion == '') {
					header("Location: pages/modificar.php?msg=Todos los campos son obligatorios!&id=".$id_prod);
				}else{
					$query = "UPDATE `acuadb`.`product` set `desc`='".$descripcion."', `price_unit`='".$precio."',  `price_old`='0', `name`= '".$nombre."' where id_prod =".$id_prod;
					echo $query;
					$result_productos = mysqli_query($conex,$query);

					header("Location: pages/listado.php?msg=Prodcuto guardado con exito!");
				}
			}
			
		}
    
	}


}

?>