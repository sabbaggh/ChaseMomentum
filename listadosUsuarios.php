<?php 
require_once("database.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);	
//$conn->close();		
?>
<html>
<head>
	<link href="estilos/admin_estilos.css" rel="stylesheet" type="text/css" />
	<title>Listados</title>
</head>
<body style="margin:50px 50px;" >
	<table class="tbl-qa">	
		<thead>
			 <tr>
				<th class="table-header" width="calc(100%/4)">ID </th>
				<th class="table-header" width="calc(100%/4)"> Nombre </th>
				<th class="table-header" width="calc(100%/4)"> Correo </th>
                <th class="table-header" width="calc(100%/4)"> Nombre de usuario </th>
			  </tr>
		</thead>
		<tbody>		
			<?php
				if ($result->num_rows > 0) {		
					while($row = $result->fetch_assoc()) {
			?>
			<tr class="table-row" id="row-<?php echo $row["id"]; ?>"> 
				<td class="table-row"><?php echo $row["id"]; ?></td>
				<td class="table-row"><?php echo $row["nombre"]; ?></td>
				<td class="table-row"><?php echo $row["correo"]; ?></td>
                <td class="table-row"><?php echo $row["usuario"]; ?></td>
			<?php
					}
				}
			?>
		</tbody>
	</table>
    <br><br>
    <a href="adminUsuarios.php" style="text-decoration:none; color: #FFF;">
        <div style="width:100px; text-align:center; background-color: #6ab5b9; padding: 8px 5px;">
            Volver
        </div>
    </a>
</body>
</html>