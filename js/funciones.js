//Funcion para crear usuario
function guardarUsuario(nombre, apellido, email, telefono){
    var usuario = {
        nombre : nombre,
        apellido : apellido,
        email : email,
        telefono : telefono
    }
    
    $.ajax({
        type : 'POST',
        url : 'php/guardarUsuario.php',
        data : usuario,
        success : function(response){
            if(response == 1){
                $('.tabla').load('componentes/tabla.php')
                alertify.success("Agregado correctamente :)")
            }else{
                alertify.success("Falló el servidor :(")
            }
        }
    })
}

//Funcion para que cuando se de click en editar, agregue los datos al formulario
function agregarDatos(datos){
    //Me traigo esa cadena y la convierto en Arrya con el método split
    data = datos.split('||');
    console.log(data);
    //Guardo cada uno de los datos en los campos de formulario para actualizar
    $('#idActualizar').val(data[0])
    $('#nombreActualizar').val(data[1])
    $('#apellidoActualizar').val(data[2])
    $('#emailActualizar').val(data[3])
    $('#telefonoActualizar').val(data[4])
}

//Funcion para actualizar usuario
function actualizarUsuario(){
    //Voy a traer los datos que tengo ya
    id = $('#idActualizar').val()
    nombre = $('#nombreActualizar').val()
    apellido = $('#apellidoActualizar').val()
    email = $('#emailActualizar').val()
    telefono = $('#telefonoActualizar').val()
    //Voy a hacer un objeto, podria hacer una cadena tambien
    var usuario1 = {
        id : id,
        nombre : nombre,
        apellido : apellido,
        email : email,
        telefono : telefono
    }
    console.log(usuario1)
    //Ahora hago el ajax
    $.ajax({
        type : 'POST',
        url : 'php/actualizarUsuario.php',
        data : usuario1,
        success : function(response){
            if(response == 1){
                $('.tabla').load('componentes/tabla.php')
                alertify.success("El usuario se ha actualizado con éxito :)")
            }else{
                alertify.error("Error en la base de datos :(");
            }
            
        }
    })
}

//Funcion para alerta de confirmacion de eliminar
function preguntarSiNo(id){
    alertify.confirm('Eliminar Usuario', '¿Está seguro que desea eliminar el registro?',
                 function(){ eliminarUsuario(id) }
                , function(){ alertify.error('Se canceló')});
}

//Funcion para eliminar el registro
function eliminarUsuario(id){
    var id = {
        id : id
    }

    $.ajax({
        type : 'POST',
        url : 'php/eliminarUsuario.php',
        data : id,
        success : function(response){
            if(response == 1){
                $('.tabla').load('componentes/tabla.php')
                alertify.success("Eliminado con éxito :)")
            }else{
                alertify.error("Hay un error en la bbdd :(")
            }
        }
    })
}