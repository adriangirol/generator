<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <!-- Tema opcional -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

        <!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <title>Generator Team</title>
        <script>
            $(function () {
                /* START OF DEMO JS - NOT NEEDED */
                if (window.location == window.parent.location) {
                    $('#fullscreen').html('<span class="glyphicon glyphicon-resize-small"></span>');
                    $('#fullscreen').attr('href', 'http://bootsnipp.com/mouse0270/snippets/PbDb5');
                    $('#fullscreen').attr('title', 'Back To Bootsnipp');
                }
                $('#fullscreen').on('click', function (event) {
                    event.preventDefault();
                    window.parent.location = $('#fullscreen').attr('href');
                });
                $('#fullscreen').tooltip();
                /* END DEMO OF JS */

                $('.navbar-toggler').on('click', function (event) {
                    event.preventDefault();
                    $(this).closest('.navbar-minimal').toggleClass('open');
                })
            });
        </script>
        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, serif;
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }
            h4 {
                font-family: 'Pacifico', cursive;
            }
            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                /*border: 1px solid #D0D0D0;*/
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 5px 0 5px;
            }
            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container {
                margin: 10px;
                /*border: 1px solid #D0D0D0;*/
                /*box-shadow: 0 0 8px #D0D0D0;*/
            }
            #fullscreen {
                position: fixed;
                top: 10px;
                right: 10px;
            }
            /* END OF DEMO CSS */

            .animate {
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                -ms-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }

            .navbar-fixed-left {
                position: fixed;
                top: 0px;
                left: 0px;
                border-radius: 0px;
            }

            .navbar-minimal {
                width: 60px;		
                min-height: 60px;
                max-height: 100%;
                background-color: rgb(51, 51, 51);
                background-color: rgba(51, 51, 51, 0.8);
                border-width: 0px;
                z-index: 1000;
            }

            .navbar-minimal > .navbar-toggler {
                position: relative;
                min-height: 60px;
                border-bottom: 1px solid rgb(81, 81, 81);
                z-index: 100;
                cursor: pointer;
            }

            .navbar-minimal.open > .navbar-toggler,
            .navbar-minimal > .navbar-toggler:hover {
                background-color: rgb(158, 202, 59);
            }

            .navbar-minimal > .navbar-toggler > span {
                position: absolute;
                top: 50%;
                right: 50%;
                margin: -8px -8px 0 0;
                width: 16px;
                height: 16px;
                background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjIuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjMycHgiIHZpZXdCb3g9IjAgMCAxNiAzMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTYgMzIiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0ZGRkZGRiIgZD0iTTEsN2gxNGMwLjU1MiwwLDEsMC40NDgsMSwxcy0wLjQ0OCwxLTEsMUgxQzAuNDQ4LDksMCw4LjU1MiwwLDgKCVMwLjQ0OCw3LDEsN3oiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNGRkZGRkYiIGQ9Ik0xLDEyaDE0YzAuNTUyLDAsMSwwLjQ0OCwxLDFzLTAuNDQ4LDEtMSwxSDFjLTAuNTUyLDAtMS0wLjQ0OC0xLTEKCVMwLjQ0OCwxMiwxLDEyeiIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0ZGRkZGRiIgZD0iTTEsMmgxNGMwLjU1MiwwLDEsMC40NDgsMSwxcy0wLjQ0OCwxLTEsMUgxQzAuNDQ4LDQsMCwzLjU1MiwwLDMKCVMwLjQ0OCwyLDEsMnoiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNGRkZGRkYiIGQ9Ik0xLjMzLDI4Ljk3bDExLjY0LTExLjY0YzAuNDU5LTAuNDU5LDEuMjA0LTAuNDU5LDEuNjYzLDAKCWMwLjQ1OSwwLjQ1OSwwLjQ1OSwxLjIwNCwwLDEuNjYzTDIuOTkzLDMwLjYzM2MtMC40NTksMC40NTktMS4yMDQsMC40NTktMS42NjMsMEMwLjg3MSwzMC4xNzQsMC44NzEsMjkuNDMsMS4zMywyOC45N3oiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yLjk5MywxNy4zM2wxMS42NDEsMTEuNjRjMC40NTksMC40NTksMC40NTksMS4yMDQsMCwxLjY2MwoJcy0xLjIwNCwwLjQ1OS0xLjY2MywwTDEuMzMsMTguOTkzYy0wLjQ1OS0wLjQ1OS0wLjQ1OS0xLjIwNCwwLTEuNjYzQzEuNzg5LDE2Ljg3MSwyLjUzNCwxNi44NzEsMi45OTMsMTcuMzN6Ii8+Cjwvc3ZnPgo=);
                background-repeat: no-repeat;
                background-position: 0 0;
                -webkit-transition: -webkit-transform .3s ease-out 0s;
                -moz-transition: -moz-transform .3s ease-out 0s;
                -o-transition: -moz-transform .3s ease-out 0s;
                -ms-transition: -ms-transform .3s ease-out 0s;
                transition: transform .3s ease-out 0s;
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            .navbar-minimal > .navbar-menu {
                position: absolute;
                top: -1000px;
                left: 0px;
                margin: 0px;
                padding: 0px;
                list-style: none;
                z-index: 50;
                background-color: rgb(51, 51, 51);
                background-color: rgba(51, 51, 51, 0.8);
            }
            .navbar-minimal > .navbar-menu > li {
                margin: 0px;
                padding: 0px;
                border-width: 0px;
                height: 54px;
            }
            .navbar-minimal > .navbar-menu > li > a {
                position: relative;
                display: inline-block;
                color: rgb(255, 255, 255);
                padding: 20px 23px;
                text-align: left;
                cursor: pointer;
                border-bottom: 1px solid rgb(81, 81, 81);
                width: 100%;
                text-decoration: none;
                margin: 0px;
            }

            .navbar-minimal > .navbar-menu > li > a:last-child {
                border-bottom-width: 0px;
            }
            .navbar-minimal > .navbar-menu > li > a:hover {
                background-color: rgb(158, 202, 59);
            }
            .navbar-minimal > .navbar-menu > li > a > .glyphicon {
                float: right;
            }

            .navbar-minimal.open {
                width: 320px;
            }

            .navbar-minimal.open > .navbar-toggler > span {
                background-position: 0 -16px;
                -webkit-transform: rotate(-180deg);
                -moz-transform: rotate(-180deg);
                -o-transform: rotate(-180deg);
                -ms-transform: rotate(-180deg);
                transform: rotate(-180deg);
            }

            .navbar-minimal.open > .navbar-menu {
                top: 60px;
                width: 100%;
                min-height: 100%;
            }

            @media (min-width: 768px) {
                .navbar-minimal.open {
                    width: 60px;
                }
                .navbar-minimal.open > .navbar-menu {
                    overflow: visible;
                }
                .navbar-minimal > .navbar-menu > li > a > .desc {
                    position: absolute;
                    display: inline-block;
                    top: 50%;
                    left: 130px;
                    margin-top: -20px;
                    margin-left: 20px;
                    text-align: left;
                    white-space: nowrap;
                    padding: 10px 13px;
                    border-width: 0px !important;
                    background-color: rgb(51, 51, 51);
                    background-color: rgba(51, 51, 51, 0.8);
                    opacity: 0;
                }
                .navbar-minimal > .navbar-menu > li > a > .desc:after {
                    z-index: -1;
                    position: absolute;
                    top: 50%;
                    left: -10px;
                    margin-top: -10px;
                    content:'';
                    width: 0;
                    height: 0;
                    border-top: 10px solid transparent;
                    border-bottom: 10px solid transparent; 	
                    border-right: 10px solid rgb(51, 51, 51);
                    border-right-color: rgba(51, 51, 51, 0.8);
                }
                .navbar-minimal > .navbar-menu > li > a:hover > .desc {
                    left: 60px;
                    opacity: 1;
                }
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
            <div class="navbar-toggler animate">
                <span class="menu-icon"></span>
            </div>
            <ul class="navbar-menu animate">
                <li>
                    <a href="#about-us" class="animate">
                        <span class="desc animate"> Who We Are </span>
                        <span class="glyphicon glyphicon-user"></span>
                    </a>
                </li>
                <li>
                    <a href="#blog" class="animate">
                        <span class="desc animate"> What We Say </span>
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </a>
                </li>
                <li>
                    <a href="#contact-us" class="animate">
                        <span class="desc animate"> How To Reach Us </span>
                        <span class="glyphicon glyphicon-comment"></span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- START OF HTML FOR DEMO - NOT NEEDED -->
<!--        <div class="container">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                    <h1 class="title">Minimal Menu</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 white-background">
                    <p>Please keep in mind that this menu uses no javascript and may not work properly in all browsers. I have only tested it on chrome.</p>
                    <p><em><strong>ReliQ</strong></em> has confirmed this works for "Firefox". Thanks!</p>
                    <p>This menu was made in about 45 minutes so it is bound to have some bugs. Test it out and let me know what you think in the comments below.</p>
                    <p>To view this snippet in fullscreen click on the button in the top right hand corner or if you are in fullscreen click on the same button to return to Bootsnipp!</p>
                    <p>Alright now back to playing Watch Dogs and Wolfenstein: The New Order</p>    	    
                </div>
            </div>
        </div>-->
       
        <!-- END OF HTML FOR DEMO - NOT NEEDED -->
        <!--<div id="container">-->
        <div align="center">
            <br>
            <img src="<?= base_url() ?>res/icon.png" alt=""/>
        </div>
        <br>
        <?php if (isset($_SESSION['logeado']) && ($_SESSION['logeado'] == 1)) { ?>
            <div id="body">
                <div class="head">
                    <?php echo anchor('Jugador/ListaJugadores', ' Lista Jugadores', array('class' => 'btn btn-default btn-block')); ?>
                    <?php echo anchor('Equipo/GenerarEquipos', 'Repartir Equipos', array('class' => 'btn btn-default btn-block')); ?>
                    <?php echo anchor('Jugador/NuevoJugador/', 'Nuevo Jugador', array('class' => 'btn btn-default btn-block')); ?>
                    <?php echo anchor('Jugador/EditarJugador/', 'Editar Jugador', array('class' => 'btn btn-default btn-block')); ?>

                </div>

            </div>
            <div class="body">

                <?php
                if (isset($cuerpo)) {
                    echo "                        
                                <br>
                                <hr>
                                <br>";
                    echo $cuerpo;
                }
                ?>
            </div>       


            <br>
            <div class="row">
                <div class="hidden-xs-down hidden-sm-down col-md-12" >
                    <p class="footer"><br> <?php echo anchor('Welcome/Salir', 'Salir', array('class' => 'btn btn-danger btn-block')); ?> <br></p>
                </div>
            </div>
            <!--</div>-->
        <?php } else { ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6" >
                        <form class="form" action="<?php echo base_url() . 'index.php/Welcome/Loger'; ?>" method="post">




                            <h4 class="control-label">Usuario </h4>
                            <input type="text" class="form-control" id="user" name="user">

                            <br>
                            <h4 class="control-label">Password </h4>
                            <input type="password" class="form-control" id="pwd" name="pwd">

                            <br>
                            <button type="submit" class="btn btn-block btn-success btn-lg">Entrar</button>





                        </form>
                    </div>
                </div>
            </div>
            <br>
        <?php } ?>
    </body>

</html>