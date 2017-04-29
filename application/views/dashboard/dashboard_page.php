<h2>Dashboard Page - <?php echo $name; ?><?php echo $age; ?></h2>

<div class="modal fade password_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <form method="post" action="<?php echo site_url('dashboard/changepassword'); ?>" class="password_change_form">
            <div class="modal-body">

                    <div class="form-group">
                        <label>New Password: </label>
                        <input type="text" name="new_password" class="form-control new_password"/>
                    </div>
                    <div class="form-group">
                        <label>Confirm New Password: </label>
                        <input type="text" name="confirm_new_password" class="form-control confirm_new_password"/>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->