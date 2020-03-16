<?php

namespace App\controllers;

use App\Models\Database;
use League\Plates\Engine;
use App\Models\ImageManager;



class HomeController
{
    public $view;
    public $database;
    public $imageManager;

    public function __construct(Engine $view, Database $database,ImageManager $imageManager)
    {
        $this->view = $view;
        $this->database = $database;
        $this->imageManager = $imageManager;
    }

    public function index()
    {
        $products = $this->database->all("products");

        echo $this->view->render('home', ['products' => $products]);
    }

    public function show($id)
    {
        $product = $this->database->find("products",$id);
        echo $this->view->render('show',['product' => $product]);
    }

    public function parent_category($id)
    {

        $category = $this->database->categoryProducts('products','parent_category_id' ,$id);

        echo $this->view->render('categories', ['products' => $category]);

    }

    public function under_category($id)
    {

        $category = $this->database->categoryProducts('products','under_category_id' ,$id);

        echo $this->view->render('categories', ['products' => $category]);

    }

    public function brand($id)
    {

        $category = $this->database->categoryProducts('products','brand_id' ,$id);

        echo $this->view->render('categories', ['products' => $category]);

    }
}


















//    public function index()
//    {
//        $myTasks = $this->database->all('products');
//
//
//        echo $this->view->render('home', ['tasks' => $myTasks]);
//
//    }
//
//
//    public function category($id)
//    {
//        $myCategory = $this->database->getCategory("products",$id);
//
//        echo $this->view->render('category', ['categories' => $myCategory]);
//    }
//
//    public function brand($id,$brand)
//    {
//        $myBrands = $this->database->getBrand("products",$id,$brand);
//
//        echo $this->view->render('brand', ['brands' => $myBrands]);
//    }
//    public function show($id)
//    {
//        $myProduct = $this->database->getOne('products', $id);
//        echo $this->view->render('products/show', ['productShow' => $myProduct]);
//    }

//    public function edit($id)
//    {
//
//       $myTask = $this->database->getOne('tasks',$id);
//
//        echo $this->view->render('tasks/edit', ['task' => $myTask]);
//    }
//
//    public function update($id)
//    {
//        $this->database->update('tasks', $id, $_POST);
//
//        header("Location: /tasks");
//    }









