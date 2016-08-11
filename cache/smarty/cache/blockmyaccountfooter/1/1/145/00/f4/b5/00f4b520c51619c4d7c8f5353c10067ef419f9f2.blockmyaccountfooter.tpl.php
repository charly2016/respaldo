<?php /*%%SmartyHeaderCode:778057ab6b47eb12f3-86645809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00f4b520c51619c4d7c8f5353c10067ef419f9f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\hair\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1470851709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '778057ab6b47eb12f3-86645809',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6b47eee1f2_46063463',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6b47eee1f2_46063463')) {function content_57ab6b47eee1f2_46063463($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block">
	<h4 class="title_block">Mi cuenta</h4>
	<div class="block_content">
		<ul class="bullet list-group">
			<li><a href="http://localhost/tienda/historial-compra" title="Mis compras" rel="nofollow">Mis compras</a></li>
						<li><a href="http://localhost/tienda/albaran" title="Mis vales descuento" rel="nofollow">Mis vales descuento</a></li>
			<li><a href="http://localhost/tienda/direcciones" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://localhost/tienda/datos-personales" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
						
            		</ul>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
