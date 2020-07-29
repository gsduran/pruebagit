<?php

$conexion=mysqli_connect('localhost','root','','prueba');

$sql="SELECT * FROM `persona`";
$result = mysqli_query($conexion,$sql);



echo "<table id='tabla1'>

";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['apellido'] . "</td>";
  echo "</tr>";
}
echo "</table>";

?>
</body>
</html>