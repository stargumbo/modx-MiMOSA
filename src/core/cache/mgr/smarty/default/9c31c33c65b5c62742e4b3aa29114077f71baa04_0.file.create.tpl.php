<?php /* Smarty version 3.1.27, created on 2017-04-28 14:57:38
         compiled from "/var/www/htdocs/manager/templates/default/resource/weblink/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144694316259035862d4d854_71507050%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c31c33c65b5c62742e4b3aa29114077f71baa04' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/resource/weblink/create.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144694316259035862d4d854_71507050',
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
  'unifunc' => 'content_59035862d5f858_14772534',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59035862d5f858_14772534')) {
function content_59035862d5f858_14772534 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144694316259035862d4d854_71507050';
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