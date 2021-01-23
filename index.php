<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script type="text/javascript" src="js/programa.js"></script>
        <title>Tus Notas</title>
          <!--Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">

        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <body class = "cuerpo">
       
        <header>
            <nav>
                <div class="row bg-dark">
                  <div class="col text-center" ><img src="img/academico.png" class="w-25 imagennav "></div>
                  <div class="col text-center "><a href="index.php" class="text-white">Inicio</a></div>
                  <div class="col text-center "><a href="perfil.php" class="text-white">Mi Perfil</a></div>
                  <div class="col text-center "><a href="agenda.php" class="text-white">Agenda</a></div>
                  <div class="col text-center "><a href="MisNotas.php" class="text-white">Mis cursos</a></div>
                </div>
            </nav>
        </header>
        <section >
            <div class="row">
                    
            </div>
            <div class="row" >
                <article class="col-md-2">
                    <p></p>
                </article>
                <article class="col-md-8">
                  <section>
                    <div class="row mx-auto pt-3">
                      <div id="carousel-main" class="carousel slide" data-ride="carousel">
        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Carrucel_1.png">
                            </div>
                            <div class="carousel-item"><img src="img/Carrucel_2.png"></div>
                            <div class="carousel-item"><img src="img/Carrucel_3.png"></div>
                            <div class="carousel-item"><img src="img/Carrucel_4.png"></div>
                            <div class="carousel-item"><img src="img/Carrucel_5.png"></div>
                        </div>
        
                        <a href="#carousel-main" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#carousel-main" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
        
                        <ul class="carousel-indicators">
                            <li data-target="#carousel-main" class="active" data-slide-to=0></li>
                            <li data-target="#carousel-main" data-slide-to=1></li>
                            <li data-target="#carousel-main" data-slide-to=2></li>
                            <li data-target="#carousel-main" data-slide-to=3></li>
                            <li data-target="#carousel-main" data-slide-to=4></li>
                            <li data-target="#carousel-main" data-slide-to=5></li>
                        </ul>
                      </div>
                    </div>
        </section>
        <div class="row">

            <div class="col-md-5">
                <div class="col border text-center border-dark fondo">
                    <h3 class="mx-auto letra text-white">Registro</h3>
                    <a href="#mostrarRegistro" data-toggle="collapse" aria-controls="mostrarRegistro" class="text-white">
                    <p class="mx-auto">Resgistrase</p>
                    </a>
                </div>
                <div class="collapse multi-collapse" id="mostrarRegistro">
                    <div class="card card-body">
                    <form action="index.php" method="post">
                      <?php include('errors.php'); ?>
                        <div class="form-group">
                          <label for="nombre">Ingrese su nombre completo</label>
                          <input type="text" class="form-control" name="username" id="nombre" placeholder="Nombre completo">
                        </div>
                        <div class="form-group">
                          <label for="correo">Ingrese su correo electrónico</label>
                          <input type="email" class="form-control" name="email" id="correo" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                          <label for="password">Ingrese su contraseña</label>
                          <input type="password" class="form-control" name="password_1" id="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                          <label for="Rpassword">Ingrese de nuevo su contraseña</label>
                          <input type="password" class="form-control" name="password_2" id="Rpassword" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                          <label>Ciudad : </label><input type="text" name="ciudad" list="Ciudad">
                          <datalist id="Ciudad"> 
                            <option> Medellín</option>
                            <option> Bogotá</option>
                            <option> Cali</option>
                            <option> Popayán</option>
                            <option> Pasto</option>
                          </datalist>
                        </div>
                        <button type="submit" class="btn btn-success" name="reg_user">Resgistrase</button>
                      </form>
                    </div>
                  </div>
            </div>
            <div class="col-md-1">

            </div>  
            <div class="col-md-5">
                <div class="row text-center cuadro">
                    <div class="col border border-dark fondo ">
                      <h3 class="mx-auto letra text-white" >Ingresar</h3>
                      <a href="#mostrarIngreso" data-toggle="collapse" aria-controls="mostrarIngreso" class="text-white">
                        <p class="mx-auto">Iniciar sesión</p>
                      </a>
                    </div>
                </div>
                <div>
                    <div class="collapse multi-collapse" id="mostrarIngreso">
                        <div class="card card-body">
                        <form action="index.php" method="post">
                        <?php include('errors.php'); ?>
                            <div class="form-group">
                              <label for="usrname">Nombre de usuario</label>
                              <input type="text" class="form-control" id="usrname" name="username" placeholder=" Ingrese Nombre de Usuario">
                              <small class="form-text text-muted"><i>Ejemplo: usuario</i></small>
                            </div>
                            <div class="form-group">
                              <label for="Contrasena">Contraseña</label>
                              <input type="password" class="form-control" id="contrasenausuario" placeholder="Ingrese su contraseña" name="password">
                            </div>
                            <button type="submit" class="btn btn-success" name="login_user">Iniciar sesión</button>
                          </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
      	    <h3>
                <?php 
          	      echo $_SESSION['success']; 
                	unset($_SESSION['success']);
                 ?>
      	    </h3>
        </div>
        <?php endif ?>

    </body>
</html>