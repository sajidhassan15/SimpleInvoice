<?php
?>



<!doctype html>
<html lang="en-US" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Customer</title>
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
            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add Customer</strong> </a></div>
            <div class="card-body">
                <div class="col-sm-6">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                    <form method="post"
                        action="<?php if(isset($result)) { echo "/updateCustomer"; }else { echo "/addcustom"; } ?> ">
                        <div class="form-group">
                            <label>First Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter First name"
                                required value="<?php echo $result['0']->name?>">
                        </div>
                        <div class="form-group">
                            <label>Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Enter address" required value="<?php echo $result['0']->address?>">
                        </div>
                        <div class="form-group">
                            <label>Mobile <span class="text-danger">*</span></label>
                            <input type="tel" class="tel form-control" name="phone_no" id="phone_no"
                                placeholder="Enter mobile" required value="<?php echo $result['0']->phone_no?>">
                        </div>
                        <div class="form-group">
                            <input hidden name="id" value="<?php echo $result['0']->id; ?>" />
                            <a href="/customers" class="btn btn-danger"> Back </a>
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