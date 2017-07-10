<?php /* Smarty version 3.1.27, created on 2017-07-07 23:06:05
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:206472286596013dd4a7d80_61001833%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960353c2ba26da8cd1533eb35d4f47587460ffea' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/create.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206472286596013dd4a7d80_61001833',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596013dd4a98a8_83659463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596013dd4a98a8_83659463')) {
function content_596013dd4a98a8_83659463 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '206472286596013dd4a7d80_61001833';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>