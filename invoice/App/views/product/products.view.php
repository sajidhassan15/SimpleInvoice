<?php require('App/views/partials/head.php');  ?>


<div class="container">
    <div class="card">
        <?php require('App/views/partials/nav.php'); ?>
        <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Products</strong> <a href="/addproduct"
                class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Product</a></div>
    </div>
    <hr>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>SR#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Price</th>
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
                    <td><?php echo $list->id;?></td>
                    <td><?php echo $list->pro_name;?></td>
                    <td><?php echo $list->pro_code;?></td>
                    <td><?php echo $list->pro_rate;?></td>
                    <td>
                        <form method="post" action="/updateproduct">
                            <input hidden name="id" value="<?php echo $list->id; ?>" />
                            <button type="submit" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</button> |
                        </form>
                        <form method="post" action="/deleteproduct">
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
                    <td colspan="6" align="center">No Records Found!</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php require('App/views/partials/footer.php');  ?>