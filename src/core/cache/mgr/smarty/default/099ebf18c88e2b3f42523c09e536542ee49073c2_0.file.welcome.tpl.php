<?php /* Smarty version 3.1.27, created on 2018-02-22 01:20:27
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18033348735a8e1adb224a56_77429843%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099ebf18c88e2b3f42523c09e536542ee49073c2' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/welcome.tpl',
      1 => 1519259413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18033348735a8e1adb224a56_77429843',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a8e1adb2273a2_19365837',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8e1adb2273a2_19365837')) {
function content_5a8e1adb2273a2_19365837 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18033348735a8e1adb224a56_77429843';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>