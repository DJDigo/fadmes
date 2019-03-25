<div class="wrapper">
    <?php echo $this->element('mypage_sidebar'); ?>

    <div class="main-content">
        <div class="myprofile-info">
            <h2>Personal Information</h2>
        </div>
        <div class="myprofile-data">
            <ul>
                <li class="myprofile-item">
                    <label>Student ID:</label>
                    <span><?php echo $student['Student']['student_id'] ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Student Status:</label>
                    <span><?php echo Configure::read('STATUS')[$student['Student']['status']] ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Admission Date:</label>
                    <span><?php echo date('Y-m-d', strtotime($student['Student']['date_enrolled'])) ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Grade Year:</label>
                    <span><?php echo Configure::read('GRADE')[$student['Student']['grade']] ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Student Name:</label>
                    <span><?php echo $student['Student']['firstname'] .' '. $student['Student']['lastname'] ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Birth Date:</label>
                    <span><?php echo date('Y-m-d', strtotime($student['Student']['birthday'])); ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Address:</label>
                    <span><?php echo $student['Student']['address'] ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Gender:</label>
                    <span><?php echo Configure::read('GENDER')[$student['Student']['gender']] ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Nationality:</label>
                    <span>Filipino</span>
                </li>
                <!-- <li class="myprofile-item">
                    <label>Religion:</label>
                    <span>Roman Catholic</span>
                </li>
                <li class="myprofile-item">
                    <label>Province:</label>
                    <span>Sorgoson, Sorsogon City</span>
                </li>
                <li class="myprofile-item">
                    <label>Country:</label>
                    <span>Philippines</span>
                </li>
                <li class="myprofile-item">
                    <label>School Section:</label>
                    <span>Philippines</span>
                </li> -->
                <li class="myprofile-item">
                    <label>Guardian's Name:</label>
                    <span><?php echo $student['Student']['guardian'] ?></span>
                </li>
                <li class="myprofile-item">
                    <label>Contact Number:</label>
                    <span><?php echo $student['Student']['contact'] ?></span>
                </li>
            </ul>
        </div>
    </div>
</div>