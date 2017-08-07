<?php /* Smarty version 3.1.27, created on 2017-07-19 23:30:47
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:851754929596feba7ecb4e8_49976895%%*/
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
  'nocache_hash' => '851754929596feba7ecb4e8_49976895',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596feba7ecd7c1_72469058',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596feba7ecd7c1_72469058')) {
function content_596feba7ecd7c1_72469058 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '851754929596feba7ecb4e8_49976895';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>