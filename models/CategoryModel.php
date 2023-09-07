<?php

namespace models;

use components\Constants;
use PDO;
use vendor\myframe\Connection;
use vendor\myframe\Model;

class CategoryModel extends Model
{
    public function tableName()
    {
        return "category";

    }


    public function save($name)
    {
        $sql="insert into category (name) values(:name)";
        $state=$this->db->prepare($sql);
        $state->bindValue(":name",$name,);
        $state->execute();



    }
    public function update($id, $name)
    {
        $sql="update category set name=:name where id = :id";
        $state=$this->db->prepare($sql);
        $state->bindValue(":id",$id, PDO::PARAM_INT);
        $state->bindValue(":name",$name);
        $state->execute();



    }


    public function validate()
    {
        
    }


}