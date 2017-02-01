
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Stock de piezas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<script src="https://use.fontawesome.com/eab46a043e.js"></script>-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!-- <a class="navbar-brand" href="index.php?action=home">Romera Hnos. S.A.</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="#" id="home">Home</a></li>
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Campañas <span class="caret"></span>
              </a>
            <ul class="dropdown-menu">
              <li ><a href="#" id="10D8">10D8</a></li>
              <li ><a href="#" id="20F7">20F7</a></li>
            </ul>
            </li>
            <li ><a href="#" id="stock">Stock</a></li>
            <li ><a href="#" id="abm">Carga ABM</a></li>

          </ul>

        </div>
      </div>
    </nav>

    <div id="contenedor">
    
      <h1 class="page-header">Listado de piezas</h1>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              
              <th>Codigo</th>
              <th>Descripcion</th>
              <th>Campaña</th>
              <th>Cantidad</th>
              <th></th>

            </tr>
          </thead>
          <tbody>
              {foreach from=$piezas  item=pieza}
              <tr>
                <td>{$pieza['codigo']}</td>
                <td>{$pieza['descripcion']}</td>
                <td>{$pieza['codigoc']}</td>
                <td>{$pieza['cantidad']}</td>
                <td><a href="index.php?action=ver_pieza&id_pieza={$pieza['id']}"><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td>               
              </tr>
              {/foreach}
          </tbody>
        </table>
      </div>

    </div>

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <script src="js/main.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>