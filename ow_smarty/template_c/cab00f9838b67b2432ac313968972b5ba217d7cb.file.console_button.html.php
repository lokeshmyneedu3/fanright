<?php /* Smarty version Smarty-3.1.12, created on 2015-06-01 16:31:06
         compiled from "/var/www/html/ow_system_plugins/base/views/components/console_button.html" */ ?>
<?php /*%%SmartyHeaderCode:1414986506556cc10ab03779-28644948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab00f9838b67b2432ac313968972b5ba217d7cb' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/console_button.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414986506556cc10ab03779-28644948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'onClick' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_556cc10ab09886_91001823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556cc10ab09886_91001823')) {function content_556cc10ab09886_91001823($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="ow_console_item_link" onclick="<?php echo $_smarty_tpl->tpl_vars['onClick']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a><?php }} ?>