<?php /*%%SmartyHeaderCode:1117757ab65bb59a1d3-16412178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a88b67618e3ec4e85d4bf942c4313e8fd40668b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470850433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1117757ab65bb59a1d3-16412178',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab66098a1367_72510609',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab66098a1367_72510609')) {function content_57ab66098a1367_72510609($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-xs-12 col-sm-12 col-md-9-6 col-lg-7-2 inner">
	<form id="searchbox" method="get" action="//localhost/tienda/buscar" >
		<div class="input-group">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
			<span class="input-group-btn">
				<button type="submit" name="submit_search" class="btn btn-outline-inverse">
				<span class="button-search fa fa-search"><span class="unvisible">Buscar</span></span>
			</button></span>
		</div>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
