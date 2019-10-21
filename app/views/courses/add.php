<?php require APPROOT . '/views/inc/header.php';?>

        <?php require_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="main-area col-10 p-5">
            <h1>Welcome Admin</h1>
            <hr>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Add Course
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo URLROOT; ?>/Courses/add">
                            <div class="form-group">
                                <label for="">Course Short Name</label>
                                <input name="cshort" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Course Full Name</label>
                                <input name="cfull" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Date of Creation</label>
                                <input name="creation_date" type="date" class="form-control">
                            </div>
                            <input type="submit" name="submit" value="Add Course" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php require APPROOT . '/views/inc/footer.php';?>
