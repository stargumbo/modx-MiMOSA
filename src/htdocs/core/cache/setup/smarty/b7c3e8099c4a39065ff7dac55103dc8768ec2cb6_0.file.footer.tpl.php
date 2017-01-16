<?php /* Smarty version 3.1.27, created on 2017-01-15 19:41:10
         compiled from "/var/www/htdocs/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:310936623587bd056dfd997_27027353%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c3e8099c4a39065ff7dac55103dc8768ec2cb6' => 
    array (
      0 => '/var/www/htdocs/setup/templates/footer.tpl',
      1 => 1483465492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310936623587bd056dfd997_27027353',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587bd056e49a57_39404993',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587bd056e49a57_39404993')) {
function content_587bd056e49a57_39404993 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/htdocs/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '310936623587bd056dfd997_27027353';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>