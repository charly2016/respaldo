<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:58:32
         compiled from "C:\xampp\htdocs\tienda\themes\hair\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2635157ab6b48749e04-93369082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ffb9e8da457bfd551bf077c02f34797cd76eb46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\hair\\modules\\blockcontact\\nav.tpl',
      1 => 1470851709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2635157ab6b48749e04-93369082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6b48786d00_24882844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6b48786d00_24882844')) {function content_57ab6b48786d00_24882844($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?> hidden-sm hidden-xs">
		<i class="fa fa-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong> <?php echo smartyTranslate(array('s'=>'for us','mod'=>'blockcontact'),$_smarty_tpl);?>

	</span>
<?php }?><?php }} ?>
