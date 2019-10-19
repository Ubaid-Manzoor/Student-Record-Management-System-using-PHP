
<?php require APPROOT . '/views/inc/header.php';?>

        <?php require_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="main-area col-10 p-5">
            <h1>Welcome Admin</h1>    
            <form method="POST" action="<?php echo URLROOT; ?>/pages/register">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Select Course</label>
                            <input name="Course-name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Select Subjects</label>
                            <input name="subjects" type="text" class="form-control">
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
                                    <input class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Guardian Name</label>
                                        <input class="form-control">
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
                                    <input class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Middle Name</label>
                                    <input class="form-control">
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
                                        <input class="form-control">
                                </div>
                                <div class="form-group">
                                        <label for="">Category</label>
                                        <select class="form-control" name="income">
                                            <option>10k-20k</option>
                                            <option>20k-30k</option>
                                            <option>30k ...</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nationality</label>
                                    <input class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
<?php require APPROOT . '/views/inc/footer.php';?>
