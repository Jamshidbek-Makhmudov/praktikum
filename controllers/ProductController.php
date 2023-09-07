<?php

namespace controllers;
use vendor\myframe\Controller;
use models\ProductModel;

class ProductController extends Controller
{

    public function list()
    {

        $productModel=new ProductModel();
        $result=$productModel->getList();


        $this->view->render("product/list", ["list"=>$result]);

    }

    public function add()
    {
        $this->view->render("product/add");
    }

    public function update($id = null)
    {
        $this->view->render("product/update");
    }

    public function delete($id = null)
    {
        $this->view->render("product/delete");
    }
}
