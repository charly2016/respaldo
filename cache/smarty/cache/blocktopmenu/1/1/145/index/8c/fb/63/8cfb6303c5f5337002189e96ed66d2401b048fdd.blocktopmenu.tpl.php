<?php /*%%SmartyHeaderCode:1408757ab6b4697acd3-04141639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cfb6303c5f5337002189e96ed66d2401b048fdd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\hair\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1470851709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1408757ab6b4697acd3-04141639',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6b4697acd3_69805131',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6b4697acd3_69805131')) {function content_57ab6b4697acd3_69805131($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Menú</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost/tienda/13-vinos" title="Vinos">Vinos</a></li><li><a href="http://localhost/tienda/14-electrodomesticos-y-electronicos" title="Electrodomesticos y electronicos">Electrodomesticos y electronicos</a></li><li><a href="http://localhost/tienda/15-muebles" title="Muebles">Muebles</a></li><li><a href="http://localhost/tienda/16-computadoras" title="Computadoras">Computadoras</a></li>
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
