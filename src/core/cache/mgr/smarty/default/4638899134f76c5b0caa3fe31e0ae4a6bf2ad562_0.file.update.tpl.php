<?php /* Smarty version 3.1.27, created on 2017-03-03 15:27:14
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187042828058b98b5262a3e5_30608963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4638899134f76c5b0caa3fe31e0ae4a6bf2ad562' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/update.tpl',
      1 => 1488222676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187042828058b98b5262a3e5_30608963',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b98b5262be18_03873022',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b98b5262be18_03873022')) {
function content_58b98b5262be18_03873022 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '187042828058b98b5262a3e5_30608963';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>