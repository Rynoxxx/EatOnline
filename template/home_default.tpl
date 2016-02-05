<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="template/css/grid.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/content.css"/>
        <title>{$title}</title>
    </head>

    <body>
        <!-- BEGIN WRAPPER -->
        <div class="wrapper">

            <!-- BEGIN HEADER -->
            <div class="header">
                <img id="logo" src="template/img/logo.gif"/>
                
                <div id="title">EatOnline</div>
                
                <div id="breadcrumb">
                    <p>> {$breadcrumb}</p>
                    {if $logged}
                        Ciao pirla!
                    {/if}
                </div>

                <div id="searchform">
                    <input type="text" placeholder="Cerca..."/>
                </div>
            </div>
            <!-- END HEADER -->

            <!-- BEGIN NAVIGATION -->
            <div class="navigation">
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="index.php?controller=prodotto&task=lista.primi_piatti"><li>Primi piatti</li></a>
                    <a href="index.php?controller=prodotto&task=lista.secondi_piatti"><li>Secondi piatti</li></a>
                    <a href="index.php?controller=prodotto&task=lista.contorni"><li>Contorni</li></a>
                    <a href="index.php?controller=prodotto&task=lista.pizze"><li>Pizze</li></a>
                    <a href="index.php?controller=prodotto&task=lista.bevande"><li>Bevande</li></a>
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
                    {$right_content}

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