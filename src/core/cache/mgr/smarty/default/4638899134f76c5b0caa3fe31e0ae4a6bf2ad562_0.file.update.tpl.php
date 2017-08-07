<?php /* Smarty version 3.1.27, created on 2017-07-12 18:54:39
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7334570445966706f4f1c43_48705908%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4638899134f76c5b0caa3fe31e0ae4a6bf2ad562' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/update.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7334570445966706f4f1c43_48705908',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5966706f4f38c7_53369441',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5966706f4f38c7_53369441')) {
function content_5966706f4f38c7_53369441 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7334570445966706f4f1c43_48705908';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>