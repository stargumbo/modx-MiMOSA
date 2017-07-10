<?php /* Smarty version 3.1.27, created on 2017-06-30 00:11:43
         compiled from "/var/www/htdocs/manager/templates/default/element/tv/renders/input/hidden.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11364045605955973f473dd0_70930183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a74d06e8b67fd71b635eff00e2b8b09c3e080a7a' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/element/tv/renders/input/hidden.tpl',
      1 => 1489441065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11364045605955973f473dd0_70930183',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5955973f48c778_48718708',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5955973f48c778_48718708')) {
function content_5955973f48c778_48718708 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11364045605955973f473dd0_70930183';
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
" />

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

MODx.on('ready',function() {
    var fld = MODx.load({
    
        xtype: 'hidden'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo strtr($_smarty_tpl->tpl_vars['tv']->value->get('value'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    
    });
    var p = Ext.getCmp('modx-panel-resource');
    if (p) {
        p.add(fld);
        p.doLayout();
    }
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>