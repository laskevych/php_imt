<div class="products">
    <?php if($products) :?>
        <?php $i=0; foreach ($products as $product) :?>
            <?php $i++ ?>
            <div  class="products-king">
                <div>
                    <div class="image-products">
                        <img src="files/images/product.jpg" width="150px">
                    </div>
                    <div>
                        <a href="?r=product&id=<?php echo $product->id ?>"><?php echo $product->name ?></a>
                    </div>
                    <div class="price">
                        <?php if(count($product->variants) > 1) :?>
                            <select name="variant">
                                <?foreach ($product->variants as $variant) :?>
                                    <option><?php echo $variant->name ?> - <?php echo ceil($variant->price) ?> грн.</option>
                                <?php endforeach;?>
                            </select>
                        <?php else:?>
                            <span> <?php echo ceil($product->variant->price) ?> грн.</span>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <? if($i%3 == 0):?>
                <div class="products-div"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif;?>
</div>