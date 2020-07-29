<?php
   $conexion=mysqli_connect('localhost','root','','prueba');

   $filas = json_decode($_POST['valores'], true);

    $stmt = $conexion->prepare("INSERT INTO copiapersona (
        nombre,
        apellido
    ) VALUES (
        ?,
        ?
    )");

   $stmt->bind_param('ss',$nombre, $apellido);

   $inserciones = 0;
    foreach ($filas as $fila) {
        $nombre      = $fila['nombre'];
        $apellido   = $fila['apellido'];
        $result = $stmt->execute();
        if($result) {
            $inserciones++;
        }
    }

echo "Se insertaron $inserciones registros";


?>