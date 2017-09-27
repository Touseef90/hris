<?php $this->load->view('header'); ?>

<div class="container">
<div class="row">

  <?php echo form_open('login/time_in', 'class="form-signin"'); ?>
    <h2 class="form-signin-heading" style="text-align: center;">Please Login</h2>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Enter Your Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  </form>

</div>
</div>

<?php $this->load->view('footer'); ?>