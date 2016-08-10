<?php /*%%SmartyHeaderCode:1293757ab660a7a7371-66950797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '843ef0545b0756421d169368e4290d8bd5d9a2fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1470850433,
      2 => 'file',
    ),
    '81e302d18fefa528342f6b3160e419dcbaffd655' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\sub\\product\\sidebar.tpl',
      1 => 1470850434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1293757ab660a7a7371-66950797',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab660a821172_66789368',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab660a821172_66789368')) {function content_57ab660a821172_66789368($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block block-danger nopadding">
	<h4 class="title_block">
        <a href="http://localhost/tienda/bajamos-precios" title="Promociones especiales">
            Promociones especiales
        </a>
    </h4>
	<div class="block_content products-block">
             
		<ul class="products products-block">
            <li class="clearfix media">
            
            <div class="product-block">

            <div class="product-container media" itemscope itemtype="https://schema.org/Product">
					<a class="products-block-image img pull-left" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="" itemprop="url">
						<img class="replace-2x img-responsive" src="http://localhost/tienda/12-small_default/vestido-verano-estampado.jpg" alt="Vestido de verano estampado" itemprop="image" />
					</a>

                <div class="media-body" >
                      <div class="product-content">
                     
                        
                                                 <div class="content_price price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                                                                                <span class="old-price product-price">
                                        35,39 $
                                    </span>
                                                                <span itemprop="price" class="product-price">
                                    33,62 $                                </span>
                                <meta itemprop="priceCurrency" content="0" />
                                                    </div>
                                            <h5 class="name media-heading" itemprop="name">
                            <a class="product-name" href="http://localhost/tienda/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado">
                            Vestido de verano...</a>
                        </h5>
                       <!-- <p class="product-description description">Vestido largo estampado con tirantes finos...</p> -->
                        
                                            </div>
                </div>
            </div>

              
            </div>    
        </li>
    </ul>  
		<div class="lnk">
			<a 
            class="btn btn-outline button btn-sm" 
            href="http://localhost/tienda/bajamos-precios" 
            title="Todas los promociones especiales">
                <span>Todas los promociones especiales</span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>
