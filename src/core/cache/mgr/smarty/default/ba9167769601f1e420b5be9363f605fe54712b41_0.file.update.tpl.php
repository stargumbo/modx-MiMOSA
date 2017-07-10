<?php /* Smarty version 3.1.27, created on 2017-06-29 15:09:25
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19387758259551825407771_03911616%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9167769601f1e420b5be9363f605fe54712b41' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/update.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19387758259551825407771_03911616',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59551825409258_04404593',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59551825409258_04404593')) {
function content_59551825409258_04404593 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19387758259551825407771_03911616';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>