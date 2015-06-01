<?php /* Smarty version Smarty-3.1.12, created on 2015-06-01 16:31:06
         compiled from "/var/www/html/ow_system_plugins/base/views/components/sign_in_button_list.html" */ ?>
<?php /*%%SmartyHeaderCode:776472996556cc10aadc6d2-08655566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '839204be7da6847445d50ad9f2d26931512cae4d' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/sign_in_button_list.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '776472996556cc10aadc6d2-08655566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_556cc10aae08c7_37393339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556cc10aae08c7_37393339')) {function content_556cc10aae08c7_37393339($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/var/www/html/ow_smarty/plugin/function.text.php';
?><div class="connect_button_cont clearfix"><span class="ow_connect_text"><?php echo smarty_function_text(array('key'=>'admin+sign_in_button_list_text'),$_smarty_tpl);?>
</span><?php echo $_smarty_tpl->tpl_vars['cmp']->value;?>
</div><?php }} ?>