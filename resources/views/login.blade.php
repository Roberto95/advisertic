<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inicio de Sesión</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset ('css/bootstrap.min.css') }}"></script>


    <link rel="stylesheet" href="{{ asset ('css/guia.css') }}"">
  </head>
  <body style="background-image:url(imagenes/ute2.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <form method="">
                  <img src="{{asset ('imagenes/ADVISER TIC.jpeg')}}" width="70" height="70" class="d-inline-block align-top img" alt="">
                <p class="name">ADVISER TIC</p>
                <br><br>
                <div class="acomodar">
                <div class="form-group ">
                <label for="option">Tipo de usuario</label>
                <select type="select" class="form-control" id="option">
                  <option value="">Elige un tipo...</option>
                  <option value="">Cordinador</option>
                  <option value="">Tutor</option>
                  <option value="">Maestro</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Código de acceso</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingresa tu código" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña" required>
              </div>
              <br>

              <button type="submit" class="btn btn-primary" onclick="myFunction()">Acceder al sistema</button>
            </div>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>
