<?php include 'header.php'; ?>
  <div id="primary">
    <div id="content">
      <h1 class="page-title"><?php echo query(); ?></h1>

      <div class="song-list search column-1 clearfix">
        <?php foreach ( $mc['search'] as $item ) { ?>
          <div class="item">
            <div class="image">
              <a href="<?php echo download_permalink( $item['title'], $item['id'] ); ?>">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" title="<?php echo $item['title']; ?>" />
              </a>
            </div>

            <div class="detail">
              <h2 class="title"><a href="<?php echo download_permalink( $item['title'], $item['id'] ); ?>"><?php echo $item['title']; ?></a></h2>

              <p class="meta">
                <?php
                  echo '<i class="fas fa-clock"></i>&nbsp;&nbsp;' . $item['duration'];
                  echo '<span class="spacing"></span>';
                  echo '<i class="fa fa-download"></i>&nbsp;&nbsp;' . $item['size'];
                ?>
              </p>

              <div class="buttons">
                <a href="javascript:;" class="btn btn-grey btn-small btn-play" data-id="<?php echo $item['id']; ?>"><i class="fa fa-play"></i>&nbsp;&nbsp;Play</a>
                <a href="<?php echo download_permalink( $item['title'], $item['id'] ); ?>" class="btn btn-grey btn-small"><i class="fa fa-download"></i>&nbsp;&nbsp;Download</a>
              </div>

              <div class="player"></div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php include 'sidebar.php'; ?>
<?php include 'footer.php'; ?>
