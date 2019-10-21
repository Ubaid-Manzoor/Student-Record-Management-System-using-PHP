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
                       
                        <form method="POST" action="<?php echo URLROOT; ?>/Subjects/add">
                            <div class="form-group">
                                <label for="">Course Short Name</label>
                                <select name="short_name" class="custom-select">
                                    <?php foreach($data as $course): ?>
                                        <option value="<?php echo $course->short_name; ?>"><?php echo $course->short_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Course Full Name</label>
                                <select name="full_name" class="custom-select">
                                    <?php foreach($data as $course): ?>
                                        <option value="<?php echo $course->full_name; ?>"><?php echo $course->full_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Subject 1</label>
                                <input name="sub1" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Subject 2</label>
                                <input name="sub2" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Subject 3</label>
                                <input name="sub3" type="text" class="form-control">
                            </div>
                            <input name="submit" type="submit"  value="Add Course" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php require APPROOT . '/views/inc/footer.php';?>
