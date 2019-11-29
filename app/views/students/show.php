<?php require APPROOT . '/views/inc/header.php';?>

        <?php require_once APPROOT . '/views/inc/sidebar.php'; ?>
        <div class="main-area col-10">
            <div class="container mt-5">
                <div class="header">
                    <h1>View All Students</h1>
                </div>
                <div class="card">
                    <div class="card-header">
                        View Students
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped"</table>
                        <thead class="">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $student): ?>
                            <tr>
                                <td><?php echo $student->id; ?></td>
                                <td><?php echo $student->first_name . $student->middle_name . $student->last_name;
                                ?></td>
                                <td><?php echo $student->course_name; ?></td>
                                <td><?php echo $student->gender; ?></td>
                                <td class="action-icon">
                                    <a href="<?php echo URLROOT; ?>/Subjects/edit/<?php echo $course->id ?>">
                                        <i class="fas fa-pen-square"></i>
                                    </a>
                                    <a href="<?php echo URLROOT; ?>/Subjects/delete/<?php echo $course->id ?>">
                                        <i class="fas fa-backspace ml-auto"></i>
                                    </a>
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
