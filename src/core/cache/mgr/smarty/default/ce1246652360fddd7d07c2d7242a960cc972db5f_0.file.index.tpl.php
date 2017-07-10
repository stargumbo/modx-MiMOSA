<?php /* Smarty version 3.1.27, created on 2017-06-30 14:41:37
         compiled from "/var/www/htdocs/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:675604060595663219f28a1_16515041%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce1246652360fddd7d07c2d7242a960cc972db5f' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/workspaces/index.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '675604060595663219f28a1_16515041',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595663219f6249_90588854',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595663219f6249_90588854')) {
function content_595663219f6249_90588854 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '675604060595663219f28a1_16515041';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>