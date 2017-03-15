<?php /* Smarty version 3.1.27, created on 2017-03-14 15:22:44
         compiled from "/var/www/htdocs/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144157742558c80ac41bb204_31039858%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd688e5425fa1b6343b50cdceeefc7d7b786ac625' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/plugin/update.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144157742558c80ac41bb204_31039858',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c80ac41bce55_56701458',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c80ac41bce55_56701458')) {
function content_58c80ac41bce55_56701458 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144157742558c80ac41bb204_31039858';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>