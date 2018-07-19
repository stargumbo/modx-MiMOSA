<?php
/* Smarty version 3.1.31, created on 2018-07-08 19:04:42
  from "/var/www/htdocs/manager/templates/default/element/tv/renders/input/date.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b42604ae9a638_67605915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3c93c76852e297a7210a56bd9702fee7ea68456' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/input/date.tpl',
      1 => 1528378376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42604ae9a638_67605915 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" type="hidden" class="datefield"
	value="<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
	onblur="MODx.fireResourceFormChange();"/>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'xdatetime'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,dateFormat: MODx.config.manager_date_format
        ,timeFormat: MODx.config.manager_time_format
        <?php if ($_smarty_tpl->tpl_vars['params']->value['disabledDates']) {?>,disabledDates: <?php echo $_smarty_tpl->tpl_vars['params']->value['disabledDates'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['disabledDays']) {?>,disabledDays: <?php echo $_smarty_tpl->tpl_vars['params']->value['disabledDays'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['minDateValue']) {?>,minDateValue: '<?php echo $_smarty_tpl->tpl_vars['params']->value['minDateValue'];?>
'<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['maxDateValue']) {?>,maxDateValue: '<?php echo $_smarty_tpl->tpl_vars['params']->value['maxDateValue'];?>
'<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['startDay']) {?>,startDay: <?php echo $_smarty_tpl->tpl_vars['params']->value['startDay'];
}?>

        <?php if ($_smarty_tpl->tpl_vars['params']->value['minTimeValue']) {?>,minTimeValue: '<?php echo $_smarty_tpl->tpl_vars['params']->value['minTimeValue'];?>
'<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['maxTimeValue']) {?>,maxTimeValue: '<?php echo $_smarty_tpl->tpl_vars['params']->value['maxTimeValue'];?>
'<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['timeIncrement']) {?>,timeIncrement: <?php echo $_smarty_tpl->tpl_vars['params']->value['timeIncrement'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['hideTime']) {?>,hideTime: <?php echo $_smarty_tpl->tpl_vars['params']->value['hideTime'];
}?>

        ,dateWidth: 198
        ,timeWidth: 198
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,value: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'
        ,msgTarget: 'under'
    
        ,listeners: { 'change': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
><?php }
}
