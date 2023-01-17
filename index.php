<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Productos</h1>
    </header>
	<div class="contenedor">
		
		<form action="insert.php" method="post">
			<label for="nombre">Nombre del producto</label>
			<input type="text" name="nombre" id="nombre" placeholder="Nombre del producto">

			<label for="descripcion">Descripcion del producto</label>
			<input type="text" name="descripcion" id="descripcion" placeholder="Descripcion">

			<label for="precio">Precio</label>
			<input type="text" name="precio" id="precio" placeholder="Precio">
	
			<label for="cantidad">Cantidad</label>
			<input type="text" name="cantidad" id="cantidad" placeholder="Cantidad">

			<input type="submit" name="btn-enviar" value="Guardar">
		</form>
    </div>
</body>
</html>
