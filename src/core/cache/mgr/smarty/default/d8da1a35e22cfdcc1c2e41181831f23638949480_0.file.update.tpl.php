<?php /* Smarty version 3.1.27, created on 2018-02-23 21:02:18
         compiled from "/var/www/htdocs/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9260199855a90815a2fab83_01148782%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8da1a35e22cfdcc1c2e41181831f23638949480' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/snippet/update.tpl',
      1 => 1519259413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9260199855a90815a2fab83_01148782',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a90815a2ff112_95406988',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a90815a2ff112_95406988')) {
function content_5a90815a2ff112_95406988 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9260199855a90815a2fab83_01148782';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>