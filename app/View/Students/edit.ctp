<div class="content">
  <div class="content-wrapper">
    <div class="content-title">
      <span>Update Student Record</span>
    </div>    
    <div class="grades-record">
    <?php echo $this->Flash->render(); ?>
      <form method="post">
        <div class="form-record">
          <div class="form-name"> 
            <div class="form-group">
              <label>First Name <span>*</span></label>
              <input type="text" name="firstname" value="<?php echo !empty($this->request->data['firstname']) ? $this->request->data['firstname'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Student.firstname'); ?></span>
            </div>
            <div class="form-group">
              <label>Last Name <span>*</span></label>
              <input type="text" name="lastname" value="<?php echo !empty($this->request->data['lastname']) ? $this->request->data['lastname'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Student.lastname'); ?></span>
            </div>
            <div class="form-group">
              <label>Middle Name</label>
              <input type="text" name="middlename" value="<?php echo !empty($this->request->data['middlename']) ? $this->request->data['middlename'] : '' ?>">
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Gender <span>*</span></label>
              <select name="gender">
                <option value=" ">--</option>
                <option value="1" <?php echo !empty($student['Student']['gender']) && $student['Student']['gender'] == 1 ? 'selected' : '' ?>>Male</option>
                <option value="2" <?php echo !empty($student['Student']['gender']) && $student['Student']['gender'] == 2 ? 'selected' : '' ?>>Female</option>
              </select>
              <span class="error-message"><?php echo $this->Form->error('Student.gender'); ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Birthday <span>*</span></label>
              <input type="text" id="datepicker" name="birthday" value="<?php echo !empty($this->request->data['birthday']) ? $this->request->data['birthday'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Student.birthday'); ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Status <span>*</span></label>
              <select name="status">
                <?php foreach(Configure::read('STATUS') as $key => $value): ?>
                <option value="<?php echo $key ?>" <?php echo isset(Configure::read('STATUS')[$this->request->data['status']]) ? 'selected' : '' ?>><?php echo $value ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Grade <span>*</span></label>
              <select name="grade">
                <?php foreach(Configure::read('GRADE') as $key => $value): ?>
                <option value="<?php echo $key ?>" <?php echo isset(Configure::read('GRADE')[$this->request->data['grade']]) ? 'selected' : '' ?>><?php echo $value ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Address <span>*</span></label>
              <input type="text" name="address" value="<?php echo !empty($this->request->data['address']) ? $this->request->data['address'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Student.address'); ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Guardian Name <span>*</span></label>
              <input type="text" name="guardian" value="<?php echo !empty($this->request->data['guardian']) ? $this->request->data['guardian'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Student.guardian'); ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Contact Number <span>*</span></label>
              <input type="number" name="contact" value="<?php echo !empty($this->request->data['contact']) ? $this->request->data['contact'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Student.contact'); ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Date Enrolled <span>*</span></label>
              <input type="text" id="datepicker2" name="date_enrolled" value="<?php echo !empty($this->request->data['date_enrolled']) ? $this->request->data['date_enrolled'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Student.date_enrolled'); ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Student ID <span>*</span></label>
              <input type="text" name="student_id" value="<?php echo !empty($this->request->data['student_id']) ? $this->request->data['student_id'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Student.student_id'); ?></span>
            </div>
          </div>
          <input type="hidden" name="id" value="<?php echo $student['Student']['id'] ?>"> 
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