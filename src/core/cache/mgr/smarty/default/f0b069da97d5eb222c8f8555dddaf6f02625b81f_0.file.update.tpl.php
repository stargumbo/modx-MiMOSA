<?php /* Smarty version 3.1.27, created on 2017-07-05 21:56:22
         compiled from "/var/www/htdocs/manager/templates/default/resource/weblink/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:707369550595d60861ac351_69311258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0b069da97d5eb222c8f8555dddaf6f02625b81f' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/resource/weblink/update.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '707369550595d60861ac351_69311258',
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
  'unifunc' => 'content_595d60861b87e9_75791173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595d60861b87e9_75791173')) {
function content_595d60861b87e9_75791173 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '707369550595d60861ac351_69311258';
?>
<div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>