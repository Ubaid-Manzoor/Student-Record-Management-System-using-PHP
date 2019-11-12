<?php require APPROOT . '/views/inc/header.php';?>

<?php require_once APPROOT . '/views/inc/sidebar.php'; ?>
<div class="main-area col-10 p-5 border border-primary">
    <div class="container">
        <h1>Welcome Admin</h1>
        <form method="POST" action="<?php echo URLROOT; ?>/Students/register">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Select Course</label>
                        <select name="course-name" class="custom-select">
                            <?php foreach($data as $course): ?>
                                <option value="<?php echo $course->short_name; ?>"><?php echo $course->short_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Session</label>
                        <input name="session" type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Personal Imformation
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input name="first-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input name="last-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Guardian Name</label>
                                <input name="guardian-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Family Income</label>
                                <select class="form-control" name="income">
                                    <option>10k-20k</option>
                                    <option>20k-30k</option>
                                    <option>30k ...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Physically Challenged</label>
                                <input name="disability" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Middle Name</label>
                                <input name="middle-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gender" value="male" class="form-check-input">
                                    <label for="" class="form-check-label">male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gender" value="female" class="form-check-input">
                                    <label for="" class="form-check-label">female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gender" value="others" class="form-check-input">
                                    <label for="" class="form-check-label">others</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Occupation</label>
                                <input name="occupation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Category</label>
                                <select class="form-control" name="category">
                                    <option>10k-20k</option>
                                    <option>20k-30k</option>
                                    <option>30k ...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nationality</label>
                                <input name="nationality" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group py-5 text-center">
                    <input class="btn btn-primary" name="register" value="register" type="submit">
                </div>
            </div>
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php';?>
