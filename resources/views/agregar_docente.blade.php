

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset ('css/estilazos.css') }}">



    <title>Agregar docente</title>
  </head>


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

      <div class="dropdown disabled">
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


    <a class="nav-item nav-link active " href="agregar_docente"><img src="{{asset ('iconos/tutores.png')}}" width="20px" height="20px" alt="Tutores" title="Tutores"><br>Agregar Docente</a>
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


<br>

  <!--EMPIEZA FORMULARIO PARA REGISTRAR A UN MAESTRO O TUTOR-->
<div class="border container rounded" style="background-color: rgba(   247, 249, 249  );">
    <h3 class="text-dark container pl-5 mt-5">Registre a un nuevo maestro o tutor</h3>
    <br>
    <form class="container pl-5 pr-5 text-success">

        <!--NOMBRE Y APELLIDOS-->
        <div class="form-row">
          <div class="form-group col-sm-4 ">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellido_paterno" placeholder="Apellido paterno" required>
          </div>
        <div class="form-group col-sm-4">
          <label for="apellido_materno">Apellido materno</label>
          <input type="text" class="form-control" id="apellido_materno" placeholder="Apellido materno" required>
        </div>
      </div>

        <!--CURP, FECHA DE NACIMIENTO Y ESTADO CIVIL-->
      <div class="form-row mt-3">
          <div class="form-group col-sm-4">
            <label for="curp">CURP</label>
            <input type="text" class="form-control" id="curp" placeholder="Curp" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="date">F. De Nacimiento</label>
            <input type="date" class="form-control" id="apellido_paterno" placeholder="Fecha de nacimiento" required>
          </div>
          <div class="form-group col-sm-4 ">
              <label for="estado_civil">Estado civil</label>
              <select  id="estado_civil" title="Estado Civil" required class="form-control">
                <option></option>
                <option></option>
              </select>
              </div>

          </div>



      <!--TELEFONO DE CASA, CELULAR Y CORREO-->
          <div class="form-row mt-3">
            <div class="form-group col-sm-4">
              <label for="telefono">Teléfono de casa</label>
              <input type="text" class="form-control" id="telefono" placeholder="Teléfono de casa" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="celular">Teléfono Celular</label>
              <input type="text" class="form-control" id="calular" placeholder="Teléfono Celular" required>
            </div>
            <div class="form-group col-sm-4">
              <label for="correo">Correo Electrónico</label>
              <input type="email" class="form-control" id="correo" placeholder="Correo Electrónico" required>
            </div>
          </div>


          <!--DIRECCION, CODIGO POSTAL Y RFC-->
          <div class="form-row mt-3">
            <div class="form-group col-sm-6">
              <label for="direccion">Dirección</label>
              <input type="text" class="form-control" id="direccion" placeholder="Dirección" required>
            </div>
            <div class="form-group col-sm-3">
                <label for="codigo_postall">C.Postal</label>
                <input type="text" class="form-control" id="código_postal" placeholder="Código Postal">
              </div>
            <div class="form-group col-sm-3">
                <label for="rfc">RFC</label>
                <input type="text" class="form-control" id="rfc" placeholder="RFC">
              </div>
          </div>


      <!--CIUDAD, ESTADO Y REGION-->
          <div class="form-row mt-3">
           <div class="form-group col-sm-4">
          <label for="ciudad">Ciudad</label>
          <select  id="ciudad" title="Ciudad" required class="form-control">
            <option></option>
            <option></option>
          </select>
          </div>

          <div class="form-group col-sm-4">
          <label for="estado">Estado</label>
          <select  id="estado" title="Estado" required class="form-control">
            <option></option>
            <option></option>
          </select>
          </div>


          <div class="form-group col-sm-4">
          <label for="region">Región</label>
          <select  id="region" title="Región" required class="form-control">
            <option></option>
            <option></option>
          </select>
          </div>
          </div>


            <!--GRUPO Y NUMERO DE EMPLEADO -->
        <div class="form-row mt-3">
          <div class="form-group col-sm-3">
          <label for="grupo">Grupo</label>
    <select  id="grupo" title="Grupo" required class="form-control">
    <option>1A</option>
    <option>1B</option>
    <option>1C</option>
    <option>2A</option>
    <option>2B</option>
    <option>2C</option>
    <option>3A</option>
    <option>3B</option>
    <option>3C</option>
    <option>4A</option>
    <option>4B</option>
    <option>4C</option>
    <option>5A</option>
    <option>5B</option>
    <option>5C</option>
    <option>1A-BIS</option>
    <option>1B-BIS</option>
    <option>2A-BIS</option>
    <option>2B-BIS</option>
    <option>3A-BIS</option>
    <option>3B-BIS</option>
    <option>4A-BIS</option>
    <option>4B-BIS</option>
    <option>5A-BIS</option>
    <option>5B-BIS</option>
    </select>
    </div>

    <div class="form-group col-sm-4">
        <label for="#empleado">Num. Empleado</label>
        <input type="text"  id="#empleado" placeholder="Número de empleado" required class="form-control">
        </div>

    </div>


      <!--BOTONES AGREGAR Y LIMPIAR-->
        <div class="mt-3 pb-3">
        <button type="submit" class="btn btn-success">Agregar</button>
        <button type="reset" class="btn btn-secondary ml-2">Limpiar</button>
        </div>

      </form>
      </div>
        <!--TERMINA FORMULARIO PARA REGISTRAR A UN MAESTRO O TUTOR-->


    <br><br><br>



      <!--EMPIEZA FORMULARIO PARA ASIGNAR EL CUATRIMESTRE AL MAESTRO O TUTOR-->
    <div class="border container rounded" style="background-color: rgba(   247, 249, 249  );">
        <a name="buscar alumno" id="a"></a>
        <h3 class="text-dark container pl-5 mt-5">Asigne el cuatrimestre al maestro o tutor</h3>
        <form action="" method=""  class="container pl-5 mt-4">


            <!--EMPLEADO Y CUATRIMESTRE-->
            <div class="form-row mt-3">
                <div class="form-group col-sm-4">
                    <label for="empleado">Empleado</label>
                    <select  id="empleado" title="Empleado" required class="form-control">
                      <option></option>
                      <option></option>
                    </select>
                    </div>

                        <div class="form-group col-sm-4">
                            <label for="cuatrimestre">Cuatrimestre</label>
                            <select  id="cuatrimestre" title="Cuatrimestre" required class="form-control">
                              <option></option>
                              <option></option>
                            </select>
                            </div>
                            </div>


                <!--BOTON DE ASIGNAR-->
              <div class="form-group">
             <button type="submit" class="btn btn-success ml-2">Asignar</button>
            </div>
            </div>
        </form>
        <!--TERMINA FORMULARIO PARA ASIGNAR UN CUATRIMESTRE AL MAESTRO O TUTOR-->


        <br> <br>




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
