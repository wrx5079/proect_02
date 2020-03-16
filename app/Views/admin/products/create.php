<?php $this->layout('admin/layout') ?>

<section class="content">
<div class="content2">
    <div class="admin_panel">
        <p class="admin_title">Добавление товара</p>

        <form action="store" method="post" enctype="multipart/form-data" class="add_form_product">
            <div class="block_add_left">
                <label for="title">Название</label>
                <input type="text" name="title" >

                <label for="description">Описание</label>
                <textarea name="description"  cols="30" rows="10"></textarea>

                <label for="image">Изображение</label>
                <input type="file" name="image" >

                <label for="price">Цена</label>
                <input type="text" name="price" >
            </div>
            <div class="block_add_right">
                <label for="brand_id">Бренд</label>
                <select name="brand_id" >
                    <?php foreach(getAllCategories('brand') as $brand):?>
                        <?php foreach (getAllBrand2($brand['under_category_id']) as $category2):?>
                        <option value="<?= $brand['id'];?>"><?= $brand['title'];?>------<?=$category2['title'];?>  </option>
                        <?endforeach;?>
                    <?php endforeach;?>
                </select>

                <label for="under_category_id">Категория</label>
                <select name="under_category_id" id="value">
                    <?php foreach(getAllCategories('under_category') as $category):?>
                        <option value="<?= $category['id'];?>"><?= $category['title'];?></option>
                    <?php endforeach;?>
                </select>


                <label for="parent_category_id">Родительская категория</label>
                <select name="parent_category_id">
                    <?php foreach(getAllCategories('parent_category') as $category):?>
                        <option value="<?= $category['id'];?>"><?= $category['title'];?></option>
                    <?php endforeach;?>
                </select>

                <input id="button_admin" type="submit" value="Добавить">
            </div>
        </form>
    </div>
</div>
</section>