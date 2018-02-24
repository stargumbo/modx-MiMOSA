<?php /* Smarty version 3.1.27, created on 2018-02-23 20:28:06
         compiled from "/var/www/htdocs/manager/templates/default/security/user/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2605656985a907956cb8926_90679963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e282616fbda647db188d64deef1fb402423e52b' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/security/user/create.tpl',
      1 => 1519259413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2605656985a907956cb8926_90679963',
  'variables' => 
  array (
    'OnUserFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a907956cc2931_04540834',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a907956cc2931_04540834')) {
function content_5a907956cc2931_04540834 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2605656985a907956cb8926_90679963';
echo $_smarty_tpl->tpl_vars['OnUserFormPrerender']->value;?>

<div id="modx-panel-user-div"></div><?php }
}
?>