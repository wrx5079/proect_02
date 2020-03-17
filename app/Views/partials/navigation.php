

    <div class="container">
        <div class="nav_about">
            <div class="nav_left">
                    <img id="nav_img" src="/img/uyt1.png" alt="img">
            </div>

            <div class="nav_right">
                <i class="fa fa-user" aria-hidden="true"></i>
                <a href="#">Войти</a>
                <i class="fa fa-registered" aria-hidden="true"></i>    <a href="#">Зарегистрироваться</a>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="nav_background">
        <div class="nav_bar">

            <div class="nav_catalog">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <a href="#">Каталог товаров</a>
            </div>
            <div class="title_category">

            </div>
            <div class="nav_search">
                <form action="/search" method="post">
                <input placeholder="Поиск" type="text"  name="key">
                    <button type="submit" id="search_button"> <i class="fa fa-search" aria-hidden="true"></i></button>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="onmouse">
    <div class="nav_background_cat">
        <div class="container">
             <div class="nav_categories">

                <div class="nav_par_cat">
                    <ul>
                    <?php foreach (getAllCategories("parent_category") as $category):?>
                      <li>  <a href="/parcategory/<?= $category['id']?>"><?= $category['title'] ?> </a></li>
                    <?php endforeach;?>
                    </ul>
                </div>

                <div class="nav_block_category">

                    <?php foreach (getAllCategories("under_category") as $category):?>
                        <ul>
                       <li> <span><a href="/undercategory/<?= $category['id']?>"><?= $category['title'] ?> </a></span></li>
                             <?php foreach (getAllBrand($category['id']) as $brand):?>
                            <li>  <a href="/brand/<?=$brand['id'] ?>"><?=$brand['title'] ?></a></li>
                            <?php endforeach;?>
                        </ul>
                    <?php endforeach;?>

                </div>

             </div>
        </div>
    </div>
</div>