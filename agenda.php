<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">


        <title>Tus Notas</title>
          <!--Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilointento.css">

        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/programa.js"></script>
    </head>
    <body>
       
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
        
        <section>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5 ">
                    <h1 class="text-center">Agenda</h1>
                    
                    <table class="table table-dark" id="mitabla">
                        <thead>
                            <tr><th class="text-center" scope="col">Evento</th>
                                <th class="text-center" scope="col">Fecha</th>
                            </tr>
                        </thead>
                        <tbody id="agenda">
                            <tr>
                                <td>Web</td>
                                <td>hoy mismo</td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" onclick="agregar()">Agregar evento</button>

                    <input type="date" id="fecha">

                    
                </div>
                <div class="col-6">
                    <h1 class="text-center">Calendario</h1>
                    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23B39DDB&amp;ctz=America%2FBogota&amp;src=dWRlYS5lZHUuY29fY2xhc3Nyb29tMDE3ZTY5ZmNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMuY28jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%230B8043&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0" style="border:solid 1px #777" width="600" height="400" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>


        </section>
        

    </body>
</html>