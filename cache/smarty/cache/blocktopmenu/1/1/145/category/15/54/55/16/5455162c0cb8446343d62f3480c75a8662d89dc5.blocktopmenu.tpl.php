<?php /*%%SmartyHeaderCode:1718957ab32b2969ec4-32059806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5455162c0cb8446343d62f3480c75a8662d89dc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_underwear\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1470837370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718957ab32b2969ec4-32059806',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab372f8ed3b6_55683291',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab372f8ed3b6_55683291')) {function content_57ab372f8ed3b6_55683291($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Menú</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost/tienda/13-vinos" title="Vinos">Vinos</a></li><li><a href="http://localhost/tienda/14-electrodomesticos-y-electronicos" title="Electrodomesticos y electronicos">Electrodomesticos y electronicos</a></li><li class="sfHoverForce"><a href="http://localhost/tienda/15-muebles" title="Muebles">Muebles</a></li><li><a href="http://localhost/tienda/16-computadoras" title="Computadoras">Computadoras</a></li>
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
