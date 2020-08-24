<?php include 'header.php'; ?>
  <div id="primary">
    <div id="content">
      <div class="section-title no-border"><span><?php echo $mc['genre']['name']; ?></span></div>

      <?php if ( $mc['genre']['items'] ) { ?>
        <div class="song-list clearfix">
          <?php
            foreach ( $mc['genre']['items'] as $item ) {
              include 'includes/itunes.php';
              unset( $item );
            }
          ?>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include 'sidebar.php'; ?>
<?php include 'footer.php'; ?>
