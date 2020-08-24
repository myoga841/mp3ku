jQuery(document).ready(function($){
  $('.song-list .btn-play').on( 'click', function() {
    var btn = $(this),
        parent = $(this).parents('.item'),
        id = $(this).data('id');

    if ( ! btn.hasClass('playing') ) {
      $('.song-list .player').removeClass('show').html('');
      $('.song-list .btn-play').removeClass('playing').html('<i class="fa fa-play"></i>&nbsp;&nbsp;Play');

      btn.addClass('playing').html('<i class="fa fa-stop"></i>&nbsp;&nbsp;Stop');
      parent.find('.player').addClass('show').html('<audio src="https://www.youtube.com/watch?v=' + id + '" type="video/youtube" controls autoplay style="width: 100%">Your browser does not support the audio element.</audio>');
      parent.find('.player audio').mediaelementplayer();
    } else {
      btn.removeClass('playing').html('<i class="fa fa-play"></i>&nbsp;&nbsp;Play');
      parent.find('.player').removeClass('show').html('');
      $('iframe.me-plugin').remove();
    }
  });

  if ( $('.song-info .player').length )
    $('.song-info .player audio').mediaelementplayer();

  var header_full = false,
      site_name_width = $('#header .site-name').width() + 30,
      search_form_width = $('#header .search-form').width(),
      search_form_ext_width = $('#header .search-form').width() + 35,
      menu_width = $('#menu ul').width(),
      mobile_menu = false;

  $(window).on( 'resize', function() {
    if ( ( $('#header .container').width() - site_name_width ) <= ( mobile_menu ? search_form_ext_width : search_form_width ) ) {
      $('#header').addClass('full');
      header_full = true;
    } else {
      $('#header').removeClass('full');
      header_full = false;
    }

    if ( $('.container').width() - menu_width <= 0 ) {
      $('#menu').addClass('mobile').hide();
      $('#menu').find('.has-children ul').before('<a href="javascript:;" class="toggle-children"><i class="fa fa-plus"></i></a>');
      $('#header .toggle-menu').removeClass('toggled').show();

      if ( ! header_full ) {
        $('#header .search-form').css({ marginRight: 35 });
      } else {
        $('#header .search-form').css({ marginRight: 0 });
      }

      mobile_menu = true;
    } else {
      $('#menu').removeClass('mobile').show();
      $('#menu').find('.toggle-children').remove();
      $('#menu').find('ul').show();
      $('#header .toggle-menu').removeClass('toggled').hide();
      $('#header .search-form').css({ marginRight: 0 });

      mobile_menu = false;
    }
  });

  $('#menu').on( 'click', '.toggle-children', function() {
    if ( $(this).hasClass('toggled') ) {
      $(this).html('<i class="fa fa-plus"></i>').removeClass('toggled').next().hide();
    } else {
      $(this).html('<i class="fa fa-minus"></i>').addClass('toggled').next().show();
    }
  });

  $('#header .toggle-menu').on( 'click', function() {
    if ( $(this).hasClass('toggled') ) {
      $(this).removeClass('toggled');
      $('#menu').hide();
    } else {
      $(this).addClass('toggled');
      $('#menu').show();
    }
  });

  $(window).trigger('resize');
});
