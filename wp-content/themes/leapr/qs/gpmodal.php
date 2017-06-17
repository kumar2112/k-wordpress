<!DOCTYPE html>
<html lang="en">   
<head>
<?php
include('commonheader.php');
?>
</head>
<body class="body_block">
  <?php
  include('sidenav.php');
  include('mainnav.php');
  ?>    

  <?php
  include('heromaingroup.php')
  ?>


<div class="container content-sm">
        
        <div class="row">
<?php
  include('degp.php');
  
  ?>


  <div class="col-md-3">
    <?php include('keyevents.php'); ?>
    <?php include('admission.php'); ?>
    <?php include('campus.php'); ?>
    <?php include('relatedprograms.php'); ?>
    <?php include('gallery.php'); ?>
  </div>


  </div>

  </div>



  <?php
    include('gpmodalopen.php')
  ?>








  <?php
  include('commonjs.php');
  ?>

  </body>

  </html>