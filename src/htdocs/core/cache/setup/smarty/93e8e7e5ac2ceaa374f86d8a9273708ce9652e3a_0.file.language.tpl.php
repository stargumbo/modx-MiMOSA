<?php /* Smarty version 3.1.27, created on 2017-02-24 18:05:56
         compiled from "/var/www/htdocs/setup/templates/language.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:154526888658b07604f2ca59_35776452%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93e8e7e5ac2ceaa374f86d8a9273708ce9652e3a' => 
    array (
      0 => '/var/www/htdocs/setup/templates/language.tpl',
      1 => 1487710734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154526888658b07604f2ca59_35776452',
  'variables' => 
  array (
    'restarted' => 0,
    '_lang' => 0,
    'languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b07605017998_75242672',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b07605017998_75242672')) {
function content_58b07605017998_75242672 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '154526888658b07604f2ca59_35776452';
?>
<form id="install" action="?" method="post">

<?php if ($_smarty_tpl->tpl_vars['restarted']->value) {?>
    <br class="clear" />
    <br class="clear" />
    <p class="note"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['restarted_msg'];?>
</p>
<?php }?>

<div class="setup_navbar" style="border-top: 0;">
    <p class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['choose_language'];?>
:
        <select name="language" autofocus="autofocus">
            <?php echo $_smarty_tpl->tpl_vars['languages']->value;?>

    	</select>
    </p>

    <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['select'];?>
" />
</div>
</form><?php }
}
?>