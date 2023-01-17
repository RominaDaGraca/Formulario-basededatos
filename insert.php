<?php
	$conn = mysqli_connect("localhost", "root", "", "staff");

	if($conn === false){
		die("ERROR: Could not connect. "
			. mysqli_connect_error());
}

    $id = 'id';
    $nombre = $_REQUEST['nombre'];
	$descripcion = $_REQUEST['descripcion'];
	$precio = $_REQUEST['precio'];
	$cantidad = $_REQUEST['cantidad'];
	
	$sql = "INSERT INTO productos VALUES ('$id','$nombre',
		'$descripcion','$precio','$cantidad')";
		
	if(mysqli_query($conn, $sql)){
		echo "<h1>Productos almacenados.";
		
	} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
	}
		
		mysqli_close($conn);
?>
