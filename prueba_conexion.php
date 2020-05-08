<?php

$conexion = mysqli_connect("localhost","root","","central_uniformes");

?>

<!DOCTYPE html>
<html>
<head>
<title>Central Uniformes</title>
</head>
<body>
<br>
    <table border="1">
        <tr>
            <td>Referencia</td>
            <td>Nombre</td>
            <td>Talla</td>
            <td>Color</td>
            <td>Detalles</td>
            <td>Precio</td>
        </tr>

        <?php 
		$sql="SELECT * from productos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

        <tr>
            <td><?php echo $mostrar['Referencia'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['ID_Talla'] ?></td>
			<td><?php echo $mostrar['ID_Color'] ?></td>
			<td><?php echo $mostrar['ID_Detalle'] ?></td>
            <td><?php echo $mostrar['PVP'] ?></td>
        </tr>
        <?php 
	    }
	    ?>

    </table>
</body>
</html>