<div class="content">
  <div class="content-wrapper">
    <div class="content-title">
      <span>Register Teacher Record</span>
    </div>    
    <div class="grades-record">
      <div class="flash-message">Successfully added</div>
      <div class="flash-message-error">Failed to add</div>
      <form>
        <div class="form-record">
          <div class="form-name"> 
            <div class="form-group">
              <label>First Name <span>*</span></label>
              <input type="text">
              <span class="error-message">error message</span>
            </div>
            <div class="form-group">
              <label>Last Name <span>*</span></label>
              <input type="text">
              <span class="error-message">error message</span>
            </div>
            <div class="form-group">
              <label>Middle Name <span>*</span></label>
              <input type="text">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Gender <span>*</span></label>
              <select>
                <option>--</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Birthday <span>*</span></label>
              <input type="text" id="datepicker">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Nationality <span>*</span></label>
              <input type="text" id="datepicker">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Religion <span>*</span></label>
              <input type="text">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Address <span>*</span></label>
              <input type="text">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Email Address <span>*</span></label>
              <input type="text">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Contact Number <span>*</span></label>
              <input type="number">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Date Hired <span>*</span></label>
              <input type="text" id="datepicker2">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Department <span>*</span></label>
              <input type="text" id="datepicker2">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Subject Handle <span>*</span></label>
              <input type="text" id="datepicker2">
              <span class="error-message">error message</span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Yr/Grade Assigned <span>*</span></label>
              <input type="text" id="datepicker2">
              <span class="error-message">error message</span>
            </div>
          </div>
        </div>
        <div class="print-button">
          <button>Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(function() {
  $('#datepicker2').datepicker();
  $('#datepicker').datepicker();
})

</script>