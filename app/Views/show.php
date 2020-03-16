<?php $this->layout('layout') ?>
<section class="content">

    <div class="container">

            <div class="block_show_product">

                <div class="title_show_product">
                    <H3><?= $product['title']?></H3>
                </div>

                <div class="block_img2">
                    <div class="img_show">
                        <img id="imgshow" src="/uploads/<?= $product['image']?>" alt="image" >
                    </div>

                    <div class="price_add">
                        <p id="show_price"><?= $product['price']?> <span>сом</span></p>
                        <button id="button_add">купить</button>
                    </div>
                </div>
                <H3 id="h3">Описание</H3>
                <div class="block_show_description">
                    <p><?=$product['description'];?></p>
                </div>

            </div>


</div>


</section>