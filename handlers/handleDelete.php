<?php

require_once "../App.php";
require_once "../classes/UploadFiles.php";
use classes\UploadFiles;

  $img = new UploadFiles();
  $id = $req->GET('id');
  $product_image = $db->getImageName("image","Products",$id);
  $img->RemoveImage("../images/upload/",$product_image);
  $db->DeleteRow("products",$id);
  $req->Redirect("../index.php");

