<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>W&C</title>

    <!-- Bootstrap CSS -->
    <link href="Assets/css/bootstrap.css" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" type="text/css" href="Assets/Icon/favicon.ico">

    <!-- Estilos Propios -->
    <link href="Assets/css/menu-lateral.css" rel="stylesheet">
    <link href="Assets/css/estilos.css" rel="stylesheet">
    
    <!-- Sweet-Alert -->
    <link rel="stylesheet" href="Assets/css/sweetalert2.css">
    <script src="Assets/js/sweetalert2.all.js"></script>

    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="Assets/css/select2.css">
    
    
</head>

<body>
<?php
    if(isset($alerta)){
        echo $alerta;
    }
?>
<div class="container-fluid login">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-4">
                <h1 class="text-center mb-4">World & Computer</h1>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña">
                            </div>

                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-check-input">
                                    Recuerdame
                                </label>
                            </div>

                            <div class="row">
                                <div class="col pr-2">
                                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                                </div>
                                <div class="col pl-2">
                                    <a class="btn btn-block btn-link" href="#">Recuperar Contraseña</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>



 
    <!-- Bootstrap core JavaScript -->
    <script src="Assets/js/jquery/jquery-3.2.1.js"></script>
    <script src="Assets/js/bootstrap/bootstrap.js"></script>
    <script src="Assets/js/menu_lateral.js"></script>
    <script src="Assets/js/validacion.js"></script>
	<script src="Assets/js/select2.js"></script>
</body>

</html>