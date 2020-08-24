<div class="item">
  <div class="image">
    <a href="<?php echo search_permalink( $item['full_title'] ); ?>">
      <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['full_title']; ?>" title="<?php echo $item['full_title']; ?>" />
    </a>
  </div>

  <div class="detail">
    <h2 class="title"><a href="<?php echo search_permalink( $item['full_title'] ); ?>"><?php echo $item['title']; ?></a></h2>
    <p class="meta"><i class="fa fa-music"></i>&nbsp;&nbsp;<a href="<?php echo search_permalink( $item['artist'] ); ?>"><?php echo $item['artist']; ?></a></p>
  </div>
</div>

<div class="clear"></div>
