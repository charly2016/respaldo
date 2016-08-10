<?php /*%%SmartyHeaderCode:624057ab65bdaca413-16753416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1bd8dfbe6ebb1633fae3e2aa6bbb3bc1d76fe8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1470850433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '624057ab65bdaca413-16753416',
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'vimeo_url' => 0,
    'instagram_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab65bdb81118_98099847',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab65bdb81118_98099847')) {function content_57ab65bdb81118_98099847($_smarty_tpl) {?>
<div id="social_block" class="block">
	 <div class="block_content toggle-footer">	 	
	<ul>
						<li class="facebook">
					<a target="_blank" href="http://www.facebook.com/charly dom" class="btn-tooltip" data-original-title="Facebook">
						<span>Facebook</span>
					</a>
				</li>
									<li class="twitter">
					<a target="_blank" href="http://www.twitter.com/prestashop" class="btn-tooltip" data-original-title="Twitter">
						<span>Twitter</span>
					</a>
				</li>
									<li class="rss">
					<a target="_blank" href="http://www.prestashop.com/blog/en/" class="btn-tooltip" data-original-title="RSS">
						<span>RSS</span>
					</a>
				</li>
			                	        	<li class="google-plus">
	        		<a target="_blank" href="https://www.google.com/+prestashop" class="btn-tooltip" data-original-title="Google Plus" rel="publisher">
	        			<span>Google Plus</span>
	        		</a>
	        	</li>
	                                	</ul>
	 </div>
</div>

<?php }} ?>
