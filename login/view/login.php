<html>
    <head>
    <title>Iniciar Sesion</title>
    <link href='../bootstrap/img/pesa.png' rel='shortcut icon' type='image/x-icon'/>
    <!-- estilo -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/estilo.css">
     <!-- script -->
    <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootbox.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/script.js"></script>
    
    </head>
    <body class="bLogin">
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <div class="row-fluid user-row"><!-- class="row-fluid user-row"-->
                                <img style="width:192px; height:192px;" src="../bootstrap/img/pesa.png" class="img-responsive" alt="Conxole Admin"/>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="loginvalidate.php" method="POST" name="login_validacion" accept-charset="UTF-8" role="form" class="form-signin">
                                <fieldset>
                                    <label class="panel-login">
                                        <div class="login_result"></div>
                                    </label>
                                   <input  type="email" id="email" name="email" class="form-control" placeholder="Escribe tu correo" autofocus required/>
                                    <input  type="password" id="password" name="password" class="form-control" placeholder="password" required/>
                                    <br></br>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Iniciar Sesion">
                                </fieldset>
                            </form>
                                                <!-- Modal activar-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>