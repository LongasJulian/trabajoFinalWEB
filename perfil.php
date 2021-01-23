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
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script type="text/javascript" src="js/programa.js"></script>
        <title>Perfil</title>
          <!--Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="css/estilointento.css">

        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <body class="cuerpo">
       
        <header>
            <nav>
                <div class="row bg-dark">
                    <div class="col text-center text-white" ><img src="img/academico.png" class="w-25 imagennav "></div>
                    <div class="col text-center "><a href="index.php" class="text-white">Inicio</a></div>
                    <div class="col text-center "><a href="perfil.php" class="text-white">Mi Perfil</a></div>
                    <div class="col text-center "><a href="agenda.php" class="text-white">Agenda</a></div>
                    <div class="col text-center "><a href="MisNotas.php" class="text-white">Mis cursos</a></div>
                </div>
            </nav>
        </header>
        

        <section>
            <div class="row ">
                <div class="col-9 bordeado ">
                    <div class="m-4">
                        <h1 class = "text-white ">Mi Perfil</h1>

                        


                        <hr>
                        <div class="mx-auto"><img src="img/user.png" class="w-25 ImagenUser"></div>
                        
                        <?php  if (isset($_SESSION['username'])) : ?>
    	                    <h2 class="text-center text-white">Bienvenido <?php echo $_SESSION['username']; ?></h2>
    	                    
                        <?php endif ?>

                        
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-8 text-white">
                                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A impedit harum odio. Officia velit, est magnam cumque nihil dolores non. Excepturi architecto pariatur beatae cupiditate tempore ex nemo eligendi minima?</h5>
                                <hr class="borderPerfil">
                                <h5>Universidad:</h5>
                                <p>Lorem ipsum dolor</p>
                                <h5>Correo:</h5>
                                <p>Lorem ipsum dolor</p>
                                <h5>Intereses:</h5>
                                <p>Lorem ipsum dolor</p>
                                <h5>Idioma:</h5>
                                <p>Lorem ipsum dolor</p>
                                <hr class="borderPerfil">
                                <a href="BuscarAmigos.html" role="button" class="btn fondo btn-md active ImagenUser text-white">Buscar amigos</a>
                                <br>
                                <a href="#" role="button" class="btn fondo btn-md active ImagenUser text-white">Mis Amigos</a>
                                <br>
                                <a href="#" role="button" class="btn fondo btn-md active ImagenUser text-white">Mis cursos</a>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 bg-dark text-white text-center">
                    <div class="h-100">
                        <hr>

                        <h2>Anuncios</h2>
                        <img src="img/AnunciosImg1.png">
                        <p>La universisdad de Antioquia y Politecnico di Milano renuevan el convenio específico por 5 años para el intercambio académico de estudiantes</p>
                        <a href="http://www.udea.edu.co/wps/portal/udea/web/generales/interna/!ut/p/z1/zVRNk5pAEP0r8eARpxlAIDfCWq5oRN1Vl7mkBhhxEplxAWV3f33Gj1RiNmpSm1SFC93N6-7H655BBD0gIuiWZ7TiUtCV8iPS_uS4PtY9EwbdSeCD1_a9jn03G2AHo_kpAPq6Bd64Mxreh_7oJsCIqM_DsdXRsa_yg4kPY9OYzcB1e3poH_PhzOPB7-VfAJDL_GeIIJKIal0tUbSWRUVXm5TRJtDy1FvKnB3sjeApTVn5jiY0bSRGg7o5T2jZBC4yJjgr9sF0n5ZIUalYKsudt-JlRVOpTCG1ihU5F1STu0bfimpc4QtBk73-_GVvaELuaK4TnqLIAVcps3A0By9szWTM1dy2HmuJZbGYpXpquq_G8vq_yWXV57t-PwrrGKYFY-jf4Lar497Q_hkQ9owOjN2hNTK6PWzaxhFwaTWusQgQyVYyPuyhJ2LDyRAp2IIVrGhtChVeVtW6fN-EJtR13cqkzFaslci8Cb9KWcqyQg-nSBQpqeyzUoU6mm85q9FUyCJXTO7-cBK3cKWDCW_scCj_fRCA1SDCD0F38FGH0Md_pfxZ9vo_Ld9_K_vg2gWg1oR_fnwknroGdmf1SW3I_3wPrPPpdJo7xrP2ZXL7MmBzLQq2dX2_yP3YOb6ea6_xFaUBApI!/dz/d5/L2dBISEvZ0FBIS9nQSEh/?page=udea.generales.interna&urile=wcm%3Apath%3A%2FPortalUdeA%2FasPortalUdeA%2FasHomeUdeA%2FUnidades%2BAcad%2521c3%2521a9micas%2FIngenier%2521c3%2521ada%2FasContenidos%2FasListado%2Fano-termina-oportunidades-internacionalizacion-no" role="button" class="btn btn-dark btn-md active">Ver más</a>
                        
                        <hr>

                        <img src="img/AnunciosImg2.png">
                        <p>A los estudiantes de la Facultad de Ingeniería que tengan objetos personales o académicos en los cacilleros de la Facultad de Ingeniería en Ciudad universitaria, les damos las indicaciones para poder reclamarlos</p>
                        <a href="http://www.udea.edu.co/wps/portal/udea/web/generales/interna/!ut/p/z1/1VTBkppAEP2VePCI0wwgkBthLVc0ou6qK5fUACPOBhhlRsnm6zOuVu26iZrUJodwYXp4r_vV66ZRhB5QVJIdy4hkvCS5ihdR-4vj-lj3TBh0J4EPXtv3OvbdbIAdjOanAOjrFnjjzmh4H_qjmwCjSH0ejq2Ojn3FDyY-jE1jNgPX7emhfeTDmceD3-NfAESX9c9QhKKklGu5Qos1ryTJtyklTSDiNFrxgh7O25KlJKXiA0lI2kiMBnELlhDRBFZmtGS0er5Mn2kJL6W6S7nYRzkTkqR8j0wVJVEmU6FRIbcpIwootIputioDLdVJsopUGo8fqeRCUxVYntOKi73kdcJStDBobJk2NjXQl0QzCTE1N8agJQnGYBq6vrTo2xb97EF0uQPzfb3XJjuGacEY-je47eq4N7TfAsKe0YGxO7RGRreHTds4Ai6NyTUVAYqynMeHmfTK2HAyFFV0qbyqWttKXa-kXIuPTWhCXdetjPMsp62EF034FWXFhUQPp0i0UFbZZ60KdTTfMVqjacmrQim5-8NO3MKVCia8s8Ih_UsjAKtGhJ-C7uCzDqGP_0r6s-r1f5q-_171wbVloMaEPW42kadWwv6__aYm5H_ZCetiOp0WjvGkfZ3cfh_QubYIdnV9vyz82Dm-nmqv8QPPEH_K/dz/d5/L2dBISEvZ0FBIS9nQSEh/?page=udea.generales.interna&urile=wcm%3Apath%3A%2FPortalUdeA%2FasPortalUdeA%2FasHomeUdeA%2FUnidades%2BAcad%2521c3%2521a9micas%2FIngenier%2521c3%2521ada%2FasContenidos%2FasListado%2Findicaciones-estudiantes-requieren-retirar-objetos-casilleros" role="button" class="btn btn-dark btn-md active">Ver más</a>

                        <hr>

                        <img src="img/AnunciosImg3.png">
                        <p>Por ahora, la institución mantendá la suspensión de la mayoría de las actividades presenciales. Mediante la modalidad de trabajo en casa y con las actividades académicas asistidas con los recursos de la virtualidad, la Universidad continúa velando por la salud y el bienestar de todo la comunidad universitaria</p>
                        <a href="http://www.udea.edu.co/wps/portal/udea/web/inicio/udea-noticias/udea-noticia/!ut/p/z1/vZXdT8IwEMD_FX3gcemta7fyOJHwIYEh330xpRtSZeuQCeJf7xY1RglMQ2of1t3l7ncfu-wQR1PEE7FV9yJTOhGrXJ5x945Va9j2CXTAJS74bkCohxvOcAxo8sPgxqbg9-tBd9irBddtjPhx_0H90x-OHB9-53_CgJ_Of4w44jLJ0myJZql-ysTqOYxEBcTmu7TUcfT-XjwvEp0pqcSmAlInWZSoUBdWX-qNlioKRVgBleQqbQmZqa3KNdHGwoDtInAqVYhmc1xd0PlCWp63YBahYFssotLCNqUumQNzpHu60KISfrqPkyLecQJr4g-Dbp_WbVyDTq_l1KFf7dLAabQw8ZwDwuHHLstillfhHcvBAYImWxXt0CjRT3E-foM_NqlZGoGeGaEE7xnFN7BZvG0W7xjFM9cs3uzkMLOT0yNm8WZ7T-BMfLtsDeR7Tj2s19zPl0HxP3_J0PR_t0Eaj0ajmDl76_G2-XrVtRq1OdsNF3HJtd_5l29T-__C/dz/d5/L2dBISEvZ0FBIS9nQSEh/?page=udea.inicio.udea.noticias.noticia&urile=wcm:path:/PortalUdeA/asPortalUdeA/asHomeUdeA/UdeA%2BNoticias/Contenido/asNoticias/Sociedad/inicio-actividades-2021" role="button" class="btn btn-dark btn-md active">Ver más</a>
                    </div>               
                </div>
            </div>


        </section>

        <?php  if (isset($_SESSION['username'])) : ?>
    	<h3 class ="m-4"> <a href="perfil.php?logout='1'" style="color: red;">cerrar sesión</a> </h3>
        <?php endif ?>
        

    </body>
</html>