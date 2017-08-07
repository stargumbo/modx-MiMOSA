<?php /* Smarty version 3.1.27, created on 2017-07-12 22:41:45
         compiled from "/var/www/htdocs/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:683431545966a5a9ab9598_44423869%%*/
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
  'nocache_hash' => '683431545966a5a9ab9598_44423869',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5966a5a9abb3c0_28994801',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5966a5a9abb3c0_28994801')) {
function content_5966a5a9abb3c0_28994801 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '683431545966a5a9ab9598_44423869';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>