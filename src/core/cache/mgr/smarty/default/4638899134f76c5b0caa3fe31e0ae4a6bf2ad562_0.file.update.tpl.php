<?php /* Smarty version 3.1.27, created on 2018-03-24 17:38:49
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16771213265ab68d293090e3_06529670%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4638899134f76c5b0caa3fe31e0ae4a6bf2ad562' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/update.tpl',
      1 => 1521235307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16771213265ab68d293090e3_06529670',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab68d2930b560_61988183',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab68d2930b560_61988183')) {
function content_5ab68d2930b560_61988183 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16771213265ab68d293090e3_06529670';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>