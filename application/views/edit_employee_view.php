<?php $this->load->view('admin_header'); ?>
 
          <h2 class="sub-header">Add Employee</h2>

<?php echo form_open('admin/update_employee/'.$emp['id'], 'class="form-horizontal"'); ?>
  <fieldset>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputName" placeholder="Name" type="text" name="name" value="<?php echo $emp['name']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text" name="email" value="<?php echo $emp['email']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password" value="<?php echo $emp['password']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputDepartment" class="col-lg-2 control-label">Department</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputDepartment" placeholder="Department" type="text" name="department" value="<?php echo $emp['department']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputAddress" placeholder="Address" type="text" name="address" value="<?php echo $emp['address']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputGender" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputGender" placeholder="Gender" type="text" name="gender" value="<?php echo $emp['gender']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputSalary" class="col-lg-2 control-label">Salary</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputSalary" placeholder="Salary" type="text" name="salary" value="<?php echo $emp['salary']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputJoinDate" class="col-lg-2 control-label">Join Date</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputJoinDate" placeholder="YYYY-MM-DD" type="text" name="join_date" value="<?php echo $emp['join_date']; ?>">
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