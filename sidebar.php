﻿<aside class="sidebar">

  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div class="primary-sidebar widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div><!-- #primary-sidebar -->
  <?php endif; ?>

</aside>
