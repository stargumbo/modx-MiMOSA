<?php /* Smarty version 3.1.27, created on 2017-01-15 19:41:44
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1227961679587bd07869bcb8_75872943%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099ebf18c88e2b3f42523c09e536542ee49073c2' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/welcome.tpl',
      1 => 1483976994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1227961679587bd07869bcb8_75872943',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587bd0786b0ad3_92229526',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587bd0786b0ad3_92229526')) {
function content_587bd0786b0ad3_92229526 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1227961679587bd07869bcb8_75872943';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>