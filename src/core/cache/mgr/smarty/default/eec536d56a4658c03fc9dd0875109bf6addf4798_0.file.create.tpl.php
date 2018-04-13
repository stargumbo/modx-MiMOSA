<?php /* Smarty version 3.1.27, created on 2018-03-24 17:41:10
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15666968735ab68db64aec70_16895757%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec536d56a4658c03fc9dd0875109bf6addf4798' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/create.tpl',
      1 => 1521235307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15666968735ab68db64aec70_16895757',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab68db64b12f5_67193219',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab68db64b12f5_67193219')) {
function content_5ab68db64b12f5_67193219 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15666968735ab68db64aec70_16895757';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>