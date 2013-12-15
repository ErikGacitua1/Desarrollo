<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>SVO</title>
    <meta name="description" content="Artículo en GenbetaDev sobre Bootstrap 2.0">
    <meta name="author" content="Ricardo Borillo">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body { padding-top: 60px; }

    </style>
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  
    <style type="text/css">

    .navbar-inner{
      height:40px;
    }
    .navbar .brand{
      font-size: 30px;
    }
    .nav{
      font-family: Bernard MT Condensed;
    }
    .form-signin{
      margin-top: -28px;
    }
    .hero-unit{
      margin-top: 50px;
      height: 100px;
      border-color: #222;
    }
    #container{
      margin-top: 100px;
     
    }
    .registro{
      margin-left: 57px;
      margin-top: -219px;
    }
    .container-registro{
      margin-left: 500px;
    }    
    .input-registro{
      margin-left: 60px;
    }
    .form-signin-heading{
      margin-top: 70px;
    }
    .wellcome{
      margin-top: -44px;
    }
    .container .btn-primary{
      font-size: 20px;
    }
    .container-registro .btn-primary{
      margin-top: 10px;
      margin-left: 60px;
      font-size: 20px;
    }
    .container-footer{
      height: 120px;
      margin-top: 100px;
      background-color: #E6E6E6;
    }
    .muted {
      margin-top: 20px;
    }
    .span4{
      background: #ffffff;
      margin-top: -517px;
      margin-left: 1014px;
      width: 375px;
      height: 665px;
    }
    .form-signin-heading{
      font-family: Bernard MT Condensed;
    }
    .span3{
      margin-top: 88px;
    }
    .span3 h1{
      margin-top: 1px;
    }
    h1{
      font-family: Bernard MT Condensed;
    }
    .slogan{
      margin-top: 10px;
    }
    hr{
      border: 0;
      height: 2px;
      border-top: 1px dashed black;
      border-bottom: 1px dashed black;
    }
    </style>
  </head>

  <body background="home.jpg">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#" style="font-family:Bernard MT Condensed">ANALISTA PROGRAMADOR | ERIK GACITUA A.</a>
          <ul class="nav">
                <li class="active"><a href="#" style="font-size:25px;">Home</a></li>
                <li><a href="#about"></a></li>
                <li><a href="#contact"></a></li>
              </ul>
        </div>
      </div>
    </div>
    <center>
        <div id="container-register">
          <div class="row-register">
            <center>
              <div class="span5" style="background: #eeeeee;margin-top:5px;margin-left: 230px;">
                <div id="row" style="margin-top: 40px;">
                  <div id="registro" style="display: ;margin-top:250px;">
                    <h2 class="registro" style="font-family:Bernard MT Condensed;">Crea tu cuenta ingresando la informacion requerida!</h2>

                <FORM METHOD="POST" ACTION="addusser.php">
            
                  <input type="text" class="input-registro" name="cuenta" placeholder="Cuenta" style="width:300px;"><br>
                  <input type="text" class="input-registro" name="rut" placeholder="Rut" style="width:300px;"><br>
                  <input type="text" class="input-registro" name="nombres" placeholder="Nombres" style="width:300px;"><br>
                  <input type="text" class="input-registro" name="apellidos" placeholder="Apellidos" style="width:300px;"><br>
                  <input type="text" class="input-registro" name="correo" placeholder="Correo" style="width:300px;"><br>
                  <input type="text" class="input-registro" name="fono" placeholder="Telefono" style="width:300px;"><br>
                  <input type="text" class="input-registro" name="movil" placeholder="Movil" style="width:300px;"><br>
                  <input type="password" class="input-registro" name="password" placeholder="Password" style="width:300px;"><br>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                 </center>
                </FORM>
             
              </div>
            </div>
          </div>
        </div>
    </center>
                  
        <div id="container">
          <div class="row">
            <center>
            <div class="span4">
              <div class="span3">
                <form class="form-signin">
                  <div class="slogan">
                    <h1>TU MARCA HACE LA DIFERENCIA</h1>
                  </div><hr><br>
                      <h1 class="form-signin-heading">Loging|Ingresar</h1>
                </form>  
                  <FORM METHOD="POST" ACTION="login.php">  
                    <input type="text" class="input-registro-login" name="cuenta" placeholder="Cuenta" style="width:300px;"><br>
                    <input type="password" class="input-registro-login" name="password" placeholder="Contraseña" style="width:300px;"> 
                    <br>
                    <button class="btn btn-primary" type="submit" style="font-family:Bernard MT Condensed">INICIAR SESIÓN</button>
                  </FORM>
                  <hr>
                    
                      <h1>Para ver los productos, hazte usuario<br><a href="insert.php">aqui!!</a></h1>
                    </center>
              </div>
            </div>
          </div>
        </div>        
    </center>

   

       <!-- <div class="container-registro">
          <h2 class="registro">Crea tu cuenta ingresando la informacion requerida!</h2>

            <FORM METHOD="POST" ACTION="insertar.php">
            <input type="text" class="input-registro" name="rut" placeholder="Rut" style="width:300px;"><br>
            <input type="text" class="input-registro" name="nombres" placeholder="Nombres" style="width:300px;"><br>
            <input type="text" class="input-registro" name="apellidos" placeholder="Apellidos" style="width:300px;"><br>
            <input type="text" class="input-registro" name="correo" placeholder="Correo" style="width:300px;"><br>
            <input type="text" class="input-registro" name="fono" placeholder="Telefono" style="width:300px;"><br>
            <input type="text" class="input-registro" name="movil" placeholder="Movil" style="width:300px;"><br>
            <input type="text" class="input-registro" name="cuenta" placeholder="Cuenta" style="width:300px;"><br>
            <input type="text" class="input-registro" name="password" placeholder="Password" style="width:300px;"><br>
            <button class="btn btn-primary" type="submit">Guardar</button>
          </FORM>
        
        </div>
      -->
       
            
  </body>
</html>










