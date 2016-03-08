<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->getTitle();?></title>        
        <link rel="icon" href="<?php echo BASE_URL;?>img/favicon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- jQuery -->
        <script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-2.1.1.min.js"></script>
        <!-- Materialize -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL;?>css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="<?php echo BASE_URL;?>js/materialize.min.js"></script>
        <!-- My Scripts -->
        <link href="<?php echo BASE_URL;?>css/mystyle.css" rel="stylesheet" type="text/css">
        <script src="<?php echo BASE_URL;?>js/functions.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Logo</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                </div>
            </nav>
        </header>