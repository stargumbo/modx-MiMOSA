<?php /* Smarty version 3.1.27, created on 2017-04-20 13:47:29
         compiled from "/var/www/htdocs/manager/templates/default/resource/staticresource/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:87949309958f8bbf18dcfe5_56322837%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13c5d273f04f990edfa752fc4adfc62a5c8bd7f' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/resource/staticresource/create.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87949309958f8bbf18dcfe5_56322837',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f8bbf18eef82_45145263',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f8bbf18eef82_45145263')) {
function content_58f8bbf18eef82_45145263 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '87949309958f8bbf18dcfe5_56322837';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>