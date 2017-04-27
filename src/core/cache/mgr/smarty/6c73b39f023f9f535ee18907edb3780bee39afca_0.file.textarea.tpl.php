<?php /* Smarty version 3.1.27, created on 2017-04-24 14:36:40
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/renders/input/textarea.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153553218358fe0d782dc6a1_20916582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c73b39f023f9f535ee18907edb3780bee39afca' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/input/textarea.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153553218358fe0d782dc6a1_20916582',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58fe0d782f46f9_57590685',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58fe0d782f46f9_57590685')) {
function content_58fe0d782f46f9_57590685 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153553218358fe0d782dc6a1_20916582';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" rows="15"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textarea'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo strtr($_smarty_tpl->tpl_vars['tv']->value->get('value'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        ,height: 140
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>