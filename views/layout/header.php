<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->getTitle();?></title>        
        <link rel="icon" href="<?php echo BASE_URL;?>img/favicon.ico">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>


        <!-- Font awesome -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Animate.css -->
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL;?>css/animate.css"  media="screen,projection"/>
        <!-- jQuery -->
        <script type="text/javascript" src="<?php echo BASE_URL;?>js/jquery-2.1.1.min.js"></script>

        <!-- Materialize -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL;?>css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="<?php echo BASE_URL;?>js/materialize.min.js"></script>

        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>


        <!-- My Scripts -->
        <link href="<?php echo BASE_URL;?>css/mystyle.css" rel="stylesheet" type="text/css">
        <script src="<?php echo BASE_URL;?>js/functions.js"></script>
    </head>
    <body>
        <header>
            <?php if($admin){ ?>
            <span id="base-url" style="display:none"><?php echo BASE_URL;?></span>
            <div id="wrapper">
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="center-align sidebar-icon"><a href="<?php echo BASE_URL;?>admin/customers"><i class="fa fa-user fa-2x"></i></a></li>
                        <li class="center-align sidebar-icon"><a href="<?php echo BASE_URL;?>admin/invoices"><i class="fa fa-dollar fa-2x"></i></a></li>
                        <li class="center-align sidebar-icon"><a href="<?php echo BASE_URL;?>admin/rooms"><i class="fa fa-bed fa-2x"></i></a></li>
                        <li class="center-align sidebar-icon"><a href="<?php echo BASE_URL;?>admin/booking"><i class="fa fa-calendar fa-2x"></i></a></li>
                    </ul>
                </div>
                <span id="picture-info-hidden" style="display:none"><img src="<?php echo BASE_URL;?>img/WILLSMITH.png"/></span>
                <div id="sidebar-wrapper-infos">
                    <a href="#!" class="brand-logo center">
                        <img src="<?php echo BASE_URL;?>img/bestwestern.png" id="brand"/>
                    </a>
                    <div id="infos-sidebar">
                        <?php if($customer) { ?>
                            <p name="id"><?php echo $user['id'] ?></p>
                            <p name="Nom"><?php echo $user['name'].' '.$user['firstname'] ?></p>
                            <p name="Grade"><?php echo $user['rank'] ?></p>
                            <p name="Pays"><?php echo $user['country'] ?></p>
                            <p name="Société"><?php echo $user['company'] ?></p>
                            <p name="Email"><?php echo $user['email'] ?></p>
                            <p name="Téléphone"><?php echo $user['phone'] ?></p>
                            <p name="Addresse"><?php echo $user['address'] ?></p>
                            <p name="Présent">
                                <?php if($user['present']){ ?>
                                    OUI
                                <?php }else{ ?>
                                    NON
                                <?php }?>
                            </p>
                        <?php } ?>  
                    </div>

                </div>

            </div>
            <?php }else{ ?>
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">
                        <img src="<?php echo BASE_URL;?>img/logoWebPhone@2x.png" style="width: 73%">
                    </a>
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
            <?php } ?>
        </header>