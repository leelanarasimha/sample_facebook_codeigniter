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


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" action="<?php echo site_url('dashboard/submitpost'); ?>">
                <textarea placeholder="Enter Comment" class="form-control" name="comment"></textarea>
                <div class="text-right">
                <input type="submit" name="submit" value="Post" class="btn btn-primary"/>

                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php foreach ($comments as $comment) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div><?php echo $comment['email']; ?></div>
                    <div><?php echo $comment['comment']; ?></div>
                    (<?php echo $comment['like_count']; ?>)<a href="<?php echo site_url('dashboard/likepost/'.$comment['id']); ?>">Like</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>