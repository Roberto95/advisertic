<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Grupo</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css') }}">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" href="{{ asset  ('css/estilos.css') }}">
		<link rel="stylesheet" href="{{ asset  ('css/estilazos.css') }}">

		<!--PA QUE JALE EN M EDGE-->
		<style type="text/css" >
		body{
			background-color: rgb( 28, 40, 51 );
		}
		</style>

 <title>Calificaciones</title>
  </head>
	<body  style="background-color: rgba(  28, 40, 51  );" >

<div class="contenedor">
	<!--EMPIEZA MENÚ DE NAVEGACIÓN-->
	<nav class="navbar navbar-dark bg-dark navbar-expand-xl navbar-togleable-sm navbar-togleable-md navbar-togleable-lg  sticky-top">
	<a class="navbar-brand " href="principal">
			<img src="imagenes/ADVISER TIC.jpeg" width="50" height="50" class="d-inline-block align-top rounded" alt="">
		<h3 class="govea">Adviser Tic</h3>
	</a>
      <!--button para colapsar e menu de navegación-->
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--clase para colapsar le menú de navegación los mr y pr son para centrar-->
  <div class="collapse navbar-collapse ml-5 pl-5" id="navbarNavAltMarkup">
		<div class="navbar-nav mr-auto ml-auto mr-5 pr-5 text-center text-light">
        <a class="nav-item nav-link  d-inline-block align-bottom" href="principal"><img src="{{asset ('iconos/home.png')}}" width="20px" height="20px" alt="Página Principal" title="Página Principal"><br>Inicio</a>
        <a class="nav-item nav-link " href="acerca_de"><img src="{{asset ('iconos/acercade.png')}}" width="20px" height="20px" alt="Acerca de nosostros" title="Acerca de nosotros"><br>Acerca de</a>

      <div class="dropdown show">
        <a class="dropdown-toggle nav-item nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset ('iconos/grupos.png')}}" width="20px" height="20px" alt="Grupos" title="Grupos"><br>Grupos
          </a>

        <!--Dropdown Grupos-->
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="ver_grupo">Ver</a>
            <a class="dropdown-item" href="modificar">Modificar</a>
        </div>
           </div>


      <div class="dropdown disabled">
          <a class="dropdown-toggle nav-item nav-link" href="agregar_alumno" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{asset ('iconos/alumnos.png')}}" width="20px" height="20px" alt="Alumnos" title="Alumnos"><br>Alumnos
          </a>
        <!--Dropdown Alumnos-->
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="agregar_alumno">Agregar</a>
        <a class="dropdown-item" href="actualizar_alumno">Actualizar</a>
        <a class="dropdown-item" href="agregar_alumno">Buscar</a>
      </div>
    </div>


    <a class="nav-item nav-link " href="agregar_docente"><img src="{{asset ('iconos/tutores.png')}}" width="20px" height="20px" alt="Tutores" title="Tutores"><br>Agregar Docente</a>
    <a class="nav-item nav-link " href="reporte_vulnerables"><img src="{{asset ('iconos/maestros.png')}}" width="20px" height="20px" alt="Maestros" title="Maestros"><br>Tutores</a>
    <a class="nav-item nav-link " href="calificaciones"><img src="{{asset ('iconos/calificaciones.png')}}" width="20px" height="20px" alt="Calificaciones" title="Calificaciones"><br>Calificaciones</a>
    <a class="nav-item nav-link " href="vulnerables"><img src="{{asset ('iconos/vulnerable.png')}}" width="20px" height="20px" alt="Vulnerables" title="Vunerables"><br>Vulnerables</a>
      <a class="nav-item nav-link " href="asignar_bajas"><img src="{{asset ('iconos/bajasX2.png')}}" width="20px" height="20px" alt="Bajas" title="Bajas"><br>Bajas</a>
    </div>
  </div>
	<a href="/login" class="badge badge-light mt-3 mr-5 text-dark justify-content-end perro2">Salir</a>
</div>
</nav>
<!--TERMINA MENÚ DE NAVEGACIÓN-->

<!--Creamos el container junto con su formulario horizontal-->
    <div class="container" style="background-color: rgba(   247, 249, 249  );">
    	<form action=" " class="form-horizontal">
<!--Le damos un titulo a la ventana-->
    		<h1>Modificar Grupo</h1>
<!--Cremos un grupo de formulario jutno con sus componentes: Label "Grupo" y  select-->
    	 <div class="form-group">
			    <label for="mot" class="col-sm-2 control-label">Grupo</label>
			    <div class="col-sm-10">
			    <select class="form-control" id="mot">
			      <option value="1">Seleccione...</option>
			      <option>5°A</option>
			      <option>2°B Bis</option>
			      <option>3°A</option>
			      <option>4°A Bis</option>
			    </select>
			    </div>
			  </div>
<!---Inicia un nuevo grupo de formularios, con sus componentes: Label"Tutor" y input para "Tutor"-->
    	<div class="form-group">
     	 	<label for="matricula" class="col-sm-2 control-label">Tutor:</label>
      	<div class="col-sm-10">
     		 <input type="text" class="form-control" name="Tutor" placeholder="Escriba el nombre del tutor">
      	</div>
    	</div>

<!--Se crea un neuvo grupo de formulario y sus componentes: Label "Tetramestre" y un select-->
    	<div class="form-group">
			    <label for="mot" class="col-sm-2 control-label">Tetramestre</label>
			    <div class="col-sm-10">
			    <select class="form-control" id="mot">
			      <option value="1">Seleccione...</option>
			      <option>Primer</option>
			      <option>Segundo</option>
			      <option>Tercer</option>
			      <option>Cuarto</option>
			      <option>Quinto</option>
			      <option>Sexto</option>
			    </select>
			    </div>
			  </div>
<!--Cramos un nuevo grupo de formularios con su componente: button-->
		<div class="form-group">
<!--Le asignamos un tamaño al componente-->
    		<div class="col-sm-2">
    			<button type="button" class="btn btn-primary btn-md">Guardar</button>
    		</div>
  		</div>
		</form>
    </div>


<!--EMPIEZA FOOTER-->
<footer class="row font-weight-normal text-white page-footer " style="background-color: #21937c !important;">
  <div class="col-sm-4 ml-5">
    <h6>Universidad Tecnológica General Mariano Escobedo</h6>
    <h6>Tecnologías de la Información y Comunicación Área Sistemas Informáticos</h6>
    <br>
    <h6 class="footer-copyright">© 2018 Copyright: <a href="http://www.ute.edu.mx/" class="text-light">WWW.UTE.EDU.MX</a></h6>

  </div>
  <div class="col-sm-5">
    <h6>Dirección: <p>Libramiento Noreste km. 33.5 Gral. Escobedo Nuevo León, México, C.P. 66050</p></h6>
    <h6>Teléfono: <P>+(52) (81) 5000-4200 Fax. (81) 5000-4238.</P></h6>
  </div>
  <div class="col-sm-2">
    <h6>Puedes encontrarnos en:</h6>
    <h6>Email:</h6>
     <a href="http://www.ute.edu.mx/" target="_blank"> <img src="imagenes/UTE LOGO.jpg" alt="" width="50px" height="50px" class="rounded"></a>
     <a href="https://www.facebook.com/UTE.TICSI/" target="_blank"> <img src="imagenes/facebook.jpg" alt="" width="50px" height="50px" class="rounded"></a>
    </div>
</footer>

<script src="{{ asset ('css/bootstrap.min.css') }}"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <script src="{{ asset ('js/bootstrap.min.js')}}"></script>

</body>
</html>
