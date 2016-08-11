<?php /*%%SmartyHeaderCode:1386857ab6ba25bfd81-13733222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61f8ef83e7ea7efb04db5ab34a73893113b6489' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\hair\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1470851710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1386857ab6ba25bfd81-13733222',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6ba25fcc83_77949486',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6ba25fcc83_77949486')) {function content_57ab6ba25fcc83_77949486($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button  data-type="twitter" type="button" class="btn btn-outline btn-twitter social-sharing">
				<i class="fa fa-twitter"></i>  Tweet
				<!-- <img src="http://localhost/tienda/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button  data-type="facebook" type="button" class="btn btn-outline btn-facebook  social-sharing">
				<i class="fa fa-facebook"></i> Compartir
				<!-- <img src="http://localhost/tienda/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button data-type="google-plus" type="button" class="btn btn-outline btn-google-plus  social-sharing">
				<i class="fa fa-google-plus"></i> Google+
				<!-- <img src="http://localhost/tienda/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
							<button data-type="pinterest" type="button" class="btn btn-outline btn-pinterest  social-sharing">
				<i class="fa fa-pinterest"></i>  Pinterest
				<!-- <img src="http://localhost/tienda/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>
