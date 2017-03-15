<?php /* Smarty version 3.1.27, created on 2017-03-14 15:19:13
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:100318613958c809f14aa958_76095744%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec536d56a4658c03fc9dd0875109bf6addf4798' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/create.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100318613958c809f14aa958_76095744',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c809f14ac572_89810755',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c809f14ac572_89810755')) {
function content_58c809f14ac572_89810755 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '100318613958c809f14aa958_76095744';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>