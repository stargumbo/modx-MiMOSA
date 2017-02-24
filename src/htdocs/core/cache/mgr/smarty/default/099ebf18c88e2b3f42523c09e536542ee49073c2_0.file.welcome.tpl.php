<?php /* Smarty version 3.1.27, created on 2017-02-24 16:41:08
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:54942877958b06224358f19_57265084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099ebf18c88e2b3f42523c09e536542ee49073c2' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/welcome.tpl',
      1 => 1487710690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54942877958b06224358f19_57265084',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b06224368da4_24353789',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b06224368da4_24353789')) {
function content_58b06224368da4_24353789 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '54942877958b06224358f19_57265084';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>