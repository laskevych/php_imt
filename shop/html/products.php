<div class="row col-12">
    <?php if($products) :?>
        <?php $i=0; foreach ($products as $product) :?>
            <?php $i++ ?>
            <div class="col-4 product-list">
                <div>
                    <div>
                        <img src="files/images/product.jpg" width="150px">
                    </div>
                        <div>
                            <a href="?r=product&id=<?php echo $product->id ?>"><?php echo $product->name ?></a>
                        </div>
                        <div>
                            <?php if(count($product->variants) > 1) :?>
                                <select name="variant">
                                    <?foreach ($product->variants as $variant) :?>
                                        <option><?php echo $variant->name ?> - <?php echo ceil($variant->price) ?> грн.</option>
                                    <?php endforeach;?>
                                </select>
                            <?php else:?>
                                <span>
                                    <?php if($product->variant->price <= 20):echo "Нет в наличии";?>
                                    <?php else:echo ceil($product->variant->price);?> грн.
                                    <?php endif;?>
                                </span>
                            <?php endif;?>
                        </div>
                </div>
            </div>
            <? if($i%3 == 0):?>
                <div class="col-12 delimiter"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif;?>
</div>