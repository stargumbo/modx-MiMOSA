<?php /* Smarty version 3.1.27, created on 2018-03-05 16:29:46
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/renders/input/url.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10043434085a9d707a5cefe6_31956021%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2216249e8daaeca327fa425a04708f59aeac677' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/input/url.tpl',
      1 => 1520006424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10043434085a9d707a5cefe6_31956021',
  'variables' => 
  array (
    'tv' => 0,
    'urls' => 0,
    'url' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a9d707a607f29_06217691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9d707a607f29_06217691')) {
function content_5a9d707a607f29_06217691 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10043434085a9d707a5cefe6_31956021';
?>
<select id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix" onchange="MODx.fireResourceFormChange();">
<?php
$_from = $_smarty_tpl->tpl_vars['urls']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['url']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
$foreach_url_Sav = $_smarty_tpl->tpl_vars['url'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['url']->value == $_smarty_tpl->tpl_vars['selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</option>
<?php
$_smarty_tpl->tpl_vars['url'] = $foreach_url_Sav;
}
?>
</select>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
	type="text"
	value="<?php echo $_smarty_tpl->tpl_vars['tv']->value->get('processedValue');?>
"
	onchange="MODx.fireResourceFormChange();"
	class="textfield x-form-text x-form-field"
	style="width: 283px;"
/>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
	MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));

    var fld = MODx.load({
        xtype: 'combo'
        ,transform: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix'
        ,triggerAction: 'all'
        ,width: 100
        ,allowBlank: false
        ,maxHeight: 300
        ,typeAhead: false
        ,forceSelection: false
        ,msgTarget: 'under'
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
    });

	fld.wrap.applyStyles({
		display: "inline-block"
	});
});
// ]]>
<?php echo '</script'; ?>
><?php }
}
?>