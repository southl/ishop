<?php defined('ISHOP') or die('Access denied'); ?>
<div class="catalog-index">
    <div class="kroshka">
<?php if(count($brand_name) > 1): // если подкатегория (слайдер, моноблок...) ?>
    <a href="<?=PATH?>">Головна</a> / <a href="?view=cat&amp;category=<?=$brand_name[0]['brand_id']?>"><?=$brand_name[0]['brand_name']?></a> / <span><?=$brand_name[1]['brand_name']?></span>
<?php elseif(count($brand_name) == 1): // если не дочерняя категория ?>
    <a href="<?=PATH?>">Головна</a> / <span><?=$brand_name[0]['brand_name']?></span>
<?php endif; ?>
	</div> <!-- .kroshka -->
    <div class="vid-sort">
		Вид: 
			<a href="#" id="grid" class="grid_list"><img src="<?=TEMPLATE?>images/vid-tabl.gif" alt="табличний вигляд" /></a> 
			<a href="#" id="list" class="grid_list"><img src="<?=TEMPLATE?>images/vid-line.gif" alt="линійний вигляд" /></a>  
			&nbsp;&nbsp;           
		Сортувати по:&nbsp;   
            <a id="param_order" class="sort-top"><?=$order?></a>
                <div class="sort-wrap">
                    <?php foreach($order_p as $key => $value): ?>
                        <?php if($value[0] == $order) continue; ?>
<a href="?view=cat&amp;category=<?=$category?>&amp;order=<?=$key?>&amp;page=<?=$page?>" class="sort-bot"><?=$value[0]?></a>                        
                    <?php endforeach; ?>
                </div> 
	</div> <!-- .vid-sort -->

<?php if($products): // если получены товары категории ?>
<?php foreach($products as $product): ?>
<?php if(!isset($_COOKIE['display']) OR $_COOKIE['display'] == 'grid'): // если вид - сетка ?>
<!-- Табличный вид продуктов -->				
<div class="product-table">
	<h2><a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
	<div class="product-table-img">
		<a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>" alt="" width="64" /></a>
		<div> <!-- Иконки -->
            <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'images/ico-cat-lider.png" alt="лідери продажу" />'; ?>
            <?php if($product['new']) echo '<img src="' .TEMPLATE. 'images/ico-cat-new.png" alt="новинка" />'; ?>
            <?php if($product['sale']) echo '<img src="' .TEMPLATE. 'images/ico-cat-sale.png" alt="розпродаж" />'; ?>							
		</div> <!-- Иконки -->
	</div>
	<p class="cat-table-more"><a href="?view=product&amp;goods_id=<?=$product['goods_id']?>">детальніше...</a></p>
	<p>Ціна :  <span><?=$product['price']?></span></p>
	<a href="?view=addtocart&amp;goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-table.jpg" alt="Добавить в корзину" /></a>
</div> <!-- .product-table -->
<!-- Табличный вид продуктов -->
<?php else: // если линейный вид ?>
<!-- Линейный вид продуктов -->
<div class="product-line">					
	<div class="product-line-img">
		<a href="?view=product&amp;goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>" width="48" alt="" /></a>
	</div>
	<div class="product-line-price">
		<p>Цена :  <span><?=$product['price']?></span></p>
		<a href="?view=addtocart&amp;goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-table.jpg" alt="Добавить в корзину" /></a>
		<div> <!-- Иконки -->
            <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'images/ico-line-lider.jpg" alt="лідери продажу" />'; ?>
            <?php if($product['new']) echo '<img src="' .TEMPLATE. 'images/ico-line-new.jpg" alt="новинка" />'; ?>
            <?php if($product['sale']) echo '<img src="' .TEMPLATE. 'images/ico-line-sale.jpg" alt="розпродаж" />'; ?>							
		</div> <!-- Иконки -->
		<p class="cat-line-more"><a href="?view=addtocart&amp;goods_id=<?=$product['goods_id']?>">детальніше...</a></p>
	</div>	
	<div class="product-line-opis">
		<h2><a href="?view=addtocart&amp;goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
		<p><?=$product['anons']?></p>
	</div>	
</div>
<!-- Линейный вид продуктов -->
<?php endif; // конец условия переключателя видов  ?>
<?php endforeach; ?>
<div class="clr"></div>
<?php if($pages_count > 1) pagination($page, $pages_count); ?>
<?php else: ?>
    <p>Товарів немає!</p>
<?php endif; ?>	
<a name="nav"></a>			
</div> <!-- .catalog-index -->