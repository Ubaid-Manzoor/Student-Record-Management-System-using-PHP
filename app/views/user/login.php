<?php require APPROOT . '/views/inc/header.php';?>

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto bg-light mt-5">
            <div class="text-center">
                <h2>Register</h2>
            </div>
            <form method="post" action="<?php echo URLROOT; ?>/Users/register">

                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" class="form-control <?php echo (!empty($data['email_err'])) ? "is-invalid" :
                        '' ?>" type="text">
                    <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input name="pwd" class="form-control <?php echo (!empty($data['pwd_err'])) ? "is-invalid" :
                        '' ?>" type="password">
                    <span class="invalid-feedback"><?php echo $data['pwd_err'] ?></span>
                </div>

                <div class="row">
                    <div class="col">
                        <input name="submit" type="submit" class="btn btn-success btn-block" value="Login">
                    </div>
                    <div class="col">
                        <div class="btn btn-light btn-block">
                            <a href="">No account? Login</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php';?>
