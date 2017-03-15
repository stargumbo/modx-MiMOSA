<?php /* Smarty version 3.1.27, created on 2017-03-14 13:20:23
         compiled from "/var/www/htdocs/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:204462325758c7ee1725aee4_39872255%%*/
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
  'nocache_hash' => '204462325758c7ee1725aee4_39872255',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c7ee1725e8f7_83143774',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c7ee1725e8f7_83143774')) {
function content_58c7ee1725e8f7_83143774 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '204462325758c7ee1725aee4_39872255';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>