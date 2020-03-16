<?php $this->layout('admin/layout') ?>

<section class="content">
    <div class="content2">
        <div class="admin_panel">
            <p class="admin_title">Добавление категории</p>
            <form action="/admin/categories/store" method="post"  class="add_form_product">
                <div class="block_add_left">
                    <label for="title">Название</label>
                    <input type="text" name="title" >
                    <input id="button_admin" type="submit" value="Добавить">
                </div>
                <input type="hidden" name="table" value="<?= $table;?>">
            </form>
        </div>
    </div>
</section>







