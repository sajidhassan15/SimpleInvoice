<?php require('App/views/partials/head.php');  ?>



<div class="container">
    <div class="card">
        <?php require('App/views/partials/nav.php'); ?>
        <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Customers</strong> <a href="/addcust"
                class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Customer</a>
        </div>
    </div>
    <hr>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>SR#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
				if(isset($result['0'])){
				$id=1;
				foreach($result as $list){
				?>
                <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $list->id; ?></td>
                    <td><?php echo $list->name; ?></td>
                    <td><?php echo $list->address; ?></td>
                    <td><?php echo $list->phone_no;?></td>
                    <td>
                        <form method="post" action="/updatecustomer">
                            <input hidden name="id" value="<?php echo $list->id; ?>" />
                            <button type="submit" class="text-primary"><i class="fa fa-fw fa-edit"></i>
                                Edit</button> |
                        </form>
                        <form method="post" action="/deletecustomer">
                            <input hidden name="id" value="<?php echo $list->id; ?>" />
                            <button type="delete" name="delete" value="delete" id="delete" class="text-danger"><i
                                    class="fa fa-fw fa-trash"></i> Delete </button>
                        </form>
                    </td>
                </tr>
                <?php
				  $id++;
				  } } else {?>
                <tr>
                    <td colspan="6">No Records Found!</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php require('App/views/partials/footer.php');  ?>