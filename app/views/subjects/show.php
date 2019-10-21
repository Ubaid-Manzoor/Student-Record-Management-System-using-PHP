<?php require APPROOT . '/views/inc/header.php';?>

        <?php require_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="main-area col-10">
            <div class="container mt-5">
                <div class="header">
                    <h1>View All Subjects</h1>
                </div>
                <div class="card">
                    <div class="card-header">
                        View Courses
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped"</table>
                            <thead class="">
                                <tr>
                                    <th>Id</th>
                                    <th>Sub1</th>
                                    <th>Sub2</th>
                                    <th>Sub3</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $course): ?>
                                    <tr>
                                        <td><?php echo $course->id; ?></td>
                                        <td><?php echo $course->sub1; ?></td>
                                        <td><?php echo $course->sub2; ?></td>
                                        <td><?php echo $course->sub3; ?></td>
                                        <td class="action-icon">
                                            <i class="fas fa-pen-square"></i>    
                                            <i class="fas fa-backspace ml-auto"></i>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php require APPROOT . '/views/inc/footer.php';?>
