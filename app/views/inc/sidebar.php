<nav class="sidebar col-2 bg-light navbar-light">
    <ul class="nav flex-column outer-links">
        <li class="nav-item py-2">
            <a href="#" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item py-2">
            <a href="#" class="nav-link" data-toggle="collapse" data-target="#course-items">Course
                <i class="fas fa-chevron-left"></i>
            </a>
            <ul class="flex-column collapse" id="course-items">
                <li class="nav-item py-2">
                    <a href="<?php echo URLROOT; ?>/Courses/add" class="nav-link">Add Course</a>
                </li>
                <li class="nav-item py-2">
                    <a href="<?php echo URLROOT; ?>/Courses/show" class="nav-link">View Courses</a>
                </li>
            </ul>
        </li>
        <li class="nav-item py-2">
        <a href="#" class="nav-link" data-toggle="collapse" data-target="#subject-items">Subject
                <i class="fas fa-chevron-left"></i>
            </a>
            <ul class="flex-column collapse" id="subject-items">
                <li class="nav-item py-2">
                    <a href="<?php echo URLROOT; ?>/Subjects/add" class="nav-link">Add Subject</a>
                </li>
                <li class="nav-item py-2">
                    <a href="<?php echo URLROOT; ?>/Subjects/show" class="nav-link">View Subjects</a>
                </li>
            </ul>
        </li>
        <li class="nav-item py-2">
            <a href="<?php echo URLROOT; ?>/Students/register"  class="nav-link">Register</a>
        </li>
        <li class="nav-item py-2">
            <a href="<?php echo URLROOT; ?>/Students/show"  class="nav-link">View Students</a>
        </li>
        <li class="nav-item py-2">
            <a href="<?php echo URLROOT; ?>/pages/session"  class="nav-link">Session</a>
        </li>
        <li class="nav-item py-2">
            <a href="#"  class="nav-link">Logout</a>
        </li>
    </ul>
</nav>