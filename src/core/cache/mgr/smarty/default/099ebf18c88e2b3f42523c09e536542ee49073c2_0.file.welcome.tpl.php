<?php /* Smarty version 3.1.27, created on 2017-03-14 13:20:13
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4311454658c7ee0d16d567_71064403%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099ebf18c88e2b3f42523c09e536542ee49073c2' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/welcome.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4311454658c7ee0d16d567_71064403',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c7ee0d16f767_96154509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c7ee0d16f767_96154509')) {
function content_58c7ee0d16f767_96154509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4311454658c7ee0d16d567_71064403';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>