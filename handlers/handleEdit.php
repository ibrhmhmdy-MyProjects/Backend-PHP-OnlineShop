<?php

require_once "../App.php";
require_once "../classes/UploadFiles.php";
use classes\UploadFiles;

if($req->hasRequest($req->POST("submit"))){
  $id = $req->GET("id");
  $productName = $req->POST("product");
  $price = $req->POST("price");
  $description = $req->POST("desc");

  $imgFile = $req->FILES("img");
  $valid->rules("product",$productName,['required','string','min:4']);
  $valid->rules("price",$price,['required','number']);
  $valid->rules("desc",$description,['required','string','min:4']);
  
  if($valid->errors){
    $session->Set("errors",$valid->errors);
    $req->Redirect("../edit.php?id=$id");
  }else{
    $arr_data = [
      'product_name' => $productName,
      'price' => $price,
      'description' => $description,
    ];
    if(!empty($imgFile['name'])){
      $img = new UploadFiles($imgFile);
      $new_img = $img->UploadImage("../images/upload/");
      $arr_data['image'] = $new_img;
      $old_image = $db->getImageName("image","products",$id);
      $img->RemoveImage("../images/upload/", $old_image);
    }
    $db->UpdateRow("Products", $arr_data,$id);

    $req->Redirect("../index.php");
  }
}

  