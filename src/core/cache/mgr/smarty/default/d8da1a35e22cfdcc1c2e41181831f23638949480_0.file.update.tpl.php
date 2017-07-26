<?php /* Smarty version 3.1.27, created on 2017-07-19 22:33:22
         compiled from "/var/www/htdocs/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1944945601596fde32a94248_19543752%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8da1a35e22cfdcc1c2e41181831f23638949480' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/snippet/update.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944945601596fde32a94248_19543752',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596fde32a95ce9_25430593',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596fde32a95ce9_25430593')) {
function content_596fde32a95ce9_25430593 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1944945601596fde32a94248_19543752';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>