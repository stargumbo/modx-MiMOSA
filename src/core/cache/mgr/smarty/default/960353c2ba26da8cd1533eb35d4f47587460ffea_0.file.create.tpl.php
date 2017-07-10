<?php /* Smarty version 3.1.27, created on 2017-06-30 00:10:39
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1196873124595596ff7308d7_45081974%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960353c2ba26da8cd1533eb35d4f47587460ffea' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/create.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196873124595596ff7308d7_45081974',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595596ff7325b3_25883865',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595596ff7325b3_25883865')) {
function content_595596ff7325b3_25883865 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1196873124595596ff7308d7_45081974';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>