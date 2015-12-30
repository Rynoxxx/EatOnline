<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="template/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/grid.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/content.css"/>
        <title>{$title}</title>
    </head>

    <body>
        <!-- CONTAINER PER L'INTERA PAGINA -->
        <div class="container">


            <!-- HEADER -->
            <div class="header">

                <img class="logo" src="template/img/bg_logo.gif"/>
                <div class="title">EatOnline</div>
                <div class="breadcrumb">
                    <p>> {$breadcrumb}</p>
                    {if $logged}
                        Ciao pirla!
                    {/if}
                </div>
                <div class="search">
                    <input type="text" placeholder="Cerca..."/>
                </div>

            </div>


            <!-- NAVIGATION BAR -->
            <div class="navbar">

                <!-- NAVUGATION ITEM -->
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="index.php"><li>Cibi</li></a>
                    <a href="index.php"><li>Bevande</li></a>
                </ul>

            </div>


            <!-- MAIN SECTION -->
            <div class="main">

                <h1 class="pagetitle">{$content_title}</h1>

                <!-- CONTENT -->
                <div class="content">
                    <h3>{$main_content}</h3>
                </div>

                <!-- SUBCONTENT -->
                <div class="subcontent">
                    {$right_content}
                    <div class="subcontent-box">
                        <h1 class="menu">Menu</h1>
                        <div class="sidemenu1">
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
                    </div>
                </div>

            </div>


            <!-- FOOTER -->
            <div class="footer">
                <p>Copyright &copy; 2016 EatOnline&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved</p>
                <p class="credits">Layout design by <a href="http://1234.info/" title="Designer Homepage">1234.info</a> | Modified by <a href="http://lamjex.com" title="Modifyer Homepage">Gennaro Manzo</a></p>
            </div>
            <div class="corner-page-bottom"></div>


        </div>
    </body>

</html>