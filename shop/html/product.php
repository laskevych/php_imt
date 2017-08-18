<?php $product = getProduct($products,$id) ?>

<h1 class="product-name"><?php echo $product->name ?></h1>

<div class="row">
    <div class="col-lg-12">
        <div class="image-product">
            <div>
                <img src="files/images/product.jpg">
            </div>
        </div>
        <div class="product-king">
            <div class="product-price">
                <?php if(count($product->variants) > 1) :?>
                    <select name="variant">
                        <?foreach ($product->variants as $variant) :?>
                            <option class="product-price"><?php echo $variant->name ?> <?php echo ceil($variant->price) ?> грн.</option>
                        <?php endforeach;?>
                    </select>
                <?php else:?>
                    <span class="product-price">Цена товара: <?php echo ceil($product->variant->price) ?> грн.</span>
                <?php endif;?>
                <div class="button-buy">
                    <form>
                        <input type="hidden" name="r" value="<?php echo $_GET['r'] ?>">
                        <input type="hidden" name="id" value="<?php echo $product->id ?>">
                        <input type="number" name="amount" value="1" min="1" max="10">
                        <button type="submit">Добавить в корзину</button>
                    </form>
                </div>
            </div>
            <?php if($product->description):?>
                <h2 class="product-description">Описание товара</h2>
                <div class="product-info">
                    <?php echo $product->description?>
                </div>
            <?php endif;?>
        </div>
    </div>

</div>