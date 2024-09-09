<?php include 'inc/header.php'; ?>


<div class="container my-5">
    <div class="row">
        <?php
        $rows = $db->ReadAll("products");
        if($rows){

        foreach($rows as $row){
        ?>
        <div class="col-lg-4 mb-3">
            <div class="card">
                <img src="images/upload/<?= $row['image'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['product_name'] ?></h5>
                    <p class="text-muted"><?= $row['price'] ?> EGP</p>
                    <p class="card-text"><?= $str->excerpt($row['description'],100)?></p>
                    <a href="show.php?id=<?= $row['id'] ?>" class="btn btn-primary">Show</a>

                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-info">Edit</a>
                    <a href="handlers/handleDelete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>

                </div>
            </div>
        </div>
        <?php } ?>
        <?php }else{ 
            $req->Redirect("add.php");
        } ?>
    </div>
</div>

<?php include 'inc/footer.php'; ?>