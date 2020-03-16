

<div class="container">
    <div class="nav_about">
        <div class="nav_left">
            <img id="nav_img" src="/img/uyt1.png" alt="img">
        </div>

        <div class="nav_center">
            <h5>Панель управления</h5>
        </div>

        <div class="nav_right">
            <i class="fa fa-user" aria-hidden="true"></i>
            <a href="#">ADMIN</a>
        </div>
    </div>
</div>




    <div class="nav_background">
        <div class="nav_bar">
            <div class="nav_catalog">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <a href="#">Каталог товаров</a>
            </div>
            <div class="nav_catalog">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <a href="/admin">Все товары</a>
            </div>
            <div class="nav_catalog">
                <i class="fa fa-table" aria-hidden="true"></i>
                <a href="/admin/categories">Категории</a>
            </div>
            <div class="nav_catalog">
                <i class="fa fa-download" aria-hidden="true"></i>
                <a href="/admin/create">Добавить товар</a>
            </div>
        </div>
    </div>


<div class="onmouse">
    <div class="nav_background_cat">
            <div class="nav_categories">
                <div class="nav_par_cat">
                    <ul>
                        <?php foreach (getAllCategories("parent_category") as $category):?>
                            <li>  <a href="/admin/parcategory/<?= $category['id']?>"><?= $category['title'] ?> </a></li>
                        <?php endforeach;?>
                    </ul>
                </div>

                <div class="nav_block_category">

                    <?php foreach (getAllCategories("under_category") as $category):?>
                        <ul>
                            <li> <span><a href="/admin/undercategory/<?= $category['id']?>"><?= $category['title'] ?> </a></span></li>
                            <?php foreach (getAllBrand($category['id']) as $brand):?>
                                <li>  <a href="/admin/brand/<?=$brand['id'] ?>"><?=$brand['title'] ?></a></li>
                            <?php endforeach;?>
                        </ul>
                    <?php endforeach;?>
                </div>
            </div>
    </div>
</div>



.