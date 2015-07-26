<!DOCTYPE html>
<head>
    <title>Restaurants</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <link href="./main.css" rel="stylesheet" />
    <link href="./custom.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container-fluid">


        <!-- Brand and toggle get grouped for better mobile display -->
              
              <div class="navbar-header">
                  
                <a href="#" class="pull-left"><img style="height: auto; width: auto; padding-bottom: 20px; max-width: 108px; max-height: 72px; margin-top: 8px; margin-bottom: 15px;" src="./images/SAPlogo.jpg"></a>
  
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class='pull-right'>
                    <button class="button btn-info" id="btn-reset">Back</button>
                </div>
            </div>

            <div style="font-family: 'Pacifico', cursive; font-size: 34px;">Lunch Buddies Results 
                <?php
                    echo date('Y-m-d');
                ?>
            </div>



             <!--div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav main-nav  clear navbar-right ">
                    <li></li>
                    <li><a class="color_animation" href="#reservation">RESERVATION</a></li>
                    <li><a class="color_animation" href="#contact">CONTACT</a></li>
                </ul>
            </div--><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>
<br><br><br>

<div id="carousel-example" class="carousel slide carousel-custom" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
            <div class="carousel-inner" id="carousel-inner-custom">
            </div>
        </div>
    </div>
    <!-- Controls --> <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
 <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

</div>

    <div class="map-container" style="margin-top: 0px; padding-left: 0px;padding-right: 0px; height: 100%">
      <div id="map-canvas" style='width: 100%; height: 650px;'></div>
    </div>

</body>
<script type="text/javascript" src="./googlemaps.js"></script>
<script type="text/javascript" src="./callresetphp.js"></script>