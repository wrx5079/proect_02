<?php $this->layout('admin/layout') ?>

<section class="content">

        <div class="all_cards">
            <?php foreach($products as $product):?>
                <div class="card_colum">
                    <div class="card">
                        <div class="card_image">
                            <div class="image_size">
                                <a href="#">
                                    <img src="/uploads/<?= $product['image'];?>" id="img" alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="card_content">
                            <div class="media">
                                <div class="media_left">
                                    <p class="style-title-grid"><a href="#"><?= $product['title']; ?></a></p>
                                </div>
                                <div class="card_edit">
                                    <a id="edit" href="/admin/edit/<?=$product['id'] ?>">Изменить</a>
                                    <a id="delete" href="/admin/delete/<?=$product['id'] ?>">Удалить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>

</section>