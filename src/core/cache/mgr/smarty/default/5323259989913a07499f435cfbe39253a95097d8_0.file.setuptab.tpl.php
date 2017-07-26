<?php /* Smarty version 3.1.27, created on 2017-07-19 22:35:19
         compiled from "/var/www/core/components/migx/templates/mgr/setuptab.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1817149069596fdea75c7409_78791731%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5323259989913a07499f435cfbe39253a95097d8' => 
    array (
      0 => '/var/www/core/components/migx/templates/mgr/setuptab.tpl',
      1 => 1498671556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817149069596fdea75c7409_78791731',
  'variables' => 
  array (
    'cmptabcaption' => 0,
    'cmptabdescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596fdea75ce846_06499004',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596fdea75ce846_06499004')) {
function content_596fdea75ce846_06499004 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1817149069596fdea75c7409_78791731';
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
        xtype: 'form',
        id: 'migx_setup_form',
        standardSubmit: true,
        url: config.src,
        items: [{
            xtype: 'modx-tabs',
            id: 'migx-tab-setup',
            defaults: {
                border: false,
                autoHeight: true
            },
            border: true,
            items: [{
                title: 'Setup',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Setup MIGX-Configurator. (Creates/upgrades Configurations-table)</p>'
                         +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('setupmigx')},
                    text: 'Setup',
                    scope: this
                }]
            },{
                title: 'Upgrade MIGX',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Adds the autoinc-field MIGX_id to all existing MIGX-TVs from older Versions</p>'
                    +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('upgrademigx')},
                    text: 'Upgrade',
                    scope: this
                }]
            }]
        }]
    }]
}





<?php }
}
?>