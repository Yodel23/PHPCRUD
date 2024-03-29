<?php

include "../../conexion.php";
include "header.php";

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
        <div class="card shadow">
                <div class="card-header display-6">
                    Actualizar usuarios
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-10">
                    <div class="card shadow">
                        <div class="card-header">
                            Usuarios
                        </div>

                        <?php
                        mysqli_select_db($conexion, "bibliotecaphp");
                        $consultar = "SELECT * FROM usuarios";
                        $registros = mysqli_query($conexion, $consultar);
                        ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Identificador</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Correo electrónico</th>
                                        <th scope="col">DNI</th>
                                        <th scope="col">Edad</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($registro = mysqli_fetch_row($registros)) {
                                    ?>
                                        <tr class="align">
                                            <td scope="row"><?php echo $registro[0]; ?></td>
                                            <td><?php echo $registro[1]; ?></td>
                                            <td><?php echo $registro[2]; ?></td>
                                            <td><?php echo $registro[4]; ?></td>
                                            <td><?php echo $registro[5]; ?></td>
                                            <td><?php echo $registro[6]; ?></td>
                                            <td><?php echo $registro[7]; ?></td>
                                            <td><a href="actualizarUsuario2.php? id= <?php echo $registro[0]; ?>"> <i class="bi-pencil px-1" style="font-size: 2em;color:green;"></i></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <button type="button" onclick="window.location.href='menuGestionUser.php'" class="btn btn-secondary mt-3">
                            Volver atrás
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php

include "footer.php";

?>