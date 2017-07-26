<?php /* Smarty version 3.1.27, created on 2017-07-15 00:02:52
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:193203263459695bacf325f0_88656924%%*/
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
  'nocache_hash' => '193203263459695bacf325f0_88656924',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59695bacf346d2_71863982',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59695bacf346d2_71863982')) {
function content_59695bacf346d2_71863982 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '193203263459695bacf325f0_88656924';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>