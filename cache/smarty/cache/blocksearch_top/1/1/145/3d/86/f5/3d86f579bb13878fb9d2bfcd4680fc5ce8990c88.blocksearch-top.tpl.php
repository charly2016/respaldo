<?php /*%%SmartyHeaderCode:321557ab32b23767b4-67886203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d86f579bb13878fb9d2bfcd4680fc5ce8990c88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_underwear\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470837370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321557ab32b23767b4-67886203',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab36c3d3a0e9_99699090',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab36c3d3a0e9_99699090')) {function content_57ab36c3d3a0e9_99699090($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<form id="searchbox" method="get" action="//localhost/tienda/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-outline-inverse fa fa-search">&nbsp;</button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
