<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:59:42
         compiled from "C:\xampp\htdocs\tienda\themes\hair\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2969757ab6b8eae1733-37610398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f255ff4c7f51ba6d0af4980f0f48ee309771ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\hair\\category-count.tpl',
      1 => 1470851708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2969757ab6b8eae1733-37610398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6b8eb1e630_02969895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6b8eb1e630_02969895')) {function content_57ab6b8eb1e630_02969895($_smarty_tpl) {?>
<small class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></small><?php }} ?>
