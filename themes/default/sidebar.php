<section id="secondary">
  <div class="widget clearfix">
    <div class="section-title small"><span>Recent Search</span></div>

    <?php
      $recent_keywords = recent_search();
      if ( $recent_keywords ) {
        echo '<ul>';

        foreach ( $recent_keywords as $keyword )
          echo '<li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="' . search_permalink( $keyword ) . '">' . $keyword . '</a>';

        echo '</ul>';
      }
    ?>
  </div>

  <div class="widget clearfix">
    <div class="section-title small"><span>Popular Search</span></div>

    <?php
      $popular_keywords = stt();
      if ( $popular_keywords ) {
        echo '<ul>';

        foreach ( $popular_keywords as $keyword )
          echo '<li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="' . search_permalink( $keyword ) . '">' . $keyword . '</a>';

        echo '</ul>';
      }
    ?>
  </div>

  <div class="widget clearfix">
    <div class="section-title small"><span>Random Keywords</span></div>

    <?php
      $random_keywords = random_keywords();
      if ( $random_keywords ) {
        echo '<ul>';

        foreach ( $random_keywords as $keyword )
          echo '<li><i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="' . search_permalink( $keyword ) . '">' . $keyword . '</a>';

        echo '</ul>';
      }
    ?>
  </div>
</section>
