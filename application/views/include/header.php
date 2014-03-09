<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta itemprop="name" content="juangiraldo222@yahoo.es && luismec90@gmail.com" />
        <meta itemprop="author" content="juangiraldo222@yahoo.es && luismec90@gmail.com" />
        <meta itemprop="creator" content="juangiraldo222@yahoo.es && luismec90@gmail.com" />
        <meta itemprop="provider" content="juangiraldo222@yahoo.es && luismec90@gmail.com" />
        <meta itemprop="copyright" content="Trópico Internacional" />
        <meta name="distributor" content="Local" />
        <meta itemprop="contentRating" content="General" />
        <meta name="robots" content="All" />
        <meta name="revisit-after" content="7 days" />
        <meta name="description" content="Agroexportación,comercializacion de alimentos, fomento a la competitividad agropecuarioa con sostenibilidad ambiental y equidad social" />
        <meta name="keywords" content="agroexportación, internacionalización,comercio internacional,comercio exterior,agroindustria,e-commerce,fresh food, sustainable produced food, rural social equity, competitividad, empleo rural, educación rural, globalización, sostenibilidad, pymes agroindustriales, agropecuario, agromercados, food comercialization, fruits, vegetables, sustainability, forest preservation, forest conservation, free trade, comercio justo, asociatividad" />
        <link href="<?= base_url() ?>assets/img/tree.gif" rel="icon" type="image/x-icon">
        <title>::Trópico Internacional::</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/libs/bootstrap-3.1.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/libs/font-awesome-4.0.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/global.css">
        <?php if (isset($css)) foreach ($css as $row) { ?>
                <link rel="stylesheet" href="<?= base_url() ?>assets/<?= $row ?>.css">
            <?php } ?>

        <!-- Custom Google Web Font -->
        <!--        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

        <!-- Add custom CSS here -->
        <!--<link href="css/landing-page.css" rel="stylesheet">-->

    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Tropico Internacional</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Tropico Internacional</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url() ?>inicio">Inicio</a>
                        <li><a href="<?= base_url() ?>empresa">Empresa</a>
                        </li>
                        <li><a href="<?= base_url() ?>services">Servicios</a>
                        </li>
                        <li><a href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
