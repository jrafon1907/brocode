<!-- Edit Supplier -->
<div class="modal fade" id="edit_<?php echo $sqrow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Supplier</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?php
                    $a = mysqli_query($conn, "SELECT * FROM supplier LEFT JOIN user ON user.userid=supplier.userid WHERE supplier.userid='" . $sqrow['userid'] . "'");
                    $b = mysqli_fetch_array($a);
                    ?>
                    <div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_supplier.php<?php echo '?id=' . $sqrow['userid']; ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Company:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['company_name']); ?>" class="form-control" name="name">
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Full Name:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['full_name'] ?>" class="form-control" name="fullname">
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Address:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['company_address']); ?>" class="form-control" name="address">
                        </div>
                        <div style="height:10px;"></div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Contact Info:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['contact'] ?>" class="form-control" name="contact">
                        </div>
                        
                        <div style="height:10px;"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
