<?php /* Smarty version 3.1.27, created on 2017-07-07 19:29:35
         compiled from "/var/www/htdocs/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1525797453595fe11f865cb4_64753145%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8da1a35e22cfdcc1c2e41181831f23638949480' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/snippet/update.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1525797453595fe11f865cb4_64753145',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595fe11f867900_36032506',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595fe11f867900_36032506')) {
function content_595fe11f867900_36032506 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1525797453595fe11f865cb4_64753145';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>