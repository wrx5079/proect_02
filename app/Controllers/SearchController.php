<?php


namespace App\Controllers;
use App\Models\Searchproducts;
use League\Plates\Engine;


class SearchController
{
    private $search;
    public $view;
    public function __construct(Searchproducts $search,Engine $view)
    {
        $this->view = $view;
        $this->search = $search;
    }

    public function search()
    {

        $key = $_POST['key'];
        $products = $this->search->search($key);
        echo $this->view->render('home', ['products' => $products]);
    }

}

