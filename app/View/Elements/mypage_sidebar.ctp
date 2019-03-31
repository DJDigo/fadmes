<aside class="sidebar">
    <div class="sidebar-content">
        <div class="sidebar-image">
            <img src="<?php echo $url; ?>img/common/fadmes-logo.png" class="profile-image">
            <span class="profile-name"><?php echo ucfirst($this->Session->read('Auth.User.firstname')). ' ' . ucfirst($this->Session->read('Auth.User.lastname')) ?></span>
        </div>
        <nav class="sidebar-menu">
            <ul>
                <li class="sidebar-menu-item">
                    <a href="<?php echo $url . "students/profile" ?>" class="sidebar-menu-link sidebar-menu-link--active">Personal Information</a>
                </li>
                <li class="sidebar-menu-item">
                    <a href="<?php echo $url . "students/my_grades" ?>" class="sidebar-menu-link">Viewing of Grades</a>
                </li>
                <!-- <li class="sidebar-menu-item">
                    <a href="/fadmes/feedback" class="sidebar-menu-link">Feedback Form</a>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>