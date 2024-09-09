<?php include 'inc/header.php'; ?>
<?php
    $id = $req->GET("id");
    $row = $db->ReadRow("products",$id);
    $old_image = $row['image'];
?>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <?php    
            if($session->hasSession("errors")){
                $errors = $session->Get("errors");
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
                $session->Clear("errors");
            }
            ?>
            
            <form action="handlers/handleEdit.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="product" value="<?= $row['product_name'] ?>">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $row['price'] ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"><?= $row['description'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image:</label>
                    <input class="form-control" type="file" id="formFile" name="img">
                </div>

                <div class="col-lg-3">
                    <img src="images/upload/<?= $row['image'] ?>" class="card-img-top">
                </div>

                <center><button on type="submit" class="btn btn-primary" name="submit">Update</button></center>
            </form>
        </div>
    </div>
</div>



<?php include 'inc/footer.php'; ?>