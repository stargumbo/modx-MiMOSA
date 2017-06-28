<?php /* Smarty version 3.1.27, created on 2017-06-13 18:14:45
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:158186593759402b955b9371_62772861%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099ebf18c88e2b3f42523c09e536542ee49073c2' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/welcome.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158186593759402b955b9371_62772861',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59402b955bb4d8_27848646',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59402b955bb4d8_27848646')) {
function content_59402b955bb4d8_27848646 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '158186593759402b955b9371_62772861';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>