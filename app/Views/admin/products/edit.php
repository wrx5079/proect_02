<?php $this->layout('admin/layout') ?>
<?php $id = $_POST['id']; echo $id;?>
<section class="content">
<div class="content2">
    <div class="admin_panel">
        <p class="admin_title">Изменение товара</p>
        <form action="<?=$product['id']; ?>/update" method="post" enctype="multipart/form-data" class="add_form_product">
            <div class="block_add_left">
                <label for="title">Название</label>
                <input type="text" name="title" value="<?=$product['title']; ?>">

                <label for="title">Описание</label>
                <textarea name="description"  cols="30" rows="10" ><?=$product['description']; ?></textarea>

                <label for="title">Изображение</label>
                <img src="/uploads/<?= $product['image'];?>" alt="image" width="200">
                <input type="file" name="image" >

            </div>

            <div class="block_add_right">

                <label for="title">Цена</label>
                <input type="text" name="price" value="<?=$product['price']; ?>">



                <label for="brand_id">Бренд</label>
                <select name="brand_id" >
                    <?php foreach(getAllCategories('brand') as $brand):?>
                        <?php foreach (getAllBrand2($brand['under_category_id']) as $category2):?>
                            <option value="<?= $brand['id'];?>"><?= $brand['title'];?>------<?=$category2['title'];?>  </option>
                        <?endforeach;?>
                    <?php endforeach;?>
                </select>

                <label for="under_category_id">Категория</label>
                <select name="under_category_id" id="select">
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

                <input id="button_admin" type="submit" value="Изменить">
            </div>
        </form>
    </div>
</div>
</section>






