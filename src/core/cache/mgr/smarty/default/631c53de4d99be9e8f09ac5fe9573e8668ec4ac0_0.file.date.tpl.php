<?php /* Smarty version 3.1.27, created on 2017-07-13 23:47:34
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/renders/input/date.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:212117884596806969f9244_34149246%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '631c53de4d99be9e8f09ac5fe9573e8668ec4ac0' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/input/date.tpl',
      1 => 1496098920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212117884596806969f9244_34149246',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59680696a38fb7_03472224',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59680696a38fb7_03472224')) {
function content_59680696a38fb7_03472224 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '212117884596806969f9244_34149246';
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
?>