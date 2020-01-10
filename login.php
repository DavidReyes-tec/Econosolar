<?php  

include "scripts.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>

<body class="body-login">
    <div class="container cuerpo-form">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <img src="img/Econosolar.webp" alt="" class="logo center-block">
            </div>
        </div>

        <div class="espacio">
        </div>

        <div class="row">

            <fieldset class="col-md-10 offset-md-1">

                <legend class="hidden-xs center-block">
                    <h3>Inicion de ses&iacute;on</h3>
                </legend>


            </fieldset>
        </div>

        <div class="row contenido">

            <div class="col-md-10 offset-md-1">
                <form id="formularioLogin">
                   
                    <div class="form-group">
                        <label class="col-md-12" for="user">Usuario</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="text" style="color:#000000;" class="form-control Input" name="user" id="user" placeholder="nombre de usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="contrasena">Contraseña</label>
                        <div class="col-md-10 offset-md-1">
                            <input type="password" style="color:#000000;" class="form-control Input" name="pass" id="pass" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="button" onclick="IniciarSesion()" class="btn btn-success col-md-4 offset-md-4">Ingresar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

<style type="text/css">
    .body-login {
        background-image: url('img/banner_logo.jpg');
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .cuerpo-form {
        width: 30%;
        margin-top: 60px;
        transition: 2s;
        box-shadow: 0px 0px 40px green, 0px 0px 80px purple;
        border-radius: 20px;

    }

    .logo {
        height: 75px;
        margin-top: 40px;
        border-radius: 20px;

    }

    .espacio {
        margin-top: 40px;
    }

    h3,
    h4 {
        font-size: 0.7em;
        text-align: center;
        color: black;
    }

    label {
        font-size: 1.2em;
        color: black;
        text-align: center;

    }

    c .Input {
        transition: .8s;
        background-color:#ffffff;
        color: black;
        border-color: red;
        border-bottom-color: #ce3434;
        border-bottom-style: groove;
        border-top: none;
        border-left: none;
        border-right: none;
        border-width: 3px;
    }

    .Input:hover {
        transition: .8s;
        background-color: rgb(255, 255, 255);
        box-shadow: inset;
        border-bottom-color: green;
    }

    .Input:focus {
        transition: .8s;
        border-bottom-color: green;
        background-color: rgba(0, 0, 0, .2);
    }

    @media screen and (max-width:750px) {
        .cuerpo-form {
            width: 95%;
        }

        .logo {
            height: 50px;
            border-radius: 10px;
            position: relative;
            right: -45%;
        }
    }

</style>

</html>
