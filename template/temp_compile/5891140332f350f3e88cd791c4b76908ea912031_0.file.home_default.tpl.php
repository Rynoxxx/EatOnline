<?php /* Smarty version 3.1.27, created on 2016-02-11 22:19:23
         compiled from "template/home_default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:47421435256bcfadb527f06_25516026%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5891140332f350f3e88cd791c4b76908ea912031' => 
    array (
      0 => 'template/home_default.tpl',
      1 => 1455225467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47421435256bcfadb527f06_25516026',
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
  'unifunc' => 'content_56bcfadb5525d7_46318239',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56bcfadb5525d7_46318239')) {
function content_56bcfadb5525d7_46318239 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '47421435256bcfadb527f06_25516026';
?>
<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="template/css/grid.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/content.css"/>
        <link rel="stylesheet" type="text/css" href="template/css/menu.css"/>
        <?php echo '<script'; ?>
 src="js/lib/jquery-2.2.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>

    <body>
        <!-- BEGIN WRAPPER -->
        <div class="wrapper">
            <div id="popup" class="popup">
              <h1 class="title">Title</h1>
              <p class="content">
                Contenuto
              </p>
            </div>
            <!-- BEGIN HEADER -->
            <div class="header">
                <img id="logo" src="template/img/logo.gif"/>

                <div id="title">EatOnline</div>

                <div id="breadcrumb">
                    <p>> <?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value;?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                        Ciao pirla!
                    <?php }?>
                </div>

                <div id="searchform">
                    <input type="text" placeholder="Cerca cibi e bevande..."/>
                </div>
            </div>
            <!-- END HEADER -->

            <!-- BEGIN NAVIGATION -->
            <div class="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="hsubs" href="#">Cibi</a>
                        <ul class="subs">
                            <li><a href="index.php?controller=prodotto&task=lista.primi_piatti">Primi piatti</a></li>
                            <li><a href="index.php?controller=prodotto&task=lista.secondi_piatti">Secondi piatti</a></li>
                            <li><a href="index.php?controller=prodotto&task=lista.contorni">Contorni</a></li>
                            <li><a href="index.php?controller=prodotto&task=lista.pizze">Pizze</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?controller=prodotto&task=lista.bevande">Bevande</a></li>
                    <li><a href="index.php?controller=carrello&task=default">Carrello</a></li>
                    <li><a href="#">Contatti</a></li>
                </ul>
            </div>
            <!-- END NAVIGATION -->

            <!-- BEGIN CENTRAL CONTAINER -->
            <div class="central_container">
                <h1><?php echo $_smarty_tpl->tpl_vars['content_title']->value;?>
</h1>

                <!-- BEGIN LEFT COLUMN -->
                <div class="leftcolumn">
                    <?php echo $_smarty_tpl->tpl_vars['main_content']->value;?>

                </div>
                <!-- END LEFT COLUMN -->

                <!-- BEGIN RIGHT COLUMN -->
                <div class="rightcolumn">
                    <?php echo $_smarty_tpl->tpl_vars['right_content']->value;?>


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
<?php }
}
?>