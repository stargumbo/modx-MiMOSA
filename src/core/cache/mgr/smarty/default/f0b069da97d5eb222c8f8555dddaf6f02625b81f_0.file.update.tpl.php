<?php /* Smarty version 3.1.27, created on 2018-02-26 15:07:18
         compiled from "/var/www/htdocs/manager/templates/default/resource/weblink/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10466282535a9422a691d288_21745186%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0b069da97d5eb222c8f8555dddaf6f02625b81f' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/resource/weblink/update.tpl',
      1 => 1519259413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10466282535a9422a691d288_21745186',
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
  'unifunc' => 'content_5a9422a6928b11_80976727',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9422a6928b11_80976727')) {
function content_5a9422a6928b11_80976727 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10466282535a9422a691d288_21745186';
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