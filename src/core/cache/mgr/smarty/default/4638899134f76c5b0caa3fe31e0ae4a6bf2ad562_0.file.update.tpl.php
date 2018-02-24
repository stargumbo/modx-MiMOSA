<?php /* Smarty version 3.1.27, created on 2018-02-23 20:24:37
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6891161175a907885e80dc4_64738320%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4638899134f76c5b0caa3fe31e0ae4a6bf2ad562' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/update.tpl',
      1 => 1519259413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6891161175a907885e80dc4_64738320',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a907885e84980_47834353',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a907885e84980_47834353')) {
function content_5a907885e84980_47834353 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6891161175a907885e80dc4_64738320';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>