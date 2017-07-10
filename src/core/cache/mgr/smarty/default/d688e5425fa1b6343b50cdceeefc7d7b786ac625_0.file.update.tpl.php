<?php /* Smarty version 3.1.27, created on 2017-07-07 19:29:46
         compiled from "/var/www/htdocs/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:921730671595fe12ad3c9e6_41693166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd688e5425fa1b6343b50cdceeefc7d7b786ac625' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/plugin/update.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921730671595fe12ad3c9e6_41693166',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595fe12ad3e803_92353419',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595fe12ad3e803_92353419')) {
function content_595fe12ad3e803_92353419 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '921730671595fe12ad3c9e6_41693166';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>