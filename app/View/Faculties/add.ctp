<div class="content">
  <div class="content-wrapper">
    <div class="content-title">
      <span>Register Teacher Record</span>
    </div>
    <div class="grades-record">
    <?php echo $this->Flash->render(); ?>
      <!-- <div class="flash-message">Successfully added</div>
      <div class="flash-message-error">Failed to add</div> -->
      <form method="post">
        <div class="form-record">
          <div class="form-name">
            <div class="form-group">
              <label>First Name <span>*</span></label>
              <input type="text" name="firstname" value="<?php echo !empty($this->request->data['firstname']) ? : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.firstname') ?></span>
            </div>
            <div class="form-group">
              <label>Last Name <span>*</span></label>
              <input type="text" name="lastname" value="<?php echo !empty($this->request->data['lastname']) ? $this->request->data['lastname'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.lastname') ?></span>
            </div>
            <div class="form-group">
              <label>Middle Name</label>
              <input type="text" name="middlename" value="<?php echo !empty($this->request->data['middlename']) ? $this->request->data['middlename'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.middlename') ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Gender <span>*</span></label>
              <select name="gender" value="<?php echo !empty($this->request->data['gender']) ? $this->request->data['gender'] : '' ?>">
                <option value="">--</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
              <span class="error-message"><?php echo $this->Form->error('Faculty.gender') ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Birthday <span>*</span></label>
              <input type="text" id="datepicker" name="birthday" value="<?php echo !empty($this->request->data['birthday']) ? $this->request->data['birthday'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.birthday') ?></span>
            </div>
          </div>
          <!-- <div class="form-column">
            <div class="form-group">
              <label>Nationality <span>*</span></label>
              <input type="text" id="datepicker">
              <span class="error-message"><?php echo $this->Form->error() ?></span>
            </div>
          </div> -->
          <!-- <div class="form-column">
            <div class="form-group">
              <label>Religion <span>*</span></label>
              <input type="text">
              <span class="error-message"><?php echo $this->Form->error() ?></span>
            </div>
          </div> -->
          <div class="form-column">
            <div class="form-group">
              <label>Address <span>*</span></label>
              <input type="text" name="address" value="<?php echo !empty($this->request->data['address']) ? $this->request->data['address'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.address') ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Email Address <span>*</span></label>
              <input type="text" name="email" value="<?php echo !empty($this->request->data['email']) ? $this->request->data['email'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.email') ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Contact Number <span>*</span></label>
              <input type="number" name="contact" value="<?php echo !empty($this->request->data['contact']) ? $this->request->data['contact'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.contact') ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Date Hired <span>*</span></label>
              <input type="text" id="datepicker2" name="date_hired" value="<?php echo !empty($this->request->data['date_hired']) ? $this->request->data['date_hired'] : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.date_hired') ?></span>
            </div>
          </div>
          <!-- <div class="form-column">
            <div class="form-group">
              <label>Department <span>*</span></label>
              <input type="text" id="datepicker2">
              <span class="error-message"><?php echo $this->Form->error() ?></span>
            </div>
          </div> -->
          <!-- <div class="form-column">
            <div class="form-group">
              <label>Subject Handle <span>*</span></label>
              <input type="text" id="datepicker2" name="subject">
              <span class="error-message"><?php echo $this->Form->error('subject') ?></span>
            </div>
          </div> -->
          <div class="form-column">
            <div class="form-group">
              <label>Username <span>*</span></label>
              <input type="text" name="username" value="<?php echo !empty($this->request->data['username']) ? : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.username') ?></span>
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label>Password <span>*</span></label>
              <input type="password" name="password" value="<?php echo !empty($this->request->data['password']) ? : '' ?>">
              <span class="error-message"><?php echo $this->Form->error('Faculty.password') ?></span>
            </div>
          </div>
          <div style="display: block;">
            <div class="form-group">
              <label style="font-size: 14px;">Subject <span>*</span></label>
              <div style="display:block; padding-bottom:15px">
              <?php foreach($subjects as $key => $value): ?>
							<div style="display: inline-block; width: 150px; vertical-align: middle; font-size: 14px;">
								<input type="checkbox" name="subject[]" value="<?php echo $key ?>" <?php echo isset($this->request->data['subject'][$key]) ? 'checked' : '' ?>><label><?php echo $value; ?></label>
							</div>
							<?php endforeach; ?>
                </div>
              <span class="error-message"><?php echo $this->Form->error('Faculty.subject') ?></span>
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
