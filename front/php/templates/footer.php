

<?php 
  //------------------------------------------------------------------------------
  // check if authenticated
  require_once  $_SERVER['DOCUMENT_ROOT'] . '/php/templates/security.php';
?>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->

    <!-- NetAlertX footer with url -->
    <a href="https://wa.me/60172226505" target="_blank">Net<b>Watch</b></a>
     
    
    <!-- To the right -->
    <div class="pull-right no-hidden-xs">
      | <a href="https://chatgpt.com" class="pointer" target="_blank" title="Ask AI"><i class="fa-regular fa-comment-dots fa-flip-horizontal"></i></a> 
      | <a href="https://wikipedia.com/" class="pointer" target="_blank" title="Documentation"><i class="fa fa-book"></i></a>
      | <a href="https://wa.me/60172226505" class="pointer" target="_blank"><i class="fa fa-bug" title="Report a bug"></i></a> 
      | <a href="https://discord.com" class="pointer" target="_blank"><i class="fa-brands fa-discord" title="Join Discord"></i></a> 
      | <?= lang('Maintenance_built_on');?>:  <?php include 'php/templates/build.php'; ?> 
      |  Version:  <?php include 'php/templates/version.php'; ?> 
      |     
    </div>
  </footer>

<!-- ----------------------------------------------------------------------- -->
  <!-- Control Sidebar -->
    <!-- DELETED -->

</div>
<!-- ./wrapper -->

<!-- jQuery UI -->
<script src="lib/jquery-ui/jquery-ui.min.js"></script>

<!-- AdminLTE App -->
<script src="lib/AdminLTE/dist/js/adminlte.min.js"></script>

<!-- Select2 CSS -->
<link rel="stylesheet" href="lib/select2/select2.min.css">

<!-- NetAlertX -->
<script defer src="js/handle_version.js"></script>
<script src="js/ui_components.js?v=<?php include 'php/templates/version.php'; ?>"></script>


<!-- Select2 JavaScript -->
<script src="lib/select2/select2.full.min.js" defer></script>


  <?php
    require 'migrationCheck.php';
  ?>

</body>
</html>
