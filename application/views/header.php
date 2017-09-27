<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRIS</title>

    <link href="<?php echo base_url('assets/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/signin.css'); ?>" rel="stylesheet">

  </head>
  <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">HRIS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url('index.php/adminlogin'); ?>">Admin</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo base_url('index.php/login'); ?>">Login</a></li>
              <li><a href="<?php echo base_url('index.php/logout'); ?>">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>