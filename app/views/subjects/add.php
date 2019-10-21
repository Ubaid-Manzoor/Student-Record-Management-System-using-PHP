<?php echo "Here" ?> 

<?php require APPROOT . '/views/inc/header.php';?>

        <?php require_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="main-area col-10 p-5">
            <h1>Welcome Admin</h1>
            <hr>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Add Subjects
                    </div>
                    <div class="card-body">
                        <form method="POST" action="#">
                            <div class="form-group">
                                <label for="">Course Short Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Course Full Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Subject 1</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Subject 2</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Subject 3</label>
                                <input type="text" class="form-control">
                            </div>
                            <input type="submit" value="Add Course" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php require APPROOT . '/views/inc/footer.php';?>
