<!DOCTYPE html>
<html ng-app>
  <head>
    <title>Registro de usuarios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">  
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    <script src="../controlador/app.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!--Hello word!-->
    <style>
        
        .login-bg{
            width: 100%;
            height: 870px;
            background:url(../recursos/ideas.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
      
        .contenedorFormulario{
            width: 100%;
            max-width:500px;
            background: white;
            padding: 15px;
            border-radius: 5px 5px;
            text-align: center;
        } 
        .contenedorFormulario span{
            font-size:30px;
            font-family: 'Open Sans';
    
        }
        .header{
            border-bottom: 1px solid white;
        }
      
      </style>
  </head>

  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="login.php">IDEAS+</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			      <div class="container contenedorFormulario" >  
                <span>Regístrate en IDEAS+</span><br>
                <div ng-app="myapp" ng-controller="usercontroller">  
                     
                    <input type="text" name="nombre" ng-model="nombre" class="form-control" placeholder="Nombre" required />  
                    <br />  
                    
                    <input type="text" name="apellido" ng-model="apellido" class="form-control"  placeholder="Apellido"  required/>  
                    <br />  
              
                    <input type="tel" name="documento" ng-model="documento" class="form-control"  placeholder="Documento" required/>  
                    <br /> 
                    
                    <select class="form-control"  name="tipodocumento" ng-model="tipodocumento">
                      <option value="" selected="selected">Tipo de documento</option>
                      <option value="Cedula">Cédula</option>
                      <option value="T.I">T.I</option>
                      <option value="Pasaporte">Pasaporte</option>
                     <option value="Otro">Otro</option>
                    </select>
                    <br /> 

                    <input type="email" name="email" ng-model="email" class="form-control" placeholder="Email"  required/>  
                     <br /> 
                  
                    <select class="form-control" name="tipouser" ng-model="tipouser">
                    <option value="" selected="selected">¿Qué eres?</option>
                    <option value="2">Estudiante</option>
                    <option value="3">Profesor</option>
                    </select>
                    <br /> 

                    <select class="form-control"  name="tipodocumento" ng-model="genero">
                      <option value="" selected="selected">Genero</option>
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                    </select>
                    <br /> 

                    <input type="date" name="fechanacimiento" ng-model="fechanacimiento" class="form-control" placeholder="Fecha de nacimiento"  required/>  
                    <br /> 
                     
                    <input type="password" name="contrasena" ng-model="contrasena" class="form-control"  placeholder="Contrasena" required/>  
                    <br /> 
                    
                    <input type="tel" name="telefono" ng-model="telefono" class="form-control"  placeholder="Telefono" required/>  
                    <br /> 
                    
                    <input type="tel" name="celular" ng-model="celular" class="form-control"  placeholder="Celular" required/>  
                    <br /> 

                    <md-content ng-controller="AppCtrl as ctrl" layout-padding ng-cloak>
                          <h4>Standard date-picker</h4>
                          <md-datepicker ng-model="ctrl.myDate" md-placeholder="Enter date"></md-datepicker>
                    </md-content>

                    <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="Registrarme"/>

                </div>  
           </div>
		</div>
	</div>
	
	
	
	<script type="text/javascript">
    angular.module('datepickerBasicUsage', ['ngMaterial', 'ngMessages']).controller('AppCtrl', 
      function() {
        this.myDate = new Date();
        this.isOpen = false;
      });
  </script>
	
  <script>
  function valida(e){
      tecla = (document.all) ? e.keyCode : e.which;

      if (tecla==8){
          return true;
      }
          

      patron =/[0-9]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
  }
  </script>

 
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>

  </body>
</html>