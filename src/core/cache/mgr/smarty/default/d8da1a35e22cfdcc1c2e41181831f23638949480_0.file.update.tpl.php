<?php /* Smarty version 3.1.27, created on 2017-03-14 15:34:50
         compiled from "/var/www/htdocs/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:62503699258c80d9a39b660_84449472%%*/
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
  'nocache_hash' => '62503699258c80d9a39b660_84449472',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c80d9a39d339_48283577',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c80d9a39d339_48283577')) {
function content_58c80d9a39d339_48283577 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '62503699258c80d9a39b660_84449472';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>