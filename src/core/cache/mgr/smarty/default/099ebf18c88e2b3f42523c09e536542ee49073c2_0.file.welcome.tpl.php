<?php /* Smarty version 3.1.27, created on 2017-02-27 18:08:44
         compiled from "/var/www/htdocs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123407864658b46b2ce39669_05040631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '099ebf18c88e2b3f42523c09e536542ee49073c2' => 
    array (
      0 => '/var/www/htdocs/manager/templates/default/welcome.tpl',
      1 => 1488216976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123407864658b46b2ce39669_05040631',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b46b2ce52370_12250957',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b46b2ce52370_12250957')) {
function content_58b46b2ce52370_12250957 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123407864658b46b2ce39669_05040631';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>