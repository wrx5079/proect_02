<?php $this->layout('admin/layout') ?>


<section class="content">
    <div class="content2">
        <div class="admin_panel">
            <p class="admin_title">Добавление категории</p>
            <form action="/admin/categories/storebrand" method="post"  class="add_form_product">
                <div class="block_add_left">
                    <label for="title">Название бренда</label>
                    <input type="text" name="title" >

                    <label for="title">Категория бренда</label>

                    <select name="under_category_id" >
                        <?php foreach ($undercategory as $category):?>
                        <option value="<?= $category['id']?>"><?= $category['title']?></option>
                        <?php endforeach;?>
                    </select>
                    <input type="hidden" name="table" value="<?= $table;?>">
                    <input id="button_admin" type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </div>
</section>







