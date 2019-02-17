<div class="content">
  <div class="content-wrapper">
    <div class="content-title">
      <span>List Of Feedbacks</span>
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
                <th class="table-list">ID</th>
              <th class="table-list">Teacher Name</th>
              <th class="table-list">Feedback Rate</th>
              <th class="table-list">Feedback Message</th>
              <th class="table-list">Feedback Date</th>
              <th class="table-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">3</td>
              <td class="table-body-list">ang Panget mo mag turo</td>
              <td class="table-body-list">05-05-2019</td>
              <td class="table-body-list">
                <a href="" class="table-edit">View</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">3</td>
              <td class="table-body-list">ang Panget mo mag turo</td>
              <td class="table-body-list">05-05-2019</td>
              <td class="table-body-list">
                <a href="" class="table-edit">View</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">3</td>
              <td class="table-body-list">ang Panget mo mag turo</td>
              <td class="table-body-list">05-05-2019</td>
              <td class="table-body-list">
                <a href="" class="table-edit">View</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">3</td>
              <td class="table-body-list">ang Panget mo mag turo</td>
              <td class="table-body-list">05-05-2019</td>
              <td class="table-body-list">
                <a href="" class="table-edit">View</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">3</td>
              <td class="table-body-list">ang Panget mo mag turo</td>
              <td class="table-body-list">05-05-2019</td>
              <td class="table-body-list">
                <a href="" class="table-edit">View</a>
                <a href="" class="table-delete">Delete</a>
              </td>
            </tr>
            <tr class="table-body-row">
              <td class="table-body-list">1002</td>
              <td class="table-body-list">Juan Dela Cruz</td>
              <td class="table-body-list">3</td>
              <td class="table-body-list">ang Panget mo mag turo</td>
              <td class="table-body-list">05-05-2019</td>
              <td class="table-body-list">
                <a href="" class="table-edit">View</a>
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