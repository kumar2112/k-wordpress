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
  include('heromain.php')
  ?>


<div class="container content-sm">
        <div class="row">
<?php
  include('details.php');
  
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
  include('commonjs.php');
  ?>

  </body>

  </html>