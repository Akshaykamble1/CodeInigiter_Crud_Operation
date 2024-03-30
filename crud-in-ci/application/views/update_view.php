<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <title>Crud-With-Codeiginator</title>
</head>

<body>
    <!-- <div class="jumbotron">
        <h1 align="center">CRUD CI APP</h1>
    </div> -->

    <div class="container">
        <h1 align="center">Update Product</h1>

        <form action="<?php echo base_url(); ?>index.php/crud/update/<?php echo $singleProduct->id; ?>" method="post">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" placeholder="Enter product name" class="form-control" value="<?php echo $singleProduct->name; ?>">
            </div> <br>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="text" name="price" placeholder="Enter product price" class="form-control" value="<?php echo $singleProduct->price; ?>">
            </div><br>
            <div class="form-group">
                <label for="quantity">Product Quantity</label>
                <input type="text" name="quantity" placeholder="Enter product quantity" class="form-control" value="<?php echo $singleProduct->quantity; ?>">
            </div><br>

            <input type="submit" name="update" value="Update" class="btn btn-primary">
    </div>
    </form>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>