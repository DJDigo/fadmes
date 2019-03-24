<div class="content">
  <div class="content-wrapper">
    <div class="content-title">
      <span>List Of Teachers</span>
    </div>

    <div class="search-student">
      <input type="text" placeholder="Search Teachers Name">
      <button> Search </button>
    </div>
    
    <div class="grades-record">
      <?php echo $this->Flash->render(); ?>
      <div class="grade-period">
        <table class="table" id="admin-list">
          <thead>
            <tr class="table-row">
              <th class="table-list">ID</th>
              <th class="table-list">Teacher Name</th>
              <!-- <th class="table-list">Grade/Yr Handle</th> -->
              <th class="table-list">Hired Date</th>
              <th class="table-list">email</th>
              <th class="table-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($faculties as $key => $value): ?>
            <tr class="table-body-row">
              <td class="table-body-list"><?php echo $value['Faculty']['id'] ?></td>
              <td class="table-body-list"><?php echo $value['Faculty']['firstname'] ." ". $value['Faculty']['lastname'] ?></td>
              <!-- <td class="table-body-list">Grade 12</td> -->
              <td class="table-body-list"><?php echo date('Y-m-d', strtotime($value['Faculty']['date_hired'])) ?></td>
              <td class="table-body-list"><?php echo $value['Faculty']['email'] ?></td>
              <td class="table-body-list">
                <a href="<?php echo $url. "faculties/edit/". $value['Faculty']['id'] ?>" class="table-edit">Edit</a>
                <a href="<?php echo $url. "faculties/delete/". $value['Faculty']['id'] ?>" class="table-delete">Delete</a>
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