<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 08:57:06
         compiled from "C:\xampp\htdocs\tienda\themes\ap_underwear\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2525957ab32b2ad78c0-62457745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8757ed07c76034b16312ad26038716c574ccdad9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_underwear\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1470837370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2525957ab32b2ad78c0-62457745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab32b2b147c4_61099193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab32b2b147c4_61099193')) {function content_57ab32b2b147c4_61099193($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
