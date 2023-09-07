<?php

namespace models;

use vendor\myframe\Connection;
use vendor\myframe\Model;

class ProductModel extends Model
{

    public function getList()
    {
        $sql="select * from product";

        $state=$this->db->prepare($sql);
        $state->execute();
        return $state->fetchAll();


    }

    public function insertProduct()
    {
        
    }

}