<?php include 'header.php'; ?>
  <h1 class="page-title"><?php echo $mc['page']['name']; ?></h1>

  <?php if ( isset( $mc['page']['content'] ) ) { ?>
    <div class="page-content content">
      <?php echo $mc['page']['content']; ?>
    </div>
  <?php } ?>
<?php include 'footer.php'; ?>
