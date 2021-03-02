<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>AirPupnMeow.com: All the love, none of the crap!</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AirPupnMeow</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <h1> Muitos Pets</h1>
<?php
    if(isset($_REQUEST['submit_btn']))
    {
       echo "<div>";
       $CPF = $_POST["CPF"];
       echo "</div>";
    }
?>
<form method="post" action="">
  Digite o CPF: 
  <input type="number" name="CPF">
  <br><br>

  <input type="submit" value="Verifica CPF" name="submit_btn">
</form>

<?php 


$d1=  (int)substr($CPF, 0,1);
$d2=  (int)substr($CPF, 1, 1);
$d3=  (int)substr($CPF, 2, 1);
$d4=  (int)substr($CPF, 3, 1);
$d5=  (int)substr($CPF, 4, 1);
$d6=  (int)substr($CPF, 5, 1);
$d7=  (int)substr($CPF, 6, 1);
$d8=  (int)substr($CPF, 7, 1);
$d9=  (int)substr($CPF, 8, 1);
$d10= (int)substr($CPF, 9, 1);
$d11= (int)substr($CPF, 10, 1);

//calculo do primeiro digito
$prim = $d1*10+$d2*9+$d3*8+$d4*7+$d5*6+$d6*5+$d7*4+$d8*3+$d9*2;
$prim = $prim % 11;
if ($prim <2)
    $prim = 0;
else
    $prim = 11-$prim;


//calculo do segundo digito
$sec = $d1*11+$d2*10+$d3*9+$d4*8+$d5*7+$d6*6+$d7*5+$d8*4+$d9*3+$d10*2;
$sec = $sec % 11;
if($sec <2)
    $sec = 0;
else
    $sec =11-$sec;


//verifica aqui
if($prim.$sec == $d10.$d11)
    echo 'CPF VALIDO';
else
    echo 'CPF INVALIDO';

?>

            <p>This is a template for a simple marketing or informational website. It includes a large callout called the
                hero unit and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui. </p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui. </p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                    fermentum massa justo sit amet risus.</p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

        <footer>
            <p>&copy; AirPupnMeow.com</p>
        </footer>
    </div>
    <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>