<?php /* Smarty version Smarty-3.1.12, created on 2015-06-01 16:31:06
         compiled from "/var/www/html/ow_plugins/fbconnect/views/components/connect_button.html" */ ?>
<?php /*%%SmartyHeaderCode:721178841556cc10aa57cf5-51997681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cb5561718ed9131072bfc4e9d6f75337969abf3' => 
    array (
      0 => '/var/www/html/ow_plugins/fbconnect/views/components/connect_button.html',
      1 => 1429047574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '721178841556cc10aa57cf5-51997681',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_556cc10aa5a921_83292494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556cc10aa5a921_83292494')) {function content_556cc10aa5a921_83292494($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/var/www/html/ow_smarty/plugin/function.text.php';
?><a class="fb_button fb_button_medium" onclick="OW_FB.login(); return false;">
    <span class="fb_connect_wrap"><span class="fb_button_text"><?php echo smarty_function_text(array('key'=>"fbconnect+connect_btn_label"),$_smarty_tpl);?>
</span></span>
</a><?php }} ?>