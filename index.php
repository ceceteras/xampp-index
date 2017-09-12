<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Use title if it's in the page YAML frontmatter -->
        <title>Code Kitchen Xampp Index</title>

        <meta name="description" content="XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl." />
        <meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="/ionicons-2.0.1/css/ionicons.min.css">
        <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />
    </head>
    <style type="text/css">
        nav ul {
            float: none;
            padding-top: 0px;
            margin: 0,auto !important;
            font-size: 13px;
        }
        .col-md-1{
                overflow: hidden;
            }
        .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
            color: #fff;
            background-color: #fb7a24;
        }
        body{
            background:#000;
            color:white;
        }
        a{
          color:#93b9da;
        }
        @media screen and (max-width: 767px) {
            .col-md-1{
                float: left;
                width:25%;
                overflow: hidden;
            }
            b{
                font-size: 5px
            }
            i{
                font-size: :10px;
            }
        }
    </style>

    <body>
        <nav class="navbar navbar-inverse">
            <div> 

                <h5 align="center" style="color:white; padding:3px"><img alt="Brand" width="50"  height="50" src="/main.png"> Welcome to Cece's Code Kitchen</h5>     
            </div>      
            <div class="container col-md-12"> 
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">Xampp</a></li>
                    <li role="presentation"><a href="#">About cece</a></li>
                    <li role="presentation"><a href="#">What's New</a></li>
                </ul>       
            </div>
        </nav>

        <div class="container"> 
            <div class="row">  
                <?php
                $dir = "../htdocs/";
                if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            ?>

                            <div class="col-md-1">        
                                <a href="../<?php echo $file ?>">
                                    <i style="font-size:85px;color:#93b9da" class="ion-folder"></i>
                                    <b style="font-size:10px; color:#fff" class="caption">
                                        <?php
                                        if (strlen($file) > 20)
                                            $file = substr($file, 0, strrpos(substr($file, 0, 10), ' ')) . '';
                                        echo $file;
                                        ?>  
                                    </b> 

                                </a> 
                            </div> 

                            <?php
                        }
                        closedir($dh);
                    }
                }
                ?>
            </div>       
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <footer>
            <div class="row">
                <div class="container">
                    <div class="large-12 columns">
                        <div class="row">
                            <div class="large-8 columns">
                                <ul class="social">
                                    <li class="twitter"><a href="https://twitter.com/apachefriends">Follow us on Twitter</a></li>
                                    <li class="facebook"><a href="https://www.facebook.com/we.are.xampp">Like us on Facebook</a></li>
                                    <li class="google"><a href="https://plus.google.com/+xampp/posts">Add us to your G+ Circles</a></li>
                                </ul>
                            </div>
                            <div class="large-4 columns">
                                <p class="text-right">Copyright (c) 2016, Cece</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- JS Libraries -->
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
    </body>
</html>