<?php include 'inc/header.php'; ?>

<?php $id = $req->GET("id"); ?>

<div class="container my-5">
    <div class="row">
        <?php $row = $db->ReadRow("products", $id); ?>
        <div class="col-lg-6">
            <img src="images/upload/<?= $row['image'] ?>" class="card-img-top">
        </div>
        <div class="col-lg-6">
            <h5><?= $row['product_name'] ?></h5>
            <p class="text-muted">Price: <?= $row['price'] ?> EGP</p>
            <p><?= $row['description'] ?></p>
            <a href="index.php" class="btn btn-primary">Back</a>
            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-info">Edit</a>
            <a href="handlers/handleDelete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>



<?php include 'inc/footer.php'; ?>