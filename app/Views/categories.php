<?php $this->layout('layout') ?>


<section class="content">
    <div class="container">
        <div class="all_cards">
            <?php foreach($products as $product):?>
                <div class="card_colum">
                    <div class="card">
                        <div class="card_image">
                            <div class="image_size">
                                <a href="#">
                                    <a href="../show/<?= $product['id']; ?>"> <img src="/uploads/<?= $product['image'];?>" id="img" alt="image"></a>
                                </a>
                            </div>
                        </div>
                        <div class="card_content">
                            <div class="media">
                                <div class="media_left">
                                    <p class="style-title-grid"><a href="../show/<?= $product['id']; ?>"><?= $product['title']; ?></a></p>
                                </div>
                                <div class="media_right">
                                    <p class="style-price-grid"><strong></strong><?= $product['price']; ?> СОМ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>