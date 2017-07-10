<?php /* Smarty version 3.1.27, created on 2017-07-05 16:52:07
         compiled from "/var/www/htdocs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1224280203595d1937ad7993_86940528%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4638899134f76c5b0caa3fe31e0ae4a6bf2ad562' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/chunk/update.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1224280203595d1937ad7993_86940528',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595d1937ad94d5_65556674',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595d1937ad94d5_65556674')) {
function content_595d1937ad94d5_65556674 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1224280203595d1937ad7993_86940528';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>