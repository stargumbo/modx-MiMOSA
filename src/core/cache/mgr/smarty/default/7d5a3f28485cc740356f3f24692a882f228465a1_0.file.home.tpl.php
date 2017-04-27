<?php /* Smarty version 3.1.27, created on 2017-04-25 18:56:59
         compiled from "/var/www/core/components/clientconfig/templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175228129458ff9bfb0d19c2_34004167%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d5a3f28485cc740356f3f24692a882f228465a1' => 
    array (
      0 => '/var/www/core/components/clientconfig/templates/home.tpl',
      1 => 1493146271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175228129458ff9bfb0d19c2_34004167',
  'variables' => 
  array (
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ff9bfb0d3b82_55017984',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ff9bfb0d3b82_55017984')) {
function content_58ff9bfb0d3b82_55017984 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '175228129458ff9bfb0d19c2_34004167';
?>
<div id="clientconfig-wrapper-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
?>