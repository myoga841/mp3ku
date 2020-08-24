<?php include 'header.php'; ?>
  <div id="primary">
    <div id="content">
      <div class="section-title"><span>Hot Tracks</span></div>

      <?php
        $hot_tracks = hot_tracks();
        if ( $hot_tracks ) {
      ?>
        <div class="song-list clearfix">
          <?php
            foreach ( $hot_tracks as $item ) {
              include 'includes/itunes.php';
              unset( $item );
            }
          ?>
        </div>
      <?php } ?>

      <div class="section-title"><span>New Releases</span></div>

      <?php
        $new_releases = new_releases();
        if ( $new_releases ) {
      ?>
        <div class="song-list clearfix">
          <?php
            foreach ( $new_releases as $item ) {
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
