<?php 
$inc = incluir("con_db.php");
si ($inc) {
	$consulta = "SELECT * FROM registro";
	$resultado = mysqli_query($conex,$consulta);
	si ($resultado) {
		mientras que ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
	    $email = $row['correo electrónico'];
	    $fechareg = $row['fecha_reg'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php $id ?><br>
        		    <b>Email: </b> <?php $email ?><br>
        		    <b>Fecha Registro: </b> <?php $fechareg ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>