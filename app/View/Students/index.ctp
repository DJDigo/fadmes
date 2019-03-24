<div class="content">
  <div class="content-wrapper">
    <div class="content-title">
      <span>List Of Student</span>
    </div>

    <div class="search-student">
      <input type="text" placeholder="Search Student Name">
      <button> Search </button>
    </div>
    
    <div class="grades-record">
    <?php echo $this->Flash->render(); ?>
      <div class="grade-period">
        <table class="table" id="admin-list">
          <thead>
            <tr class="table-row">
              <th class="table-list">Student ID</th>
              <th class="table-list">Student Name</th>
              <th class="table-list">Student Grade</th>
              <th class="table-list">Admission Date</th>
              <th class="table-list">Status</th>
              <th class="table-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($students as $key => $value): ?>
            <tr class="table-body-row">
              <td class="table-body-list"><?php echo $value['Student']['student_id'] ?></td>
              <td class="table-body-list"><?php echo $value['Student']['firstname'] .' '. $value['Student']['lastname'] ?></td>
              <td class="table-body-list"><?php echo $grade[$value['Student']['grade']] ?></td>
              <td class="table-body-list"><?php echo date('Y-m-d', strtotime($value['Student']['date_enrolled'])) ?></td>
              <td class="table-body-list"><?php echo $status[$value['Student']['status']] ?></td>
              <td class="table-body-list">
                <a href="<?php echo $url . "students/edit/" . $value['Student']['id'] ?>" class="table-edit">Edit</a>
                <a href="<?php echo $url . "students/delete/" . $value['Student']['id'] ?>" class="table-delete">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  $('#admin-list').dataTable({
      "lengthMenu": [ 10, 50, 100 ],
      "lengthChange": true,
      "searching": false,
      "info": true,
      "iDisplayLength":10,
      'pagingType': 'full_numbers',
  });
</script>