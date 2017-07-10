<?php /* Smarty version 3.1.27, created on 2017-07-05 21:07:03
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1529540349595d54f7de84c5_33612521%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099ebf18c88e2b3f42523c09e536542ee49073c2' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/welcome.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1529540349595d54f7de84c5_33612521',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595d54f7dea663_25802437',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595d54f7dea663_25802437')) {
function content_595d54f7dea663_25802437 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1529540349595d54f7de84c5_33612521';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>