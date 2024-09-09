<?php
namespace classes;

class UploadFiles{
  private $arr_img;

  public function __construct($selectImage = null)
  {
      $this->arr_img = $selectImage;     
      return $this->arr_img; 
  }
  
  public function UploadImage($pathImage){
    $img_ext = pathinfo($this->arr_img['name'],PATHINFO_EXTENSION);
    $now_date = date("Ymd");
    $new_img = $now_date . uniqid()."." . $img_ext;
    move_uploaded_file($this->arr_img['tmp_name'],$pathImage .$new_img);
    return $new_img;
  }
  
  public function UpdateImage($pathImage,$oldImage){
    $this->RemoveImage($pathImage,$oldImage);
    $new_img = $this->UploadImage($pathImage);
    return $new_img;
  }
  
  public function RemoveImage($pathImage,$oldImage){
    if(file_exists($pathImage . $oldImage)){
      unlink($pathImage . $oldImage);
    }
  }
  
  // public function CheckErrors(){
  //   $errors = [];
  //   $img_size = $this->img['size'] / (1024 * 1024);
  //   $img_ext = pathinfo($this->img['name'],PATHINFO_EXTENSION);
  //   $img_err = $this->img['error'];
    
  //   if($img_err > 0){
  //     $errors[] = "Image has Error";
  //   }
  //   if($img_size > 2){
  //     $errors[] = "Image size is Bigger Than 2MB";
  //   }
  //   if(!in_array($img_ext,['jpg','png'])){
  //     $errors[] = "Images is Support JPG or PNG Only";
  //   }
  //   return $errors ? $errors : null;
  // }
}
