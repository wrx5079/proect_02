<?php $this->layout('admin/layout') ?>

<section class="content">
    <div class="content2">
        <div class="admin_panel">
            <p class="admin_title">Категории</p>
            <div class="admin_panel_edit">
                <div class="block_parent_edit">

                    <div class="block_title">
                        <p id="category_title">Родительская категория</p>
                        <a id="add_category" href="/admin/categories/create/parent_category">добавить  категорию</a>
                    </div>

                    <?php foreach($parent_categories as $category):?>
                        <div class="block_edit">
                            <p><?= $category['title'];?></p>
                            <div class="div">
                                <a href="/admin/categories/<?= $category['id'];?>/edit/parent_category" class="btn btn-warning">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>

                                <a href="/admin/categories/<?= $category['id'];?>/delete/parent_category" class="btn btn-danger" onclick="return confirm('Вы уверены?');">
                                    <i  class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach;?>

                </div>


                <div class="block_under_edit">

                    <div class="block_title">
                        <p id="category_title">Категория</p>
                        <a id="add_category" href="/admin/categories/create/under_category">добавить  категорию</a>
                    </div>

                    <?php foreach($under_categories as $under_category):?>
                        <div class="block_edit">
                            <p><?= $under_category['title'];?></p>

                            <div class="div">
                                <a href="/admin/categories/<?= $under_category['id'];?>/edit/under_category" class="btn btn-warning">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href="/admin/categories/<?= $under_category['id'];?>/delete/under_category" class="btn btn-danger" onclick="return confirm('Вы уверены?');">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach;?>

                </div>


                <div class="block_brand_edit">

                    <div class="block_title">
                        <p id="category_title">Бренд</p>
                        <a id="add_category" href="/admin/categories/brand/brand">добавить бренд</a>
                    </div>

                    <select name="brand_id" id="select">
                       <?php foreach(getAllCategories('brand') as $brand):?>
                       <?php foreach (getAllBrand2($brand['under_category_id']) as $category2):?>
                        <option value="<?= $brand['id'];?>"><?= $brand['title'];?>----------<?=$category2['title'];?></option>
                        <?endforeach;?>
                      <?php endforeach;?>
                    </select>

                    <div class="div">
                        <form action="/admin/categories/delete" method="post">
                        <input id="input_id" type="hidden" name="id" >
                            <input id="button_delete_brand" type="submit" value="удалить" )>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
