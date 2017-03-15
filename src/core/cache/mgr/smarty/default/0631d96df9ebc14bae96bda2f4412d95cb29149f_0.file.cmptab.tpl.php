<?php /* Smarty version 3.1.27, created on 2017-03-14 14:21:37
         compiled from "/var/www/core/components/migx/templates/mgr/cmptab.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:162490164458c7fc71ed4541_32138036%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0631d96df9ebc14bae96bda2f4412d95cb29149f' => 
    array (
      0 => '/var/www/core/components/migx/templates/mgr/cmptab.tpl',
      1 => 1489501234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162490164458c7fc71ed4541_32138036',
  'variables' => 
  array (
    'cmptabcaption' => 0,
    'cmptabdescription' => 0,
    'win_id' => 0,
    'configs' => 0,
    'columns' => 0,
    'pathconfigs' => 0,
    'fields' => 0,
    'myctx' => 0,
    'auth' => 0,
    'resource' => 0,
    'connected_object_id' => 0,
    'object_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c7fc71ee8336_47010214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c7fc71ee8336_47010214')) {
function content_58c7fc71ee8336_47010214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '162490164458c7fc71ed4541_32138036';
?>

{
    title: '<?php echo $_smarty_tpl->tpl_vars['cmptabcaption']->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->tpl_vars['cmptabdescription']->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
',
        preventRender: true,
        id: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->tpl_vars['win_id']->value;?>
',
        configs: '<?php echo $_smarty_tpl->tpl_vars['configs']->value;?>
',
        columns: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['columns']->value;?>
'),
        pathconfigs: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['pathconfigs']->value;?>
'),
        fields: Ext.util.JSON.decode('<?php echo $_smarty_tpl->tpl_vars['fields']->value;?>
'),
        wctx: '<?php echo $_smarty_tpl->tpl_vars['myctx']->value;?>
',
        url: Migx.config.connectorUrl,
        auth: '<?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
',
        resource_id: '<?php echo $_smarty_tpl->tpl_vars['resource']->value['id'];?>
',
        co_id: '<?php echo $_smarty_tpl->tpl_vars['connected_object_id']->value;?>
',
        pageSize: 10,
        object_id: '<?php echo $_smarty_tpl->tpl_vars['object_id']->value;?>
',
        bwrapCfg: {
            cls: 'main-wrapper'
        }       
    }]
}
<?php }
}
?>