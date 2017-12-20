<?php
$mysqli = new mysqli("localhost", "root", "123456", "pediatria");
$sql = 'SELECT * FROM padre ORDER BY id DESC';
foreach ($mysqli->query($sql) as $row)
{
  echo "<tr>";
  echo "<td>".$row['nombre']."</td>";
  echo "<td>".$row['apellido']."</td>";
  echo "<td>".$row['cedula']."</td>";
  echo "<td>";
  echo '<a class="btn btn-success" href="actualizar.php?id='.$row['id'].'">Actualizar</a>';
  echo '&nbsp;';
  echo '<a class="btn btn-danger" href="eliminar.php?id='.$row['id'].'">Eliminar</a>';
  echo '</td>';
  echo '</tr>';
}
$mysqli->close();


 ?>
