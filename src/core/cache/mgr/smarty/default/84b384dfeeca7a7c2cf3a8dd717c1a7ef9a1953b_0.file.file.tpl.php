<?php /* Smarty version 3.1.27, created on 2017-04-25 16:33:40
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/renders/input/file.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165608141758ff7a64cf3ce5_95589689%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84b384dfeeca7a7c2cf3a8dd717c1a7ef9a1953b' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/input/file.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165608141758ff7a64cf3ce5_95589689',
  'variables' => 
  array (
    'tv' => 0,
    'disabled' => 0,
    'params' => 0,
    'source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ff7a64d3d724_64748386',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ff7a64d3d724_64748386')) {
function content_58ff7a64d3d724_64748386 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '165608141758ff7a64cf3ce5_95589689';
?>
<div id="tvpanel<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"></div>

<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
    
        xtype: 'displayfield'
        ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,renderTo: 'tvpanel<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,width: 400
        ,msgTarget: 'under'
    
    });
});

// ]]>
<?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
    
        xtype: 'modx-panel-tv-file'
        ,renderTo: 'tvpanel<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,relativeValue: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,width: 400
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,source: '<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
'

        <?php if ($_smarty_tpl->tpl_vars['params']->value['allowedFileTypes']) {?>,allowedFileTypes: '<?php echo $_smarty_tpl->tpl_vars['params']->value['allowedFileTypes'];?>
'<?php }?>
        ,wctx: '<?php if ($_smarty_tpl->tpl_vars['params']->value['wctx']) {
echo $_smarty_tpl->tpl_vars['params']->value['wctx'];
} else { ?>web<?php }?>'
        <?php if ($_smarty_tpl->tpl_vars['params']->value['openTo']) {?>,openTo: '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['params']->value['openTo'],"'","\\'");?>
'<?php }?>

    
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(Ext.get('tvpanel<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'),function(v) {
        var cb = Ext.getCmp('tvbrowser<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
        if (cb) {
            cb.setValue(v);
            cb.fireEvent('select',{relativeUrl:v});
        }
        return '';
    });
});

// ]]>
<?php echo '</script'; ?>
>
<?php }

}
}
?>