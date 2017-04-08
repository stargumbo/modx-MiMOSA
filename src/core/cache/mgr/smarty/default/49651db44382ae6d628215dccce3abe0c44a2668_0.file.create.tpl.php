<?php /* Smarty version 3.1.27, created on 2017-04-08 18:12:40
         compiled from "/var/www/htdocs/manager/templates/default/element/snippet/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:131872421958e92818e425a6_72431098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49651db44382ae6d628215dccce3abe0c44a2668' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/snippet/create.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131872421958e92818e425a6_72431098',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e92818e440f0_51712517',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e92818e440f0_51712517')) {
function content_58e92818e440f0_51712517 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '131872421958e92818e425a6_72431098';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>