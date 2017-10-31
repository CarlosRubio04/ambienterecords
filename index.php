<!DOCTYPE html>
<html lang="es">
<?php require_once('blocks/head.php'); ?>
<body>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
  <div class="loader" id="loader">
    <img src="img/loader.svg" alt="Loading...">
  </div>
    <?php require_once('blocks/header.php'); ?>
    <?php if(!isset($_REQUEST['content'])){
      require_once('blocks/home.php');
    }else{
      require_once('blocks/404.php');
    } 
    ?>
    <?php require_once('blocks/footer.php'); ?>
  <!-- All js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>
</html>
