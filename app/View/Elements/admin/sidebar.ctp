<aside class="sidebar">
  <nav class="sidebar__menu">
    <ul>
      <?php if(!$this->Session->check('Auth.Faculty')): ?>
      <li class="sidebar__list">
        <a href="<?php echo $url . "users/index" ?>" class="sidebar__item sidebar__item--active">
          <i class="fa fa-home sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Dashboard</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
      </li>
      <?php endif; ?>
      <li class="sidebar__list">
        <a href="<?php echo $url . "users/view_grades" ?>" class="sidebar__item">
          <i class="fa fa-folder sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">View Grades</span>
        </a>
      </li>
      <?php if(!$this->Session->check('Auth.Faculty')): ?>
      <li class="sidebar__list">
        <a class="sidebar__item" href="<?php echo $url . "students/add" ?>">
          <i class="fa fa-user-plus sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Add Student Record</span>
        </a>
      </li>
      <?php endif; ?>
      <li class="sidebar__list">
        <a class="sidebar__item" href="<?php echo $url . "students/index" ?>">
          <i class="fa fa-users sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">List of Students</span>
        </a>
      </li>
      <?php if(!$this->Session->check('Auth.Faculty')): ?>
      <li class="sidebar__list">
        <a class="sidebar__item" href="<?php echo $url . "faculties/add" ?>">
          <i class="fa fa-user-plus sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Add Teacher Record</span>
        </a>
      </li>
      <?php endif; ?>
      <?php if(!$this->Session->check('Auth.Faculty')): ?>
      <li class="sidebar__list">
        <a class="sidebar__item" href="<?php echo $url . "faculties/index" ?>">
          <i class="fa fa-chalkboard-teacher sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">List of Teachers</span>
        </a>
      </li>
      <?php endif; ?>
      <li class="sidebar__list">
        <a class="sidebar__item" href="<?php echo $url . "users/add_grades" ?>">
          <i class="fa fa-users sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Encode of Grades</span>
        </a>
      </li>
      <!-- <li class="sidebar__list">
        <a href="/fadmes/admin/feedback" class="sidebar__item">
          <i class="fa fa-book sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Reviews/Feedback <small>6</small></span>
        </a>
      </li> -->
    </ul>
  </nav>
</aside>