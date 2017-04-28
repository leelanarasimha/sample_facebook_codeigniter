<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="page-header">Register</h1>
            <form method="post" action="<?php echo site_url('register/submit'); ?>">
                <div class="form-group">
                    <label>Email or Phone: </label>
                    <input type="text" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Register"/>
                </div>
            </form>
        </div>
    </div>
</div>