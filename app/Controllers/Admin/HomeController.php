<?php


namespace App\controllers\Admin;
use App\controllers\HomeController as MainController;





class HomeController extends MainController
{

    public function index()
    {

        $myProducts = $this->database->all('products');
        echo $this->view->render('admin/index',['products' => $myProducts]);

    }

    public function parent_category($id)
    {

        $category = $this->database->categoryProducts('products','parent_category_id' ,$id);

        echo $this->view->render('admin/categories', ['products' => $category]);

    }

    public function under_category($id)
    {

        $category = $this->database->categoryProducts('products','under_category_id' ,$id);

        echo $this->view->render('admin/categories', ['products' => $category]);

    }

    public function brand($id)
    {

        $category = $this->database->categoryProducts('products','brand_id' ,$id);

        echo $this->view->render('admin/categories', ['products' => $category]);

    }

    public function create()
    {

        echo $this->view->render('admin/products/create');
    }

    public function store()
    {

        $image = $this->imageManager->uploadImage($_FILES['image']);

        $data = [
            "title" => $_POST['title'],
            "description" => $_POST['description'],
            "image" => $image,
            "price" => $_POST['price'],
            "brand_id" => $_POST['brand_id'],
            "under_category_id" => $_POST['under_category_id'],
            "parent_category_id" => $_POST['parent_category_id'],
        ];

        $this->database->create("products",$data);

        header("Location: /admin");
    }

    public function edit($id)
    {
        $myProduct = $this->database->find('products', $id);
        echo $this->view->render('admin/products/edit', ['product' => $myProduct]);
    }

    public function update($id)
    {
        $photo = $this->database->find('products',$id);

        $image = $this->imageManager->uploadImage($_FILES['image'], $photo['image']);
        $data = [
            "title" => $_POST['title'],
            "description" => $_POST['description'],
            "image" => $image,
            "price" => $_POST['price']

        ];

        $this->database->update('products', $id, $data);

        header("Location: /admin");
    }

    public function delete($id)
    {
        $product = $this->database->find('products', $id);
        $this->imageManager->deleteImage($product['image']);

        $this->database->delete('products', $id);
        header ("location: /admin");
    }
}