<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="template/css/grid.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/content.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/menu.css"/>
        <script src="js/lib/jquery-2.2.0.min.js"></script>
        <script src="js/lib/jquery.validate.js"></script>
         <script src="js/lib/mustache.min.js"></script>
        <script src="js/main.js"></script>

        <title>{$title}</title>
    </head>

    <body>

        <div id="popup" class="popup">
            <h1 class="title">Title</h1>
            <p class="content">
                Contenuto
            </p>
        </div>

        <!-- BEGIN WRAPPER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            <div class="header">
                <img id="logo" src="template/img/logo.gif"/>

                <div id="title">EatOnline</div>

                <div id="breadcrumb">
                    <p>> {$breadcrumb}</p>
                </div>

                <div id="searchform">
                    <input type="text" placeholder="Cerca cibi e bevande..."/>
                </div>
            </div>
            <!-- END HEADER -->

            <!-- BEGIN NAVIGATION -->
            <div class="navigation">
              <div class="bif-left"></div>
              <div class="bif-right"></div>
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="hsubs" href="#">Cibi</a>
                        <div class="submenu">
                            <a href="index.php?controller=prodotto&task=lista.primi_piatti">Primi piatti</a>
                            <a href="index.php?controller=prodotto&task=lista.secondi_piatti">Secondi piatti</a>
                            <a href="index.php?controller=prodotto&task=lista.contorni">Contorni</a>
                            <a href="index.php?controller=prodotto&task=lista.pizze">Pizze</a>
                        </div>
                    </li>
                    <li><a href="index.php?controller=prodotto&task=lista.bevande">Bevande</a></li>
                    <li><a href="index.php?controller=carrello&task=default">Carrello</a></li>
                    {if !$logged}
                        <li><a href="index.php?controller=registrazione&task=registra">Registrati</a></li>
                        <li><a href="index.php?controller=registrazione&task=modulo_attivazione">Attivati</a></li>
                    {/if}
                    <li><a href="index.php?controller=home&task=contatti">Contatti</a></li>
                </ul>
            </div>
            <!-- END NAVIGATION -->

            <!-- BEGIN CENTRAL CONTAINER -->
            <div class="central_container">
                <h1>{$content_title}</h1>

                <!-- BEGIN LEFT COLUMN -->
                <div class="leftcolumn">
                    {$main_content}
                </div>
                <!-- END LEFT COLUMN -->

                <!-- BEGIN RIGHT COLUMN -->
                <div class="rightcolumn">
                    {$right_content.modulo_login}

                    {$right_content.carrello_laterale}

                    <ul>
                        {section name=i loop=$tasti_laterali}
                            <li>
                                <a href="{$tasti_laterali[i].link}">{$tasti_laterali[i].testo}</a>
                                {if $tasti_laterali[i].submenu!=false}
                                    <ul>
                                        {section name=j loop=$tasti_laterali[i].submenu}
                                            <li><a href="{$tasti_laterali[i].submenu[j].link}">{$tasti_laterali[i].submenu[j].testo}</a></li>
                                            {/section}
                                    </ul>
                                {/if}
                            </li>
                        {/section}
                    </ul>
                </div>
                <!-- END RIGHT COLUMN -->

            </div>
            <!-- END CENTRAL CONTAINER -->

            <!-- BEGIN FOOTER -->
            <div class="footer">
                <p>Copyright &copy; 2016 EatOnline&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved</p>
                <p>Layout design by Gennaro Manzo</p>
            </div>
            <!-- END FOOTER -->

        </div>
        <!-- END WRAPPER -->
    </body>

</html>
