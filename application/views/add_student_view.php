<?php $this->load->view('admin_header'); ?>
 
          <h2 class="sub-header">Add Student</h2>
<form class="form-horizontal">
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
        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputClass" class="col-lg-2 control-label">Class</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputClass" placeholder="Class" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputAddress" placeholder="Address" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputGender" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputGender" placeholder="Gender" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputJoinDate" class="col-lg-2 control-label">Join Date</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputJoinDate" placeholder="YYYY-MM-DD" type="text">
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