<?php /* Smarty version Smarty-3.1.12, created on 2015-06-01 16:31:06
         compiled from "/var/www/html/ow_system_plugins/base/views/components/connect_button_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1601833846556cc10aad4596-86382139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0a8db6471d309fc3f6f75a86948b073ad426114' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/connect_button_list.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601833846556cc10aad4596-86382139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'buttonList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_556cc10aada117_70349691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556cc10aada117_70349691')) {function content_556cc10aada117_70349691($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/var/www/html/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.connect_button_list {
    padding-top: 5px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="connect_button_list">
    <?php echo $_smarty_tpl->tpl_vars['buttonList']->value;?>

</div><?php }} ?>