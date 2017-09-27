<?php $this->load->view('admin_header'); ?>
 
          <h2 class="sub-header">Employee Details</h2>
          <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/add_employee'); ?>">Add Employee</a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Password</th>
                  <th>Department</th>
                  <th>Salary</th>
                  <th>Joining Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($employees as $e) { ?>
                <tr>
                  <td><a href="<?php echo base_url('index.php/admin/employee_detail'); ?>"><?php echo $e['name']; ?></a></td>
                  <td><?php echo $e['password']; ?></td>
                  <td><?php echo $e['department']; ?></td>
                  <td><?php echo $e['salary']; ?></td>
                  <td><?php echo $e['join_date']; ?></td>
                  <td><a class="btn btn-default" href="<?php echo base_url('index.php/admin/edit_employee/'.$e['id']); ?>">Edit</a></td>
                  <td><a class="btn btn-danger" href="<?php echo base_url('index.php/admin/delete_employee/'.$e['id']); ?>">Delete</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php $this->load->view('admin_footer'); ?>