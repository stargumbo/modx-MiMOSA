<?php /* Smarty version 3.1.27, created on 2017-04-07 18:05:02
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/renders/input/list-multiple-legacy.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:70506080958e7d4ce347af9_79538667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd689e46be50922d8763e35795dab5facfdd7874' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/input/list-multiple-legacy.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70506080958e7d4ce347af9_79538667',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'opts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e7d4ce374ce7_27209496',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e7d4ce374ce7_27209496')) {
function content_58e7d4ce374ce7_27209496 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '70506080958e7d4ce347af9_79538667';
?>
<select id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
[]" multiple <?php if ($_smarty_tpl->tpl_vars['params']->value['listWidth']) {?>width="$params.listWidth"<?php } else { ?>width="400"<?php }?> <?php if ($_smarty_tpl->tpl_vars['params']->value['listHeight']) {?>height="$params.listHeight"<?php } else { ?>height="100"<?php }?> style="<?php if ($_smarty_tpl->tpl_vars['params']->value['listWidth']) {?>width: <?php echo $_smarty_tpl->tpl_vars['params']->value['listWidth'];?>
px;<?php } else { ?>width: 400px;<?php }
if ($_smarty_tpl->tpl_vars['params']->value['listHeight']) {?>height: <?php echo $_smarty_tpl->tpl_vars['params']->value['listHeight'];?>
px;<?php } else { ?>height: 100px;<?php }?>" class="modx-tv-legacy-select">
<?php
$_from = $_smarty_tpl->tpl_vars['opts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</select>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var el = Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
    el.on('change', MODx.fireResourceFormChange, el);
});

// ]]>
<?php echo '</script'; ?>
><?php }
}
?>