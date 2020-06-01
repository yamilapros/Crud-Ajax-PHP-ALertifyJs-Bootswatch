<?php
require_once "../php/conexion.php";
$conexion = conexion();
?>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">teléfono</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM usuarios";
                $result = mysqli_query($conexion, $sql);
                while($row = mysqli_fetch_row($result)){
                    $datos = $row[0]."||".$row[1]."||".$row[2]."||".$row[3]."||".$row[4];
                ?>
                <tr>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                    <td><button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion" onclick="agregarDatos('<?php echo $datos ?>')">Editar</button></td>
                    <td><button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $row[0] ?>')">Borrar</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>