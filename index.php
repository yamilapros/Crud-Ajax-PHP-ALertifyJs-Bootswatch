<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/minty/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/alertify/css/alertify.css">
    <link rel="stylesheet" href="librerias/alertify/css/themes/default.css">
</head>
<body>
    <div class="container">
        <h1>Crud con Ajax</h1>
        <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar Nuevo</button>
        </caption>
        <div class="busqueda"></div>
        <div class="tabla"></div>
    </div>

    <!-- Modal para agregar nuevo registro -->
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nueva persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" id="nombre" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" id="apellido" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" id="telefono" class="form-control" placeholder="Teléfono">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarUsuario">
                    Agregar
                </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar registro -->
    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="idActualizar">
                    <div class="form-group">
                        <input type="text" id="nombreActualizar" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" id="apellidoActualizar" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" id="emailActualizar" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" id="telefonoActualizar" class="form-control" placeholder="Teléfono">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizarUsuario">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Alertify -->
    <script src="librerias/alertify/alertify.js"></script>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--Funciones Js-->
    <script src="js/funciones.js"></script>
    <!--Cargar tabla-->
    <script>
        $(document).ready(function(){
            $('.tabla').load('componentes/tabla.php')
            $('.busqueda').load('componentes/buscador.php')
        })
    </script>
    <!--Funciones-->
    <script>
        $(document).ready(function(){
            //Crear dato nuevo
            $('#guardarUsuario').click(function(){
                var nombre = $('#nombre').val()
                var apellido = $('#apellido').val()
                var email = $('#email').val()
                var telefono = $('#telefono').val()
                guardarUsuario(nombre, apellido, email, telefono)
            })
            //Actualizar dato
            $('#actualizarUsuario').click(function(){
                actualizarUsuario();
            })
            
        })
    </script>
</body>
</html>