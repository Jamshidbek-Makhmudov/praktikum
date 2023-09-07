<?php

namespace controllers;

use models\CategoryModel;
use vendor\myframe\Connection;
use vendor\myframe\Controller;
use vendor\myframe\Views;

class CategoryController extends Controller
{


    public function list()
    {


        $categoryModel=new CategoryModel();

        $result=$categoryModel->getList();
//       print_r($result);die();
        $pageCount=$categoryModel->getPageCount();


        $this->view->render("category/list", [
            "list"=>$result,
            "pageCount"=>$pageCount
            ]);

    }

    public function add()
    {
        if(isset($_POST["submit"])){
            $categoryModel=new CategoryModel();
//            $categoryModel->validate();

            $categoryModel->save($_POST["name"]);

        }

        $this->render("category/add");
    }
    public function update($id)
    {
        $categoryModel=new CategoryModel();
        if(isset($_POST["submit"])){
            $categoryModel->update($id, $_POST["name"]);
            header("Location: /dars.loc/index.php/category/list"); exit();
        }
        $result=$categoryModel->getRowById($id);
//        print_r($result);
        $this->render("category/update",["category"=>$result]);
    }
    public function delete($id)
    {
        $categoryModel=new CategoryModel();
        $result=$categoryModel->getRowById($id);
        print_r($result);
//        $this->view->render("category/delete");
    }
}