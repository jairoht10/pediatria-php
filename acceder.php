<?php
    	// METODO ORIENTADO A OBJETO
    $server = "localhost";
    $user = "root";
    $pwd = "123456";
    $dbname = "pediatria_db";
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $cedula=$_POST['cedula'];
    $telefono=$_POST['telefono'];
    $dir=$_POST['dir'];
    $ts=$_POST['ts'];
    $antecedente=$_POST['antecedente'];
        // CREAR CONEXION CON LA BASE DE DATOS
  $conexion = new mysqli($server, $user, $pwd, $dbname);
  // CHEQUEA LA CONEXION
  if($conexion->connect_error)
  {
    die ("Conxion Fallida: " .$conexion->connect_error);
  }
  $sql = "INSERT INTO madre (id_madre, nombre, apellido, cedula, telefono, direccion, tipoSangre, antecedentes) VALUES (NULL,'$nombre', '$apellido', '$cedula', '$telefono', '$dir', '$ts', '$antecedente')";

if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conexion->close();

?>
