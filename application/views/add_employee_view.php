<?php $this->load->view('admin_header'); ?>
 
          <h2 class="sub-header">Add Employee</h2>

<?php echo form_open('admin/add_new_employee', 'class="form-horizontal"'); ?>
  <fieldset>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputName" placeholder="Name" type="text" name="name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text" name="email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputDepartment" class="col-lg-2 control-label">Department</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputDepartment" placeholder="Department" type="text" name="department">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputAddress" placeholder="Address" type="text" name="address">
      </div>
    </div>
    <div class="form-group">
      <label for="inputGender" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputGender" placeholder="Gender" type="text" name="gender">
      </div>
    </div>
    <div class="form-group">
      <label for="inputSalary" class="col-lg-2 control-label">Salary</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputSalary" placeholder="Salary" type="text" name="salary">
      </div>
    </div>
    <div class="form-group">
      <label for="inputJoinDate" class="col-lg-2 control-label">Join Date</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputJoinDate" placeholder="YYYY-MM-DD" type="text" name="join_date">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
        </div>
      </div>
    </div>
<?php $this->load->view('admin_footer'); ?>