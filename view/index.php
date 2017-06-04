

<?php 
session_start();
  if (isset($_SESSION['administrador']) && $_SESSION['administrador']=='YES') 
  {?>




<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ideas + </title>
        <meta name="description" content="">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="../recursos/css/vendor.css">
        <link rel="stylesheet" href="../recursos/css/app.css">
                   <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
              <script src="../controller/controlador_usuario.js"></script>
        <!-- Theme initialization -->
   
    </head>

        <body>
            <div class="main-wrapper">
                <div class="app" id="app">
                    <header class="header">
                        <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
                    <i class="fa fa-bars"></i>
                </button> </div>
                        <div class="header-block header-block-search hidden-sm-down">
                            <form role="search">
                                <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                    <div class="underline"></div>
                                </div>
                            </form>
                        </div>
                        <div class="header-block header-block-buttons">
                            <a href="https://github.com/pipeolis/ideasplus" target="_blank" class="btn btn-sm header-btn"> <i class="fa fa-github-alt"></i> <span>Ver en GitHub</span> </a>

                            <a href="https://github.com/pipeolis/ideasplus/archive/master.zip" class="btn btn-sm header-btn"> <i class="fa fa-cloud-download"></i> <span>Download .zip</span> </a>
                        </div>
                        <div class="header-block header-block-nav">
                            <ul class="nav-profile">
                                <li class="notifications new">
                                    <a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <sup>
                          <span class="counter">8</span>
                        </sup> </a>
                                    <div class="dropdown-menu notifications-dropdown-menu">
                                        <ul class="notifications-container">
                                            <li>
                                                <a href="" class="notification-item">
                                                    <div class="img-col">
                                                        <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                    </div>
                                                    <div class="body-col">
                                                        <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="notification-item">
                                                    <div class="img-col">
                                                        <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                                    </div>
                                                    <div class="body-col">
                                                        <p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="notification-item">
                                                    <div class="img-col">
                                                        <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                                    </div>
                                                    <div class="body-col">
                                                        <p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <footer>
                                            <ul>
                                                <li> <a href="">
                                View All
                              </a> </li>
                                            </ul>
                                        </footer>
                                    </div>
                                </li>
                                
                                <li class="profile dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <div class="img" > </div> <span class="name">
                          <?php echo $_SESSION['nombre']; ?>
                        </span> </a>
                                    <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1"  >
                                     
                                        <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Perfil </a>
                                       
                                        <div class="dropdown-divider"></div>
                                     <form ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()" class="myForm">
                                      <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i>  <input type="submit" name="btnCerrar" ng-click="cerrarSesion()" value="Cerrar" >  </a>     
                                       </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </header>
                    <aside class="sidebar">
                        <div class="sidebar-container">
                            <div class="sidebar-header">
                                <div class="brand">
                                    <img src="../recursos/logoF.png" width="40px" alt="">Administrar cuenta </div>
                            </div>
                            <nav class="menu">
                                <ul class="nav metismenu" id="sidebar-menu">
                                    <li class="active">
                                        <a href="index.php"> <i class="fa fa-home"></i> Dashboard </a>
                                    </li>

                                    <li>
                                        <a href=""> <i class="fa fa-table"></i>Control <i class="fa arrow"></i> </a>
                                        <ul>


                                        <li> <a href="rolView.php">
                                        Roles
                                    </a> </li>

    <li> <a href="areaInteresView.php"    >
                                        Áreas de Interés
                                    </a> </li>
                                      <li> <a href="usuarioView.php"    >
                                        Usuarios
                                    </a> </li>
                                       <li> <a href="usuarioControlView.php"    >
                                        Activación Usuarios
                                    </a> </li>
                                       
                                        </ul>
                                    </li>


    

                            </nav>
                        </div>
                        <footer class="sidebar-footer">
                            <ul class="nav metismenu" id="customize-menu">
                                <li>
                                    <ul>
                                        <li class="customize">
                                            <div class="customize-item">
                                                <div class="row customize-header">
                                                    <div class="col-xs-4"> </div>
                                                    <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                    <div class="col-xs-4"> <label class="title">static</label> </div>
                                                </div>
                                                <div class="row hidden-md-down">
                                                    <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                    <div class="col-xs-4"> <label>
                                                <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
                                                <span></span>
                                            </label> </div>
                                                    <div class="col-xs-4"> <label>
                                                <input class="radio" type="radio" name="sidebarPosition" value="">
                                                <span></span>
                                            </label> </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                    <div class="col-xs-4"> <label>
                                                <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                <span></span>
                                            </label> </div>
                                                    <div class="col-xs-4"> <label>
                                                <input class="radio" type="radio" name="headerPosition" value="">
                                                <span></span>
                                            </label> </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                    <div class="col-xs-4"> <label>
                                                <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                <span></span>
                                            </label> </div>
                                                    <div class="col-xs-4"> <label>
                                                <input class="radio" type="radio" name="footerPosition" value="">
                                                <span></span>
                                            </label> </div>
                                                </div>
                                            </div>
                                            <div class="customize-item">
                                                <ul class="customize-colors">
                                                    <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                    <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                    <li> <span class="color-item color-green active" data-theme=""></span> </li>
                                                    <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                    <li> <span class="color-item color-blue" data-theme="blue"></span> </li>
                                                    <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href=""> <i class="fa fa-cog"></i> Personalizar </a>
                                </li>
                            </ul>
                        </footer>
                    </aside>
                    <div class="sidebar-overlay" id="sidebar-overlay"></div>
                    <article class="content dashboard-page">
                        <section class="section">
                            <div class="row sameheight-container">
                                <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-5 stats-col">
                                    <div class="card sameheight-item stats" data-exclude="xs">
                                        <div class="card-block">
                                            <div class="title-block">
                                                <h4 class="title"> Stats </h4>
                                                <p class="title-description"> Website metrics for <a href="http://modularteam.github.io/modularity-free-admin-dashboard-theme-html/">
                                    your awesome project
                                </a> </p>
                                            </div>
                                            <div class="row row-sm stats-container">
                                                <div class="col-xs-12 col-sm-6 stat-col">
                                                    <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                    <div class="stat">
                                                        <div class="value"> 5407 </div>
                                                        <div class="name"> Active items </div>
                                                    </div> <progress class="progress stat-progress" value="75" max="100">
                                    <div class="progress">
                                        <span class="progress-bar" style="width: 75%;"></span>
                                    </div>
                                </progress> </div>
                                                <div class="col-xs-12 col-sm-6 stat-col">
                                                    <div class="stat-icon"> <i class="fa fa-shopping-cart"></i> </div>
                                                    <div class="stat">
                                                        <div class="value"> 78464 </div>
                                                        <div class="name"> Items sold </div>
                                                    </div> <progress class="progress stat-progress" value="25" max="100">
                                    <div class="progress">
                                        <span class="progress-bar" style="width: 25%;"></span>
                                    </div>
                                </progress> </div>
                                                <div class="col-xs-12 col-sm-6  stat-col">
                                                    <div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
                                                    <div class="stat">
                                                        <div class="value"> $80.560 </div>
                                                        <div class="name"> Monthly income </div>
                                                    </div> <progress class="progress stat-progress" value="60" max="100">
                                    <div class="progress">
                                        <span class="progress-bar" style="width: 60%;"></span>
                                    </div>
                                </progress> </div>
                                                <div class="col-xs-12 col-sm-6  stat-col">
                                                    <div class="stat-icon"> <i class="fa fa-users"></i> </div>
                                                    <div class="stat">
                                                        <div class="value"> 359 </div>
                                                        <div class="name"> Total users </div>
                                                    </div> <progress class="progress stat-progress" value="34" max="100">
                                    <div class="progress">
                                        <span class="progress-bar" style="width: 34%;"></span>
                                    </div>
                                </progress> </div>
                                                <div class="col-xs-12 col-sm-6  stat-col">
                                                    <div class="stat-icon"> <i class="fa fa-list-alt"></i> </div>
                                                    <div class="stat">
                                                        <div class="value"> 59 </div>
                                                        <div class="name"> Tickets closed </div>
                                                    </div> <progress class="progress stat-progress" value="49" max="100">
                                    <div class="progress">
                                        <span class="progress-bar" style="width: 49%;"></span>
                                    </div>
                                </progress> </div>
                                                <div class="col-xs-12 col-sm-6 stat-col">
                                                    <div class="stat-icon"> <i class="fa fa-dollar"></i> </div>
                                                    <div class="stat">
                                                        <div class="value"> $780.064 </div>
                                                        <div class="name"> Total income </div>
                                                    </div> <progress class="progress stat-progress" value="15" max="100">
                                    <div class="progress">
                                        <span class="progress-bar" style="width: 15%;"></span>
                                    </div>
                                </progress> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-7 history-col">
                                    <div class="card sameheight-item" data-exclude="xs">
                                        <div class="card-header card-header-sm bordered">
                                            <div class="header-block">
                                                <h3 class="title">History</h3>
                                            </div>
                                            <ul class="nav nav-tabs pull-right" role="tablist">
                                                <li class="nav-item"> <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Visits</a> </li>
                                                <li class="nav-item"> <a class="nav-link" href="#downloads" role="tab" data-toggle="tab">Downloads</a> </li>
                                            </ul>
                                        </div>
                                        <div class="card-block">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active fade in" id="visits">
                                                    <p class="title-description"> Number of unique visits last 30 days </p>
                                                    <div id="dashboard-visits-chart"></div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="downloads">
                                                    <p class="title-description"> Number of downloads last 30 days </p>
                                                    <div id="dashboard-downloads-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <div class="row sameheight-container">
                                <div class="col-xl-8">
                                    <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                                        <div class="card-header bordered">
                                            <div class="header-block">
                                                <h3 class="title"> Items </h3> <a href="item-editor.html" class="btn btn-primary btn-sm rounded">
                                Add new
                            </a> </div>
                                            <div class="header-block pull-right"> <label class="search">
                                <input class="search-input" placeholder="search...">
                                <i class="fa fa-search search-icon"></i>
                            </label>
                                                <div class="pagination">
                                                    <a href="" class="btn btn-primary btn-sm rounded"> <i class="fa fa-angle-up"></i> </a>
                                                    <a href="" class="btn btn-primary btn-sm rounded"> <i class="fa fa-angle-down"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="item-list striped">
                                            <li class="item item-list-header hidden-sm-down">
                                                <div class="item-row">
                                                    <div class="item-col item-col-header fixed item-col-img xs"></div>
                                                    <div class="item-col item-col-header item-col-title">
                                                        <div> <span>Name</span> </div>
                                                    </div>
                                                    <div class="item-col item-col-header item-col-sales">
                                                        <div> <span>Sales</span> </div>
                                                    </div>
                                                    <div class="item-col item-col-header item-col-stats">
                                                        <div class="no-overflow"> <span>Stats</span> </div>
                                                    </div>
                                                    <div class="item-col item-col-header item-col-date">
                                                        <div> <span>Published</span> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="item-row">
                                                    <div class="item-col fixed item-col-img xs">
                                                        <a href="">
                                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg)"></div>
                                                        </a>
                                                    </div>
                                                    <div class="item-col item-col-title no-overflow">
                                                        <div>
                                                            <a href="" class="">
                                                                <h4 class="item-title no-wrap"> 12 Myths Uncovered About IT &amp; Software </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-sales">
                                                        <div class="item-heading">Sales</div>
                                                        <div> 4958 </div>
                                                    </div>
                                                    <div class="item-col item-col-stats">
                                                        <div class="item-heading">Stats</div>
                                                        <div class="no-overflow">
                                                            <div class="item-stats sparkline" data-type="bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-date">
                                                        <div class="item-heading">Published</div>
                                                        <div> 21 SEP 10:45 </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="item-row">
                                                    <div class="item-col fixed item-col-img xs">
                                                        <a href="">
                                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg)"></div>
                                                        </a>
                                                    </div>
                                                    <div class="item-col item-col-title no-overflow">
                                                        <div>
                                                            <a href="" class="">
                                                                <h4 class="item-title no-wrap"> 50% of things doesn&#x27;t really belongs to you </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-sales">
                                                        <div class="item-heading">Sales</div>
                                                        <div> 192 </div>
                                                    </div>
                                                    <div class="item-col item-col-stats">
                                                        <div class="item-heading">Stats</div>
                                                        <div class="no-overflow">
                                                            <div class="item-stats sparkline" data-type="bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-date">
                                                        <div class="item-heading">Published</div>
                                                        <div> 21 SEP 10:45 </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="item-row">
                                                    <div class="item-col fixed item-col-img xs">
                                                        <a href="">
                                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg)"></div>
                                                        </a>
                                                    </div>
                                                    <div class="item-col item-col-title no-overflow">
                                                        <div>
                                                            <a href="" class="">
                                                                <h4 class="item-title no-wrap"> Vestibulum tincidunt amet laoreet mauris sit sem aliquam cras maecenas vel aliquam. </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-sales">
                                                        <div class="item-heading">Sales</div>
                                                        <div> 2143 </div>
                                                    </div>
                                                    <div class="item-col item-col-stats">
                                                        <div class="item-heading">Stats</div>
                                                        <div class="no-overflow">
                                                            <div class="item-stats sparkline" data-type="bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-date">
                                                        <div class="item-heading">Published</div>
                                                        <div> 21 SEP 10:45 </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="item-row">
                                                    <div class="item-col fixed item-col-img xs">
                                                        <a href="">
                                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/why_this/128.jpg)"></div>
                                                        </a>
                                                    </div>
                                                    <div class="item-col item-col-title no-overflow">
                                                        <div>
                                                            <a href="" class="">
                                                                <h4 class="item-title no-wrap"> 10 tips of Object Oriented Design </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-sales">
                                                        <div class="item-heading">Sales</div>
                                                        <div> 124 </div>
                                                    </div>
                                                    <div class="item-col item-col-stats">
                                                        <div class="item-heading">Stats</div>
                                                        <div class="no-overflow">
                                                            <div class="item-stats sparkline" data-type="bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-date">
                                                        <div class="item-heading">Published</div>
                                                        <div> 21 SEP 10:45 </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="item-row">
                                                    <div class="item-col fixed item-col-img xs">
                                                        <a href="">
                                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/w7download/128.jpg)"></div>
                                                        </a>
                                                    </div>
                                                    <div class="item-col item-col-title no-overflow">
                                                        <div>
                                                            <a href="" class="">
                                                                <h4 class="item-title no-wrap"> Sometimes friend tells it is cold </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-sales">
                                                        <div class="item-heading">Sales</div>
                                                        <div> 10214 </div>
                                                    </div>
                                                    <div class="item-col item-col-stats">
                                                        <div class="item-heading">Stats</div>
                                                        <div class="no-overflow">
                                                            <div class="item-stats sparkline" data-type="bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-date">
                                                        <div class="item-heading">Published</div>
                                                        <div> 21 SEP 10:45 </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="item-row">
                                                    <div class="item-col fixed item-col-img xs">
                                                        <a href="">
                                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/pankogut/128.jpg)"></div>
                                                        </a>
                                                    </div>
                                                    <div class="item-col item-col-title no-overflow">
                                                        <div>
                                                            <a href="" class="">
                                                                <h4 class="item-title no-wrap"> New ways of conceptual thinking </h4>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-sales">
                                                        <div class="item-heading">Sales</div>
                                                        <div> 3217 </div>
                                                    </div>
                                                    <div class="item-col item-col-stats">
                                                        <div class="item-heading">Stats</div>
                                                        <div class="no-overflow">
                                                            <div class="item-stats sparkline" data-type="bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="item-col item-col-date">
                                                        <div class="item-heading">Published</div>
                                                        <div> 21 SEP 10:45 </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card sameheight-item sales-breakdown" data-exclude="xs,sm,lg">
                                        <div class="card-header">
                                            <div class="header-block">
                                                <h3 class="title"> Sales breakdown </h3>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="dashboard-sales-breakdown-chart" id="dashboard-sales-breakdown-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section map-tasks">
                            <div class="row sameheight-container">
                                <div class="col-md-8">
                                    <div class="card sameheight-item" data-exclude="xs,sm">
                                        <div class="card-header">
                                            <div class="header-block">
                                                <h3 class="title"> Sales by countries </h3>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div id="dashboard-sales-map" style="width: 100%; height: 400px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card tasks sameheight-item" data-exclude="xs,sm">
                                        <div class="card-header bordered">
                                            <div class="header-block">
                                                <h3 class="title"> Tasks </h3>
                                            </div>
                                            <div class="header-block pull-right"> <a href="" class="btn btn-primary btn-sm rounded pull-right">
                                Add new
                            </a> </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="tasks-block">
                                                <ul class="item-list">
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    checked="checked"> 
                                                    <span>Meeting with embassador</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    checked="checked"> 
                                                    <span>Confession</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    > 
                                                    <span>Time to start building an ark</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    > 
                                                    <span>Beer time with dudes</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    checked="checked"> 
                                                    <span>Meeting new girls</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    > 
                                                    <span>Remember damned home address</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    > 
                                                    <span>Get home before you got sleep</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    checked="checked"> 
                                                    <span>Meeting with embassador</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    checked="checked"> 
                                                    <span>Confession</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    > 
                                                    <span>Time to start building an ark</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    > 
                                                    <span>Beer time with dudes</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    checked="checked"> 
                                                    <span>Meeting new girls</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="item-row">
                                                            <div class="item-col item-col-title"> <label>
                                                    <input class="checkbox" type="checkbox"
                                                    > 
                                                    <span>Remember damned home address</span>
                                                </label> </div>
                                                            <div class="item-col fixed item-col-actions-dropdown">
                                                                <div class="item-actions-dropdown">
                                                                    <a class="item-actions-toggle-btn"> <span class="inactive">
                                                            <i class="fa fa-cog"></i>
                                                        </span> <span class="active">
                                                        <i class="fa fa-chevron-circle-right"></i>
                                                        </span> </a>
                                                                    <div class="item-actions-block">
                                                                        <ul class="item-actions-list">
                                                                            <li>
                                                                                <a class="remove" href="#" data-toggle="modal" data-target="#confirm-modal"> <i class="fa fa-trash-o "></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="check" href="#"> <i class="fa fa-check"></i> </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="edit" href="item-editor.html"> <i class="fa fa-pencil"></i> </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                    <footer class="footer">
                        <div class="footer-block buttons"> <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe> </div>
                        <div class="footer-block author">
                            <ul>
                                <li> created by <a href="https://github.com/modularcode">ModularCode</a> </li>
                                <li> <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a> </li>
                            </ul>
                        </div>
                    </footer>
                    <div class="modal fade" id="modal-media">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                                    <h4 class="modal-title">Media Library</h4>
                                </div>
                                <div class="modal-body modal-tab-container">
                                    <ul class="nav nav-tabs modal-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a> </li>
                                        <li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a> </li>
                                    </ul>
                                    <div class="tab-content modal-tab-content">
                                        <div class="tab-pane fade" id="gallery" role="tabpanel">
                                            <div class="images-container">
                                                <div class="row"> </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                            <div class="upload-container">
                                                <div id="dropzone">
                                                    <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                        <div class="dz-message-block">
                                                            <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Insert Selected</button> </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <div class="modal fade" id="confirm-modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                                    <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure want to do this?</p>
                                </div>
                                <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button> </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </div>
            </div>
            <!-- Reference block for JS -->
            <div class="ref" id="ref">
                <div class="color-primary"></div>
                <div class="chart">
                    <div class="color-primary"></div>
                    <div class="color-secondary"></div>
                </div>
            </div>
            <script>
          
                
            </script>
            <script>
                (function(i, s, o, g, r, a, m)
                {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function()
                    {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-80463319-2', 'auto');
                ga('send', 'pageview');
            </script>
            <script src="../recursos/js/vendor.js"></script>
            <script src="../recursos/js/app.js"></script>
        </body>

</html>


<?php

  }
  else
  {
    header("location: ./login.php");
  }
 ?>