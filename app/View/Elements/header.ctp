<div class="header-container">
    <div class="header-logo">
        <a href="<?php echo $url ?>fadmes/">
            <img src="<?php echo $url ?>img/common/fadmes-logo.png" alt="F.A De Mesa Elementary School">
            <span>F.A De Mesa Elementary School</span>
        </a>
    </div>
    <nav class="navigation">
        <ul class="navigation-list">
            <li class="navigation-item">
                <a class="myprofile" href="/fadmes/">Home</a>
            </li>
            <li class="navigation-item" data-id="announcements">Announcements</li>
            <li class="navigation-item" data-id="about-us">About Us</li>
            <li class="navigation-item" data-id="contact-us">Contact Us</li>
            <li class="navigation-item">
                <a class="myprofile" href="<?php echo $url ?>students/profile">My Profile</a>
            </li>
            <?php if($this->Session->check('Auth.Student')): ?>
            <li class="navigation-item">
                <a class="login-button" href="<?php echo $url ?>students/login">Login</a>
            </li>
            <?php else: ?>
            <li class="navigation-item">
                <a class="login-button" href="<?php echo $url ?>users/logout">Logout</a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>