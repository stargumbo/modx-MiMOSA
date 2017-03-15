<?php /* Smarty version 3.1.27, created on 2017-03-14 15:21:02
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114033489858c80a5ed5dda6_55720601%%*/
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
  'nocache_hash' => '114033489858c80a5ed5dda6_55720601',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c80a5ed5f908_84395354',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c80a5ed5f908_84395354')) {
function content_58c80a5ed5f908_84395354 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114033489858c80a5ed5dda6_55720601';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>