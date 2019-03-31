<div class="wrapper">
    <?php echo $this->element('mypage_sidebar'); ?>

    <div class="main-content">
        <div class="myprofile-info">
            <h2>Viewing of Grades</h2>
            <!-- <div class="selectbox">
                <select class="grading-period">
                    <option value="">Year Period</option>
                    <option value="">Grade 1</option>
                    <option value="">Grade 2</option>
                    <option value="">Grade 3</option>
                    <option value="">Grade 4</option>
                    <option value="">Grade 5</option>
                    <option value="">Grade 6</option>
                    <option value="">Grade 7</option>
                    <option value="">Grade 8</option>
                    <option value="">Grade 9</option>
                    <option value="">Grade 10</option>
                </select>
            </div> -->
        </div>
        <?php if(!empty($grades)): ?>
        <div class="myprofile-data">
            <?php foreach($grades as $key => $grade): ?>
            <div class="grade-period">
                <span>Grade <?php echo $key ?></span>
                <table class="table">
                    <thead>
                        <tr class="table-row">
                            <th class="table-list">Subject</th>
                            <th class="table-list">First Grading</th>
                            <th class="table-list">Second Grading</th>
                            <th class="table-list">Third Grading</th>
                            <th class="table-list">Fourth Grading</th>
                            <th class="table-list">Final Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($grades[$key] as $k => $v): ?>
                        <tr class="table-body-row">
                            <td class="table-body-list"><?php echo $subjects[$v['subject_id']] ?></td>
                            <td class="table-body-list"><?php echo $v['first'] ?></td>
                            <td class="table-body-list"><?php echo $v['second'] ?></td>
                            <td class="table-body-list"><?php echo $v['third'] ?></td>
                            <td class="table-body-list"><?php echo $v['fourth'] ?></td>
                            <td class="table-body-list"><?php echo $v['final'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endforeach; ?>
            <div class="print-button">
                <button>PRINT</button>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>