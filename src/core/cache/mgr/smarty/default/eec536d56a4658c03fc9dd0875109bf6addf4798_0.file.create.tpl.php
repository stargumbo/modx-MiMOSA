<?php /* Smarty version 3.1.27, created on 2017-07-06 17:38:31
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153744813595e759763e989_71021288%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec536d56a4658c03fc9dd0875109bf6addf4798' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/create.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153744813595e759763e989_71021288',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595e7597640996_07303487',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595e7597640996_07303487')) {
function content_595e7597640996_07303487 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153744813595e759763e989_71021288';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>