<?php require('App/views/partials/head.php');  ?>



<div class="container">
    <div class="card">
        <?php require('App/views/partials/nav.php'); ?>
        <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Invoices</strong> <a href="/addinvoice"
                class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Invoice</a></div>
    </div>
    <hr>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>SR#</th>
                    <th>Invoice Code</th>
                    <th>Customer ID</th>
                    <th class="text-center">Action</th>
                    <th>Print</th>
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
                    <td><?php echo $list->inv_code;?></td>
                    <td><?php echo $list->cus_id;?></td>
                    <td>
                        <!-- <form method="post" action="/updateinvoice">
                           <input hidden name="id" value="<?php echo $list->id; ?>" />
                           <button type="submit" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</button> |
                        </form> -->
                        <form method="post" action="/deleteinvoice">
                            <input hidden name="id" value="<?php echo $list->id; ?>" />
                            <button type="delete" name="delete" value="delete" id="delete" class="text-danger"><i
                                    class="fa fa-fw fa-trash"></i> Delete </button>
                        </form>
                    </td>
                    <td align="center">
                        <form method="post" action="/printinvoice">
                            <input hidden name="id" value="<?php echo $list->id; ?>" />
                            <button type="submit" name="print" value="print" id="print" class="text-primary"><i
                                    class="fa fa-fw fa-print"></i> Print </button>
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