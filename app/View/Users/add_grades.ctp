<div class="content">
    <?php echo $this->Flash->render(); ?>
  <div class="content-wrapper">
    <div class="content-title">
      <span>Adding Of Grades</span>
    </div>
    <form method="GET">
        <div class="search-student">
        <input type="text" name="student_id" placeholder="Search Student ID" value="<?php echo !empty($_GET['student_id']) ? $_GET['student_id'] : '' ?>">
        <select name="grade">
            <?php foreach($grades as $key => $grade): ?>
                <option value="<?php echo $key ?>" <?php echo !empty($_GET['grade']) && $_GET['grade'] == $key ? 'selected' : '' ?>><?php echo $grade ?></option>
            <?php endforeach; ?>
        </select>
        <button> Search </button>
        </div>
    </form>
    <?php if(!empty($students)): ?>
    <div class="grades-record">
      <div class="grade-period">
        <span>Grade <?php echo $_GET['grade'] ?></span>
        <form method="post">
            <table class="table table--encode">
                <thead>
                    <tr class="table-row">
                        <th class="table-list">Subject</th>
                        <th class="table-list">First Grading</th>
                        <th class="table-list">Second Grading</th>
                        <th class="table-list">Third Grading</th>
                        <th class="table-list">Fourth Grading</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($student_grade)): ?>
                    <?php foreach($student_grade as $key => $subject): ?>
                    <tr class="table-body-row">
                        <td class="table-body-list"><?php echo $grades[$subject['Grade']['subject_id']] ?></td>
                        <input type="hidden" name="subject_id[<?php echo $subject['Grade']['subject_id'] ?>]" value="<?php echo $subject['Grade']['subject_id'] ?>" class="table-input">
                        <td class="table-body-list"><input type="number" name="first[<?php echo $subject['Grade']['subject_id'] ?>]" class="table-input" value="<?php echo $subject['Grade']['first'] ?>"></td>
                        <td class="table-body-list"><input type="number" name="second[<?php echo $subject['Grade']['subject_id'] ?>]" class="table-input" value="<?php echo $subject['Grade']['second'] ?>"></td>
                        <td class="table-body-list"><input type="number" name="third[<?php echo $subject['Grade']['subject_id'] ?>]" class="table-input" value="<?php echo $subject['Grade']['third'] ?>"></td>
                        <td class="table-body-list"><input type="number" name="fourth[<?php echo $subject['Grade']['subject_id'] ?>]" class="table-input" value="<?php echo $subject['Grade']['fourth'] ?>"></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <?php foreach($subjects as $key => $subject): ?>
                    <tr class="table-body-row">
                        <td class="table-body-list"><?php echo $subject ?></td>
                        <input type="hidden" name="subject_id[<?php echo $key ?>]" value="<?php echo $key ?>" class="table-input">
                        <td class="table-body-list"><input type="number" name="first[<?php echo $key ?>]" class="table-input"></td>
                        <td class="table-body-list"><input type="number" name="second[<?php echo $key ?>]" class="table-input"></td>
                        <td class="table-body-list"><input type="number" name="third[<?php echo $key ?>]" class="table-input"></td>
                        <td class="table-body-list"><input type="number" name="fourth[<?php echo $key ?>]" class="table-input"></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="print-button">
                <button>Save</button>
            </div>
        </form>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>