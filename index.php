<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="author" content="">

    <title>SAP Lunch Buddies</title>
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <link href="./custom.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    
    <!--link href="./custom.css" rel="stylesheet" /-->
    <link rel="stylesheet" href="./main.css" media="screen" type="text/css">
    <!-- Bootstrap 
    ================================================== -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="./callphp.js"></script>-->
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container-fluid">


        <!-- Brand and toggle get grouped for better mobile display -->
              
              <div class="navbar-header">
                  
                <a href="#" class="pull-left"><img style="height: auto; width: auto; max-width: 108px; max-height: 72px; margin-top: 8px; margin-bottom: 8px;" src="./images/SAPlogo.jpg"></a>
  
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

             <!--div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav main-nav  clear navbar-right ">
                    <li><a class="color_animation" href="#featured">FEATURED</a></li>
                    <li><a class="color_animation" href="#reservation">RESERVATION</a></li>
                    <li><a class="color_animation" href="#contact">CONTACT</a></li>
                </ul>
            </div--><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>

<div id="top" class="starter_container bg">
    <div class="follow_container">
        <div class="starter_follow">
            <h2 class="top-title"> Lunch Buddy</h2>
            <h2 class="white second-title">" Enjoy the food. Get Expanded and Updated. "</h2>
            <hr>
             <form class="form-inline" role="form"> 
                  <div class="row">
                    <!--div class="col-lg-2 col-md-2 col-xs-2"></div-->

                    <div class="col-lg-4 col-md-4 col-xs-4">
                      <input type="name" name="enter_name" id="name-box" required="required" class="form" placeholder="Your Name" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                    <input type="email" name="email" id="email1" required="required" class="form" placeholder="Email" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                      <button type="submit" id="matchup" name="submit" class="form-btn form-btn1 semibold">Match Up for Me</button> 
                    </div>
                   </div>
              </form>   
          </div>
      </div>
</div>

<section id="story" class="description_content">
        <div class="limit">
            <div class="description_body margin-right">
                <h1>Love Lunch Buddy Program? </h1>
                <div class="fa fa-cutlery fa-2x"></div>
                <p>If you want the join our matchup event every day, every week..</p>
                <p>Please subscrbe! </P>
                <p>Also you can specify you customize your diet preferences and how you want to involve, we will get better recommendation for you! </p>
            </div>
        </div>
</section>
 
<section id="reservation" class="background_content">
        <h1>
        Subscribe Lunch Buddy</h1>
</section>

<section class="description_content">
        <div class="limit">
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form" style="float:center">
                    <!-- Form -->
                    <form id="signup-form">
                        <!-- Left Inputs -->

                        <div class="container" style="text-align:center">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-xs-12">
                                    <div class="row">

                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                            <input name="full_name" required="required" class="form" placeholder="Your Name"/>
                                            <!--input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" /-->
                                            <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                            <input type="password" id="inputPassword" required="required"  class="form"  placeholder="Password"/>
                                            <input type="aboutme" name="aboutme" id="aboutme" required="required" class="form" placeholder="Say Something about yourself!!" />
                                                                                        
                                            <div >
                                            <label style = "padding: 15px; font-size:13px;"> Diet preferces </label>   
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="peanuts" value="option1" style = "padding: 15px; font-size:13px; margin-bottom:25px;"> Peanut allergy 
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="gluten-free" value="option2" style="padding: 15px; font-size:13px; margin-bottom:25px;">Gluten free 
                                            </label>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="vegan" value="option3" style="padding: 15px; font-size:13px; margin-bottom:25px;">Vegetarian
                                            </label>

                                            </div>
                                            <div >
                                                <label style = "padding: 15px; font-size:13px;"> Match me up </label>   
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="every day" value="option1" > Every day 
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="every week" value="option2" > Every week 
                                            </label>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="every month" value="option3" > Every month
                                            </label>


                                            </div>

                                        </div>

                                    </div>
                                    
                                    <div class="col-xs-12">
                                            <!-- Send Button -->
                                            <button type="submit" id="button-signup" name="submit" class=" form-btn form-btn1 semibold" style="float:center">Subscribe Now!</button> 
                                    </div>
                
                           </div>             
                        </div>
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                </div>
            </div>
        </div>
</section>

</body>

</html>
<script src="./callphp.js"></script>