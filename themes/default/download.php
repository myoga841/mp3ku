<?php include 'header.php'; ?>
  <div id="primary">
    <div id="content">
      <div class="song-info clearfix">
        <h1 class="page-title"><?php echo $mc['download']['title']; ?></h1>

        <div class="clearfix">
          <div class="image">
            <img src="<?php echo $mc['download']['image']; ?>" alt="" />
          </div>

          <div class="detail">
            <p><i class="fa fa-user"></i>&nbsp;&nbsp;Author: <strong><?php echo $mc['download']['channel']; ?></strong></p>
            <p><i class="fa fa-calendar-alt"></i>&nbsp;&nbsp;Date: <strong><?php echo $mc['download']['date']; ?></strong></p>
            <p><i class="fa fa-clock"></i>&nbsp;&nbsp;Duration: <strong><?php echo $mc['download']['duration']; ?></strong></p>
            <p><i class="fa fa-download"></i>&nbsp;&nbsp;Size: <strong><?php echo $mc['download']['size']; ?></strong></p>
            <p><i class="fa fa-eye"></i>&nbsp;&nbsp;Views: <strong><?php echo currency_format( $mc['download']['views'] ); ?></strong></p>
            <p><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;Likes: <strong><?php echo currency_format( $mc['download']['likes'] ); ?></strong></p>
          </div>
        </div>

        <div class="player">
          <audio src="https://www.youtube.com/watch?v=<?php echo $mc['download']['id']; ?>" type="video/youtube" controls style="width: 100%">Your browser does not support the audio element.</audio>
        </div>

        <div class="download">
          <iframe src="https://y-api.org/button/?v=<?php echo $mc['download']['id']; ?>&amp;f=mp3" style="max-height:40px;max-width:170px;overflow: hidden;" sandbox="allow-same-origin allow-scripts" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"></iframe>
        </div>

        <div class="description content">
          <?php echo autop( $mc['download']['description'] ); ?>
        </div>
      </div>

      <?php if ( isset( $mc['download']['related'] ) ) { ?>
        <div class="related-songs clearfix">
          <div class="section-title small"><span>Related Songs</span></div>

          <div class="song-list search column-1 clearfix">
            <?php foreach ( $mc['download']['related'] as $item ) { ?>
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
      <?php } ?>
    </div>
  </div>

  <?php include 'sidebar.php'; ?>
<?php include 'footer.php'; ?>
