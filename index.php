
<?php 
    session_start();
    require_once "clases/conexion.php";
require "scripts.php";
    $obj= new conectar();
    $conexion=$obj->conexion();
    $user_check=$_SESSION['login_user'];
    $ses_sql=mysqli_query($conexion, "select tipoUsuario from usuario where nombre='$user_check'");
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session =$row['tipoUsuario'];
    if(!isset($login_session)){
        header('Location: login.php'); 
    }
        
    
?>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>


    <?php include "Modales.php"; ?>
</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span>
                <i class="fa fa-code-fork"></i>
            </span>
        </button>

        <button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
            <span>
                <i class="fa fa-align-justify"></i>
            </span>
        </button>

        <a class="navbar-brand logo" href="#">
            <img src="lib/img/logo.png" alt="econosolar">
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="sidebar-toggle btn btn-flat" id="toggle-sidebar-desktop">
                <span>
                    <i class="fa fa-align-justify"></i>
                </span>
            </button>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-has-after" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="" alt="" class="user-img"> <?php echo $user_check ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-comment"></i> <span>Mensajes</span></a>
                        <a class="dropdown-item" onclick="CerrarSesion()" href="#">
                            <i class="fa fa-sign-out"></i> <span>Cerrar sesion</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- TMenu .............................................................................................................. -->

    <div class="page-container">
        <div class="page-content">
            <!-- Barra lateral -->

            <div id="sidebar-main" class="sidebar sidebar-default">
                <div class="sidebar-content">
                    <ul class="navigation">
                        <li class="navigation-header">
                            <span>Menu</span>
                            <i class="icon-menu"></i>
                        </li>

                        <li>
                            <a id="idbtnCargarPagina"><i class="fa fa-home"></i> <span>Inicio</span></a>
                        </li>

                        <li class="navigation-header">
                            <span>Opciones</span>
                            <i class="icon-menu"></i>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-stop" id="escondesprod"></i> <span>Provedores</span></a>
                            <ul>
                                <li><a href="" data-toggle="modal" data-target="#addprovedor"><i class="fa fa-plus"></i> Agregar</a></li>
                                <li><a onclick="MostrarProvedores(1)"><i class="fa fa-plus"></i>Mostrar Provedores</a></li>
                                <li><a data-toggle="modal" data-target="#modaleMostrarProvedor"><i class="fa fa-plus"></i>Mostrar Provedor</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-stop" id="escondesprod"></i> <span>Productos</span></a>
                            <ul>
                                <li><a href="" data-toggle="modal" id="AgregarProdSelect" data-target="#addprod"><i class="fa fa-plus"></i> Agregar</a></li>
                                <li><a id="ConsultarP" href="" data-toggle="modal"><i class="fa fa-trash"></i>Mostrar productos</a></li>
                            </ul>
                        </li>
                        <li id="ocultaalmacenClientes">
                            <a href="#"><span>Clientes</span></a>
                            <ul>
                                <li><a id="ConsultarC">Clientes</a></li>
                                <li><a id="ConsultarS">Servicios</a></li>
                                <li><a id="idcargarpagos"><i class="fa fa-plus"></i>Pagos</a></li>
                            </ul>
                        </li>

                        <li class="navigation-header" id="ocultaalmacen">
                            <span>Paginas</span>
                            <i class="icon-menu"></i>
                        </li>

                        <li id="ocultaalmacenUsuario">
                            <a href="#"><i class="fa fa-file-o"></i> <span>Usuarios</span></a>
                            <ul>
                                <li><a id="eliminarU" href="" data-toggle="modal" data-target="#modaleliminarUsuario">Eliminar</a></li>
                                <li><a id="registrarU" href="" data-toggle="modal" data-target="#modalregistrarUsuario">Registrar</a></li>
                                <li><a id="consultarU" href="" data-toggle="modal"> Consultar Usuarios </a></li>
                                <li><a href="" id="" data-toggle="modal" data-target="#modalconsularUsuarioI">Consultar Usuario</a></li>
                            </ul>
                        </li>
                       <li id="OcultaAgente">
                            <a href="#"><i class="fa fa-file-o"></i> <span>Estadisticas Mensuales</span></a>
                            <ul>
                                <li><a id="Estadisticas">Estadisticas</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <!-- TBarralateral............................................................................................. -->

            <!-- Contenido pagina central -->
            <div class="content-wrapper">
                <div class="content" id="idCargarPagina">

                </div>
            </div>
            <!-- /TContenido pagina central ................................................................................. -->
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        $("#idcargarpagos").click(function() {
            $('#idCargarPagina').load('Pagos.php');
        });
    });

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#idCargarPagina').load('inicio.php');
    });

</script>



<script type="text/javascript">
    $(document).ready(function() {
        $("#idbtnCargarPagina").click(function() {
            $('#idCargarPagina').load('inicio.php');
        });
    });

</script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#consultarU").click(function() {
            $('#idCargarPagina').load('php/Usuarios/MostrarUsuarios.php');
        });
    });

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#ConsultarP").click(function() {
            $('#idCargarPagina').load('php/Productos/MostrarProuctos.php');
        });
    });

</script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#Estadisticas").click(function() {
            $('#idCargarPagina').load('php/Estadisticas/Estadisticas.php');
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#ConsultarC").click(function() {
            $('#idCargarPagina').load('php/Clientes/Clientes.php');
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#ConsultarS").click(function() {
            $('#idCargarPagina').load('php/Servicios/Servicios.php');
        });
    });
</script>







<?php 
    if($login_session=='Agente de ventas'){
            echo "<script>";
            echo "IniciaAgente();";
            echo "</script>";
        }elseif($login_session=='Almacenista'){
            echo "<script>";
            echo "IniciaAlmacen();";
            echo "</script>";
        }
?>