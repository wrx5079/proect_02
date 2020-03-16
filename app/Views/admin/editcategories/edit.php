<?php $this->layout('admin/layout') ?>
<section class="content">
    <div class="content2">
        <div class="admin_panel">
            <p class="admin_title">Изменение категории</p>
            <form action="/admin/categories/<?=$category['id']; ?>/update" method="post"  class="add_form_product">
                <div class="block_add_left">
                    <label for="title">Название</label>
                    <input type="text" name="title" value="<?=$category['title']; ?>">
                    <input id="button_admin" type="submit" value="Изменить">
                    <input type="hidden" name="table" value="<?= $table;?>">
                </div>
            </form>
        </div>
    </div>
</section>






