<?php /* Smarty version 3.1.27, created on 2016-01-04 14:36:52
         compiled from "template\registrazione_email_attivazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21986568a757421c886_01056654%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf59d3fd0b58b88e495cf877674a168a93207908' => 
    array (
      0 => 'template\\registrazione_email_attivazione.tpl',
      1 => 1451908585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21986568a757421c886_01056654',
  'variables' => 
  array (
    'nome_cognome' => 0,
    'url' => 0,
    'numero' => 0,
    'codice_attivazione' => 0,
    'email_webmaster' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568a7574287540_72482773',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568a7574287540_72482773')) {
function content_568a7574287540_72482773 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21986568a757421c886_01056654';
?>
Ciao <?php echo $_smarty_tpl->tpl_vars['nome_cognome']->value;?>
,

Grazie per esserti registrato su EatOnline. Prima di attivare il tuo account e' necessario compiere un ultimo passaggio per completare la registrazione!

Nota bene:  Sar&agrave; necessario cliccare sul link una sola vota e il tuo account verr&agrave; automaticamente aggiornato.

Per completare la registrazione, clicca sul link sottostante:
<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?controller=registrazione&task=attivazione&numero_tel=<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
&codice_attivazione=<?php echo $_smarty_tpl->tpl_vars['codice_attivazione']->value;?>


**** Il collegamento non funziona? ****
Se il collegamento non dovesse funzionare, visita questo link:
<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?controller=registrazione&task=attivazione

Dovrai scrivere il tuo numero di telefono e codice di attivazione nella pagina che apparir&agrave; cliccando sul collegamento qui sopra.
Assicurati di non aggiungere spazi aggiuntivi.

Il tuo numero &egrave;: <?php echo $_smarty_tpl->tpl_vars['numero']->value;?>

Il tuo codice di attivazione e': <?php echo $_smarty_tpl->tpl_vars['codice_attivazione']->value;?>



In caso di problemi con la registrazione contatta un membro dello staff: <?php echo $_smarty_tpl->tpl_vars['email_webmaster']->value;?>


Saluti, lo staff di
EatOnline<?php }
}
?>