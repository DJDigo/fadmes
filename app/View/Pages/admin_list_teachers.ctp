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
      <div class="grade-period">
        <table class="table" id="admin-list">
          <thead>
            <tr class="table-row">
              <th class="table-list">Teacher ID</th>
              <th class="table-list">Teacher Name</th>
              <th class="table-list">Grade/Yr Handle</th>
              <th class="table-list">Hired Date</th>
              <th class="table-list">Status</th>
              <th class="table-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">Grade 12</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Active</td>
              <td class="table-body-list">
                <a href="" class="table-edit">Edit</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">Grade 12</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Active</td>
              <td class="table-body-list">
                <a href="" class="table-edit">Edit</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">Grade 12</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Active</td>
              <td class="table-body-list">
                <a href="" class="table-edit">Edit</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">Grade 12</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Active</td>
              <td class="table-body-list">
                <a href="" class="table-edit">Edit</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">Grade 12</td>
              <td class="table-body-list">06-20-2019</td>
              <td class="table-body-list">Active</td>
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