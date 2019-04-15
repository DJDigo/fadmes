<div class="content">
  <div class="content-wrapper">
    <div class="content-title">
      <span>Viewing Of Grades</span>
    </div>

    <form method="GET">
        <div class="search-student">
        <input type="text" name="student_id" placeholder="Search Student ID" value="<?php echo !empty($_GET['student_id']) ? $_GET['student_id'] : '' ?>">
        <select name="grade_id">
            <?php foreach($grades as $key => $grade): ?>
                <option value="<?php echo $key ?>" <?php echo !empty($_GET['grade_id']) && $_GET['grade_id'] == $key ? 'selected' : '' ?>><?php echo $grade ?></option>
            <?php endforeach; ?>
        </select>
        <button> Search </button>
        </div>
    </form>
    
    <div class="grades-record">
      <?php foreach($students as $key => $student): ?>
      <div class="grade-period">
        <span>Grade 1</span>
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
            <?php foreach($student['Grade'] as $k => $v): ?>
            <tr class="table-body-row">
              <td class="table-body-list"><?php echo $subjects[$v['subject_id']] ?></td>
              <td class="table-body-list"><?php echo $v['first'] ?></td>
              <td class="table-body-list"><?php echo $v['second'] ?></td>
              <td class="table-body-list"><?php echo $v['third'] ?></td>
              <td class="table-body-list"><?php echo $v['fourth'] ?></td>
              <td class="table-body-list"><?php echo $v['final']; ?></td>
            </tr>
            <?php endforeach; ?>
            <!-- <tr class="table-body-row">
              <td class="table-body-list">Science</td>
              <td class="table-body-list">96</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">English</td>
              <td class="table-body-list">90</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">P.E</td>
              <td class="table-body-list">96</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr> -->
          </tbody>
        </table>
        <!-- <div class="textarea-wrapper">
            <label>Suggestions/Recommendations</label>
            <p>ako pogi pogi ako sagooot!</p>
        </div> -->
      </div>
      <?php endforeach; ?>
      <!-- <div class="grade-period">
        <span>Grade 2</span>
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
            <tr class="table-body-row">
              <td class="table-body-list">Math</td>
              <td class="table-body-list">90</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">Science</td>
              <td class="table-body-list">96</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">English</td>
              <td class="table-body-list">90</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">P.E</td>
              <td class="table-body-list">96</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="grade-period">
        <span>Grade 3</span>
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
            <tr class="table-body-row">
              <td class="table-body-list">Math</td>
              <td class="table-body-list">90</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">Science</td>
              <td class="table-body-list">96</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">English</td>
              <td class="table-body-list">90</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">P.E</td>
              <td class="table-body-list">96</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
              <td class="table-body-list">93</td>
              <td class="table-body-list">89</td>
            </tr>
          </tbody>
        </table>
      </div> -->
      <div class="print-button">
        <button>PRINT</button>
      </div>
    </div>
  </div>
</div>