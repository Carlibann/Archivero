<?php
	//Sr desclara variable para establecer conexion con la DB
$server='localhost';
$username='root';
$pass='';
$dbname='webcrackor';

	//conexion en la base de datos
$conexion=mysqli_connect("$server","$username","$pass","$dbname");
if($conexion){
    echo "<script>alert('Conexion exitosa');</script>";
}else{
  echo "<script>alert('Conexion fallida');</script>";
}

#CONSULTA PARA VER DATOS GUARDADOS EN LA TABLA PRODUCTO
$sql="SELECT * FROM producto";
$resultado=mysqli_query($conexion,$sql);//PARA VER ESTADO DE CONEXION

//declaramos arreglo para guardar codigos
$arrayCodigos=array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="barra/JsBarcode.all.min.js"></script>
	<link rel="stylesheet" href="barra/stilo.css">
	<title>Crear | CDbar</title>

</head>
<body>

<form action="barra/generabar.php" method="post">

	<label for="">Producto</label>
	<input type="text" name="producto" id="" requiured>
	<button type="submit" name="generar">GENERAR</button>

</form>
<br>

<table class="table">
	
	<thead class="thead">
		<tr>
			<td>PRODUCTO</td>
			<td>CODIGO</td>
		</tr>
	</thead>
		<tbody>
		<?php
		while($row=mysqli_fetch_row($resultado)):
			$arrayCodigos[]=(string)$row[4]; 
	?>
			<tr>
				<td><?php echo $row[1];?></td>
				<td><svg id='<?php echo "barcode".$row[4]; ?>'></svg>
				</td>
			</tr>
		</tbody>
		<?php endwhile ?>
	
</table>


</body>
</html>
<script type="text/javascript">
	function arrayjsonbarcode(j){
			json=JSON.parse(j);
			arr=[];
			for (var x in json) {
				arr.push(json[x]);
			}
			return arr;
		}

		jsonvalor='<?php echo json_encode($arrayCodigos) ?>';
		valores=arrayjsonbarcode(jsonvalor);

		for (var i = 0; i < valores.length; i++) {

			JsBarcode("#barcode" + valores[i], valores[i].toString(), {
				format: "codabar",
				lineColor: "#000",
				width: 2,
				height: 40,
				displayValue: true
			});
		}

</script>