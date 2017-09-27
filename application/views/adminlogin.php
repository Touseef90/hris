<?php $this->load->view('header'); ?>

<div class="container">
<div class="row">

  <form class="form-signin">
    <h2 class="form-signin-heading" style="text-align: center;">Admin Login</h2>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Enter Your Email" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Enter Your Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  </form>

</div>
</div>

<?php $this->load->view('footer'); ?>