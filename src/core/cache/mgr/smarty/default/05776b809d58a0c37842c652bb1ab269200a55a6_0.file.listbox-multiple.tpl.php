<?php
/* Smarty version 3.1.31, created on 2018-07-08 19:04:42
  from "/var/www/htdocs/manager/templates/default/element/tv/renders/input/listbox-multiple.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b42604ac7ee13_14167469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05776b809d58a0c37842c652bb1ab269200a55a6' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/input/listbox-multiple.tpl',
      1 => 1528378376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42604ac7ee13_14167469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<select id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
[]"
	multiple="multiple"
	onselect="MODx.fireResourceFormChange();"
	onchange="MODx.fireResourceFormChange();"
	size="8"
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opts']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</select>



<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = new Ext.ux.form.SuperBoxSelect({
    
        xtype:'superboxselect'
        ,transform: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,triggerAction: 'all'
        ,mode: 'local'
        ,extraItemCls: 'x-tag'
        ,expandBtnCls: 'x-form-trigger'
        ,clearBtnCls: 'x-form-trigger'
        ,width: 400
        ,displayField: "text"
        ,valueField: "value"
        ,resizable: true
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>

        <?php if ($_smarty_tpl->tpl_vars['params']->value['title']) {?>,title: '<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>
'<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['listWidth']) {?>,listWidth: <?php echo $_smarty_tpl->tpl_vars['params']->value['listWidth'];
}?>
        ,maxHeight: <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['maxHeight'])===null||$tmp==='' ? '' : $tmp)) {
echo $_smarty_tpl->tpl_vars['params']->value['maxHeight'];
} else { ?>300<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAhead']) {?>
            ,typeAhead: true
            ,typeAheadDelay: <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] && $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] != '') {
echo $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'];
} else { ?>250<?php }?>
            ,editable: true
        <?php } else { ?>
            ,typeAhead: false
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['listEmptyText']) {?>
            ,listEmptyText: '<?php echo $_smarty_tpl->tpl_vars['params']->value['listEmptyText'];?>
'
        <?php }?>
        ,forceSelection: true
        ,stackItems: <?php if ($_smarty_tpl->tpl_vars['params']->value['stackItems'] && $_smarty_tpl->tpl_vars['params']->value['stackItems'] != 'false') {?>true<?php } else { ?>false<?php }?>
        ,msgTarget: 'under'

        
        ,listeners: {
            'select': {fn:MODx.fireResourceFormChange, scope:this}
            ,'beforeadditem': {fn:MODx.fireResourceFormChange, scope:this}
            ,'newitem': {fn:function(bs,v,f) {
                bs.addNewItem({"id": v,"text": v});
                MODx.fireResourceFormChange();
                return true;
            },scope:this}
            ,'beforeremoveitem': {fn:MODx.fireResourceFormChange, scope:this}
            ,'clear': {fn:MODx.fireResourceFormChange, scope:this}
        }
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
