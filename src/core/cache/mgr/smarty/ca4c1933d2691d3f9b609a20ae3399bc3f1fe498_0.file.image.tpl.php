<?php /* Smarty version 3.1.27, created on 2017-07-07 23:08:55
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/renders/properties/image.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:204451021859601487b70886_09541354%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca4c1933d2691d3f9b609a20ae3399bc3f1fe498' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/properties/image.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204451021859601487b70886_09541354',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59601487ba6b64_27348249',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59601487ba6b64_27348249')) {
function content_59601487ba6b64_27348249 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '204451021859601487b70886_09541354';
?>
<div id="tv-wprops-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = {
<?php
$_from = $_smarty_tpl->tpl_vars['params']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_p'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_p']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_p']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_p']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_p']->value['total'];
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
 '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
': '<?php echo strtr($_smarty_tpl->tpl_vars['v']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'<?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_p']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_p']->value['last'] : null)) {?>,<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelAlign: 'top'
    ,cls: 'form-with-labels'
    ,border: false
    ,items: [{
        xtype: 'textfield'
        ,fieldLabel: _('image_alt')
        ,name: 'prop_alttext'
        ,id: 'prop_alttext<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['alttext'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: 'numberfield'
        ,fieldLabel: _('image_hspace')
        ,name: 'prop_hspace'
        ,id: 'prop_hspace<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['hspace'] || ''
        ,width: 200
        ,listeners: oc
    },{
        xtype: 'numberfield'
        ,fieldLabel: _('image_vspace')
        ,name: 'prop_vspace'
        ,id: 'prop_vspace<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['vspace'] || ''
        ,width: 200
        ,listeners: oc
    },{
        xtype: 'numberfield'
        ,fieldLabel: _('image_border_size')
        ,name: 'prop_borsize'
        ,id: 'prop_borsize<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['borsize'] || ''
        ,width: 200
        ,listeners: oc
    },{
        xtype: 'combo'
        ,name: 'prop_align'
        ,hiddenName: 'prop_align'
        ,id: 'prop_align<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,fieldLabel: _('image_align')
        ,store: new Ext.data.SimpleStore({
            fields: ['v']
            ,data: [['none'],['baseline'],['top'],['middle'],['bottom'],['texttop'],['absmiddle'],['absbottom'],['left'],['right']]
        })
        ,displayField: 'v'
        ,valueField: 'v'
        ,mode: 'local'
        ,editable: true
        ,forceSelection: false
        ,typeAhead: false
        ,triggerAction: 'all'
        ,value: params['align'] || 'none'
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('name')
        ,name: 'prop_name'
        ,id: 'prop_name<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['name'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('class')
        ,name: 'prop_class'
        ,id: 'prop_class<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['class'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('id')
        ,name: 'prop_id'
        ,id: 'prop_id<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['id'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('style')
        ,name: 'prop_style'
        ,id: 'prop_style<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['style'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('attributes')
        ,name: 'prop_attributes'
        ,id: 'prop_attributes<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['attributes'] || ''
        ,anchor: '100%'
        ,listeners: oc
    }]
    ,renderTo: 'tv-wprops-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
});
// ]]>
<?php echo '</script'; ?>
>

<?php }
}
?>