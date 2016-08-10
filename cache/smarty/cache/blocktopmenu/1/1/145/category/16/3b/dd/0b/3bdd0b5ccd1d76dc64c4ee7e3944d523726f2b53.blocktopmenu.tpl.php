<?php /*%%SmartyHeaderCode:879657ab65bc77b5f7-74605901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bdd0b5ccd1d76dc64c4ee7e3944d523726f2b53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1470850433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '879657ab65bc77b5f7-74605901',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6626f361c7_64832482',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6626f361c7_64832482')) {function content_57ab6626f361c7_64832482($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
		<div class="cat-title">Menú</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost/tienda/13-vinos" title="Vinos">Vinos</a></li><li><a href="http://localhost/tienda/14-electrodomesticos-y-electronicos" title="Electrodomesticos y electronicos">Electrodomesticos y electronicos</a></li><li><a href="http://localhost/tienda/15-muebles" title="Muebles">Muebles</a></li><li class="sfHoverForce"><a href="http://localhost/tienda/16-computadoras" title="Computadoras">Computadoras</a></li>
							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://localhost/tienda/buscar" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
