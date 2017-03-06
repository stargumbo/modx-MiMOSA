<?php /* Smarty version 3.1.27, created on 2017-02-27 19:35:06
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:186298183858b47f6aafadf4_37549487%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099ebf18c88e2b3f42523c09e536542ee49073c2' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/welcome.tpl',
      1 => 1488222676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186298183858b47f6aafadf4_37549487',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b47f6aafcfc2_76503545',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b47f6aafcfc2_76503545')) {
function content_58b47f6aafcfc2_76503545 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '186298183858b47f6aafadf4_37549487';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>