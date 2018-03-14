<?php /* Smarty version 3.1.27, created on 2018-03-07 15:22:50
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15003453385aa003ca9fa765_65797396%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9167769601f1e420b5be9363f605fe54712b41' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/update.tpl',
      1 => 1520006424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15003453385aa003ca9fa765_65797396',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aa003caa012b3_65991169',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa003caa012b3_65991169')) {
function content_5aa003caa012b3_65991169 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15003453385aa003ca9fa765_65797396';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>