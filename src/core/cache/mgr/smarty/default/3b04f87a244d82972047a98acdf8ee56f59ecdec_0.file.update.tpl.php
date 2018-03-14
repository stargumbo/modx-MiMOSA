<?php /* Smarty version 3.1.27, created on 2018-02-13 22:42:00
         compiled from "/var/www/htdocs/manager/templates/default/resource/staticresource/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20739748855a8369b868f1c9_78893323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b04f87a244d82972047a98acdf8ee56f59ecdec' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/resource/staticresource/update.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20739748855a8369b868f1c9_78893323',
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
  'unifunc' => 'content_5a8369b86ac039_36921481',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8369b86ac039_36921481')) {
function content_5a8369b86ac039_36921481 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20739748855a8369b868f1c9_78893323';
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