<!-- <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
 <head>
   <meta charset="UTF-8">
   <title>Login</title>
   <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.css')?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-style.css')?>">
 </head>
 <body>
      <h2>Halaman Login</h2>
      <?php
   // Cetak jika ada notifikasi
      if($this->session->flashdata('message')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('message').'</p>';
      }
      ?>

      <?php echo form_open('clogin');?>
      <p>Username:</p>
      <p>
           <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
      </p>
      <p> <?php echo form_error('username'); ?> </p>

      <p>Password:</p>
      <p>
           <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
      </p>
      <p> <?php echo form_error('password'); ?> </p>

      <p>
           <input type="submit" name="btnSubmit" value="Login" />
      </p>

      <?php echo form_close();?>


      <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
 </body>
 </html> -->

 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="UTF-8">
         <title>Log In Admin</title>
         <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         <!-- Bootstrap 3.3.2 -->
         <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" >
         <link href="<?php echo base_url('assets/css/bootstrap-style.css'); ?>" rel="stylesheet" >
     </head>
     <body class="login-page">
         <div class="login-box">

             <div class="login-box-body col-md-3">
                 <p class="login-box-msg">Login Admin</p>
                 <form action="<?php echo site_url('login'); ?>" method="post">
                     <?php
                     if($this->session->flashdata('message')) {
                          echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('message').'</p>';
                     }
                     ?>

                     <div class="form-group has-feedback">
                         <input type="text" name="username" class="form-control" placeholder="Username"/>
                         <span class="glyphicon glyphicon-user form-control-feedback"></span>
                         <?php echo form_error('username'); ?>
                     </div>
                     <div class="form-group has-feedback">
                         <input type="password" name="password" class="form-control" placeholder="Password"/>
                         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                         <?php echo form_error('password'); ?>
                     </div>
                     <div class="row">

                         <div class="col-xs-4">
                             <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                         </div>
                     </div>
                 </form>


             </div>
         </div>

         <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
     </body>
 </html>
