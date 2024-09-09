<?php

require_once "../App.php";
require_once "../classes/UploadFiles.php";
use classes\UploadFiles;

if($req->hasRequest($req->POST("submit"))){
  $productName = $req->POST("product");
  $price = $req->POST("price");
  $description = $req->POST("desc");
  $imgFile = $req->FILES("img");

  
  $valid->rules("product",$productName,['required','string','min:4']);
  $valid->rules("price",$price,['required','number']);
  $valid->rules("desc",$description,['required','string','min:4']);
  $valid->rules("img",$imgFile['name'],['required','img']);
  
  if(!$valid->errors){
    $img = new UploadFiles($imgFile);
    $new_img = $img->UploadImage("../images/upload/");

    $db->AddRow("products",
                "product_name,price,description,image",
                "'$productName','$price','$description','$new_img'");
    $req->Redirect("../index.php");
    
  }else{
    $session->Set("errors",$valid->errors);
    $req->Redirect("../add.php");
  }
}
