<?php /* Smarty version 3.1.27, created on 2017-03-03 17:48:19
         compiled from "/var/www/htdocs/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210734872358b9ac632a2d25_14124743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8da1a35e22cfdcc1c2e41181831f23638949480' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/snippet/update.tpl',
      1 => 1488222676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210734872358b9ac632a2d25_14124743',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b9ac632a48e7_24079847',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b9ac632a48e7_24079847')) {
function content_58b9ac632a48e7_24079847 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210734872358b9ac632a2d25_14124743';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>