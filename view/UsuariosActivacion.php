<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
           <script src="../controller/controlador_usuario.js"></script>
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
           <h2 algin="center"> Activar Usuarios </h2>
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                    
                     <!--
                     <label>Nombre Usuario</label>  
                     <input type="text" name="nombreUsuario" ng-model="nombreUsuario" class="form-control" />  
                     <br />  
                     -->
                      <!--
                     <input type="hidden" ng-model="id" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br /> 
                     -->
                       
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Nombre Usuario</th>  
                              <th>Activar</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td>{{x.NOMBRE}}</td>  
                               <td><button ng-click="inactivateData(x.ID_USUARIO)" class="btn btn-info btn-xs">Activar</button></td>  
                          </tr>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  