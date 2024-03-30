<!-- application/views/crud_view.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <title>Crud-With-Codeiginator</title>
</head>

<body>
    <div class="jumbotron">
        <h1 align="center">CRUD CI APP</h1>
    </div>
    <div class="container">
        <div class="clear-fix">
            <h3 style="float: left;">All Products</h3>
            <a href="#" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">Add Product</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach ($product_details as $products) : ?>
                    <tr>
                        <td><?php echo $products->id; ?></td>
                        <td><?php echo $products->name; ?></td>
                        <td><?php echo $products->price; ?></td>
                        <td><?php echo $products->quantity; ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>index.php/crud/updateProduct/<?php echo urlencode($products->id); ?>" class="btn btn-success">Edit</a>

                            
                            <a href="<?php echo base_url(); ?>index.php/crud/deleteProduct/<?php echo $products->id; ?>"  class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo base_url(); ?>index.php/crud/addProduct" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" placeholder="Enter product name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input type="text" name="price" placeholder="Enter product price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Product Quantity</label>
                            <input type="text" name="quantity" placeholder="Enter product quantity" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="insert" value="Add Product" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php if ($this->session->flashdata('error')) : ?>
        <div class="bg-danger" align="center" style="color: #fff;">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>


    <?php if ($this->session->flashdata('inserted')) : ?>
        <div class="bg-success" align="center" style="color: #fff;">
            <?php echo $this->session->flashdata('inserted'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('deleted')) : ?>
        <div class="bg-success" align="center" style="color: #fff;">
            <?php echo $this->session->flashdata('deleted'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('updated')) : ?>
        <div class="bg-success" align="center" style="color: #fff;">
            <?php echo $this->session->flashdata('updated'); ?>
        </div>
    <?php endif; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>