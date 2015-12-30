<?php /* Smarty version 3.1.27, created on 2015-12-30 20:03:05
         compiled from "template\home_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2473856842a69b76ff1_53845708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a1190245c6217f33b57eddd6c8457473daca91' => 
    array (
      0 => 'template\\home_default.tpl',
      1 => 1451502183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2473856842a69b76ff1_53845708',
  'variables' => 
  array (
    'title' => 0,
    'breadcrumb' => 0,
    'logged' => 0,
    'content_title' => 0,
    'main_content' => 0,
    'right_content' => 0,
    'tasti_laterali' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56842a69c20f03_44940091',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56842a69c20f03_44940091')) {
function content_56842a69c20f03_44940091 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2473856842a69b76ff1_53845708';
?>
<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="template/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/grid.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/content.css"/>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>

    <body>
        <!-- CONTAINER PER L'INTERA PAGINA -->
        <div class="container">


            <!-- HEADER -->
            <div class="header">

                <img class="logo" src="template/img/bg_logo.gif"/>
                <div class="title">EatOnline</div>
                <div class="breadcrumb">
                    <p>> <?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value;?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                        Ciao pirla!
                    <?php }?>
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

                <h1 class="pagetitle"><?php echo $_smarty_tpl->tpl_vars['content_title']->value;?>
</h1>

                <!-- CONTENT -->
                <div class="content">
                    <h3><?php echo $_smarty_tpl->tpl_vars['main_content']->value;?>
</h3>
                </div>

                <!-- SUBCONTENT -->
                <div class="subcontent">
                    <?php echo $_smarty_tpl->tpl_vars['right_content']->value;?>

                    <div class="subcontent-box">
                        <h1 class="menu">Menu</h1>
                        <div class="sidemenu1">
                            <ul>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tasti_laterali']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['tasti_laterali']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['tasti_laterali']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['testo'];?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['tasti_laterali']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu'] != false) {?>
                                            <ul>
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tasti_laterali']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['tasti_laterali']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['tasti_laterali']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['testo'];?>
</a></li>
                                                    <?php endfor; endif; ?>
                                            </ul>
                                        <?php }?>
                                    </li>
                                <?php endfor; endif; ?>
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

</html><?php }
}
?>