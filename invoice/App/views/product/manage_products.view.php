<?php
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style>
    .container {
        margin-top: 100px;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add Product</strong> </div>
            <div class="card-body">
                <div class="col-sm-6">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                    <form method="post"
                        action="<?php if(isset($result)) { echo "/updateProduct"; }else { echo "/addproducts"; } ?>">
                        <div class="form-group">
                            <label>Product Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter Product name" required value="<?php echo $result['0']->pro_name?>">
                        </div>
                        <div class="form-group">
                            <label>Product Code <span class="text-danger">*</span></label>
                            <input type="text" name="code" id="code" class="form-control"
                                placeholder="Enter Product Code" required value="<?php echo $result['0']->pro_code?>">
                        </div>
                        <div class="form-group">
                            <label>Product Price <span class="text-danger">*</span></label>
                            <input type="text" name="rate" id="rate" class="form-control"
                                placeholder="Enter Product price" required value="<?php echo $result['0']->pro_rate?>">
                        </div>
                        <div class="form-group">
                            <input hidden name="id" value="<?php echo $result['0']->id; ?>" />
                            <a href="products" class="btn btn-danger"> Back </a>
                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i
                                    class="fa fa-fw fa-plus-circle"></i> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>

</html>