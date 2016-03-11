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
                    <a href="<?php echo BASE_URL;?>admin/customers" class="brand-logo center">
                        <img src="<?php echo BASE_URL;?>img/bestwestern.png" id="brand"/>
                    </a>
                    <div id="infos-sidebar">
                        <?php if($customer) { ?>
                            <span id="picture-info"><img src="<?php echo BASE_URL;?>img/WILLSMITH.png"/></span>
                            <p name="Nom">Nom: <b><?php echo $customer['name'].' '.$customer['firstname'] ?></b></p>
                            <p name="Grade">Grade: <b><?php echo $customer['rank'] ?></b></p>
                            <p name="Pays">Pays: <b><?php echo $customer['country'] ?></b></p>
                            <p name="Société">Société: <b><?php echo $customer['company'] ?></b></p>
                            <p name="Email">Email: <b><?php echo $customer['email'] ?></b></p>
                            <p name="Téléphone">Téléphone: <b><?php echo $customer['phone'] ?></b></p>
                            <p name="Addresse">Addresse: <b><?php echo $customer['address'] ?></b></p>
                            <p name="Présent">Présent:
                                <b><?php if($customer['present']){ ?>
                                    OUI
                                <?php }else{ ?>
                                    NON
                                <?php }?></b>
                            </p>
                            <p><a href="<?php echo BASE_URL;?>admin/invoices?customer=<?php echo $customer['id'] ?>" class="waves-effect waves-light btn btn-infos"><i class="fa fa-dollar left"></i>Factures</a></p>
                            <p><a href="<?php echo BASE_URL;?>admin/booking?customer=<?php echo $customer['id'] ?>" class="waves-effect waves-light btn btn-infos"><i class="fa fa-calendar left"></i>Reservations</a></p>
                            <p><a href="<?php echo BASE_URL;?>admin/rooms?customer=<?php echo $customer['id'] ?>" class="waves-effect waves-light btn btn-infos"><i class="fa fa-bed left"></i>Chambres</a></p>
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