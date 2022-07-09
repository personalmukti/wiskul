<!DOCTYPE html>
<html lang="en">
<head>
  
  <?php require_once('base/_meta.php') ;?>

  <title><?= $title; ?></title>

  <?php require_once('base/_css.php') ;?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php require_once('base/_preloader.php') ;?>

  <!-- Navbar -->
  <?php require_once('base/_topnav.php') ;?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require_once('base/_sidebar.php') ;?>

  <!-- Content Wrapper. Contains page content -->
  <?php echo $contents ;?>
  <!-- /.content-wrapper -->
  <!-- Footer -->
  <?php require_once('base/_footer.php') ;?>

</div>

<!-- ./wrapper -->
<?php require_once('base/_js.php') ;?>
</body>
</html>
