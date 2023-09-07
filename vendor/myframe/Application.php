<?php
namespace vendor\myframe;
class Application
{
    public $defaultController="SiteController";
    public $defaultFunction="index";
    private $id=null;
    public function run()
    {
        $REQUEST_URI=$_SERVER["REQUEST_URI"];
        $data=explode("/",$REQUEST_URI);  //string to array

//echo "<pre>";
//print_r( $data);
        if($REQUEST_URI==="/" || $REQUEST_URI==="/dars.loc/" || $REQUEST_URI==="/dars.loc/index.php"){
            $className="controllers\\".$this->defaultController; //controllers\SiteController
            $functionName=$this->defaultFunction;
        }else{
            $className=ucfirst($data[3])."Controller"; //first letter is uppercase
            $className="controllers\\".$className;




        if(strpos($data[4],"?")){ //explode the get param from query
            $params=explode("?",$data[4]);
            $functionName=$params[0];
        }else{
            $functionName=$data[4];
        }


        if(isset($data[5])){
            $this->id=$data[5];
        }
        }
        $obj=new $className();
        if(is_null($this->id)){
            $obj->{$functionName}();
        }else{
            $obj->{$functionName}($this->id);
        }


    }
}