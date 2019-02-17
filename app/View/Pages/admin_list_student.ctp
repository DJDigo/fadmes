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
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Daryll James Digo</td>
              <td class="table-body-list">Grade 10</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Graduate</td>
              <td class="table-body-list">
                <a href="" class="table-edit">Edit</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1005</td>
              <td class="table-body-list">Menandro Oba</td>
              <td class="table-body-list">Grade 2</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Enrolled</td>
              <td class="table-body-list">
                <a href="" class="table-edit">Edit</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1007</td>
              <td class="table-body-list">Jomari Rodriguez</td>
              <td class="table-body-list">Grade 4</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Enrolled</td>
              <td class="table-body-list">
                <a href="" class="table-edit">Edit</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">Grade 10</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Enrolled</td>
              <td class="table-body-list">
                <a href="" class="table-edit">Edit</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
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