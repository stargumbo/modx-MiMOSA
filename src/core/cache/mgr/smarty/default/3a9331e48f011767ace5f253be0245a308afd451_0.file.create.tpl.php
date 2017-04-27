<?php /* Smarty version 3.1.27, created on 2017-04-25 15:54:33
         compiled from "/var/www/htdocs/manager/templates/default/element/plugin/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:74439371058ff7139bb0e25_21123384%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9331e48f011767ace5f253be0245a308afd451' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/plugin/create.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74439371058ff7139bb0e25_21123384',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ff7139bb29a9_57856732',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ff7139bb29a9_57856732')) {
function content_58ff7139bb29a9_57856732 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74439371058ff7139bb0e25_21123384';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>