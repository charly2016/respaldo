<?php /*%%SmartyHeaderCode:2957657ab6b459bdfb8-83771909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d8323cda925fac78e66278573b812dfe38f03b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\hair\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470851709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2957657ab6b459bdfb8-83771909',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6b8dc92410_98233866',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6b8dc92410_98233866')) {function content_57ab6b8dc92410_98233866($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top">
	<form id="searchbox" method="get" action="//localhost/tienda/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-outline-inverse fa fa-search">&nbsp;</button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
