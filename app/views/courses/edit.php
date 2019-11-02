<?php 
?>

<?php require APPROOT . '/views/inc/header.php';?>

        <?php require_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="main-area col-10 p-5">
            <h1>Welcome Admin</h1>
            <hr>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Edit Course
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo URLROOT; ?>/Courses/edit/<?php echo $data->id; ?>">
                            <div class="form-group">
                                <label for="">Course Short Name</label>
                                <input name="cshort" type="text" class="form-control" value="<?php echo $data->short_name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Course Full Name</label>
                                <input name="cfull" type="text" class="form-control" value="<?php echo $data->full_name; ?>">
                            </div>
                            <input type="submit" name="submit" value="Update" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php require APPROOT . '/views/inc/footer.php';?>
