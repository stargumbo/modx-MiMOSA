<?php /* Smarty version 3.1.27, created on 2018-02-23 20:58:59
         compiled from "/var/www/htdocs/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13980732715a908093cad166_09263894%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd688e5425fa1b6343b50cdceeefc7d7b786ac625' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/plugin/update.tpl',
      1 => 1519259413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13980732715a908093cad166_09263894',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a908093cb2713_79267432',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a908093cb2713_79267432')) {
function content_5a908093cb2713_79267432 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13980732715a908093cad166_09263894';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>