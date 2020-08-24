      </div>
    </main>

    <footer id="footer">
      <div class="container">
        <?php if ( has_nav_menu( 'footer' ) ) { ?>
          <nav class="menu">
            <?php echo nav_menu( 'footer' ); ?>
          </nav>
        <?php } ?>

        <div class="credit">
          &copy; <?php echo date( 'Y' ); ?> <?php echo option( 'site_name' ); ?>
        </div>
      </div>
    </footer>

    <?php the_footer(); ?>
  </body>
</html>
