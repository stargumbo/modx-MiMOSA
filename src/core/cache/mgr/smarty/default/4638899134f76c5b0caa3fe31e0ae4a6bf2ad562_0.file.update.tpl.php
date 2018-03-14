<?php /* Smarty version 3.1.27, created on 2018-03-08 20:35:12
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7932415415aa19e803aa990_64716593%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4638899134f76c5b0caa3fe31e0ae4a6bf2ad562' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/update.tpl',
      1 => 1520006424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7932415415aa19e803aa990_64716593',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aa19e803ad742_54621582',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa19e803ad742_54621582')) {
function content_5aa19e803ad742_54621582 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7932415415aa19e803aa990_64716593';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>