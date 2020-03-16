<?php


namespace App\controllers\Admin;
use App\controllers\HomeController as MainController;





class CategoriesController extends MainController
{
    public function index()
    {

        $parent_categories = $this->database->all('parent_category');
        $under_categories = $this->database->all('under_category');
        $brand = $this->database->all('brand');

        echo $this->view->render('admin/editcategories/index',['parent_categories' => $parent_categories,
                                                                        'under_categories' => $under_categories,
                                                                            'brands' => $brand]);


    }

    public function create($name)
    {
        echo $this->view->render('admin/editcategories/create', ['table' => $name]);
    }

    public function createbrand($name)
    {
        $undercategoryID = $this->database->all('under_category');
        echo $this->view->render('admin/editcategories/createbrand',['table' => $name, 'undercategory' => $undercategoryID ]);
    }

    public function store()
    {
        $table = $_POST['table'];

        $data = [
            "title" => $_POST['title']
        ];


        $this->database->create($table,$data);

        header("Location: /admin/categories");
    }

    public function storebrand()
    {

        $table = $_POST['table'];

        $data = [
            "title" => $_POST['title'],
            "under_category_id" => $_POST['under_category_id']
        ];


        $this->database->create($table,$data);

        header("Location: /admin/categories");
    }

    public function edit($id,$name)
    {
        $parentCategory = $this->database->find($name, $id);
        echo $this->view->render('admin/editcategories/edit', ['category' => $parentCategory,'table' => $name]);
    }

    public function update($id)
    {
        $table = $_POST['table'];

        $data = [
            "title" => $_POST['title']
        ];

        $this->database->update($table, $id, $data);

        header("Location: /admin/categories");
    }

    public function delete($id,$name)
    {

        $this->database->delete($name, $id);
        header("Location: /admin/categories");
    }

    public function deletebrand()
    {
        $id = $_POST['id'];
        $this->database->delete('brand', $id);
        header("Location: /admin/categories");
    }
}