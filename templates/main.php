<?php 
	function current_price($price_str){
		$price_str =ceil($price_str);	
		$price_str = number_format($price_str, 0, ' ', ' ');
				
		return $price_str;
	}
	?>
<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
			<?php foreach ($array_category as $key => $category) { ?>
		         
		        <li class="promo__item promo__item--<?php echo $key; ?>">
                	<a class="promo__link" href="pages/all-lots.html"><?php echo htmlspecialchars($category); ?></a>
				</li>
   
				
			<?php } ?>
	     </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
            <?php for( $i=0; $i< count($array_products);$i++){ ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?php echo $array_products[$i][3]; ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?php echo htmlspecialchars($array_products[$i][1]); ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?php echo htmlspecialchars($array_products[$i][0]); ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><!-- <b class="rub">р</b> --><?php echo  current_price($array_products[$i][2]); ?> <b class="rub">р</b></span> 
                        </div>
                        <div class="lot__timer timer">

                        </div>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </section>
</main>
