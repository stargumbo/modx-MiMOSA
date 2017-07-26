<?php /* Smarty version 3.1.27, created on 2017-07-15 00:02:37
         compiled from "/var/www/htdocs/manager/templates/default/resource/staticresource/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:194180900359695b9d198911_97628854%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd13c5d273f04f990edfa752fc4adfc62a5c8bd7f' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/resource/staticresource/create.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194180900359695b9d198911_97628854',
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
  'unifunc' => 'content_59695b9d1a4fd0_65510042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59695b9d1a4fd0_65510042')) {
function content_59695b9d1a4fd0_65510042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194180900359695b9d198911_97628854';
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