<aside class="sidebar">

  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div class="primary-sidebar widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div><!-- #primary-sidebar -->
  <?php endif; ?>
   	            

            
            <div>
            <script src="http://widgets.twimg.com/j/2/widget.js"></script>
            <script>
            new TWTR.Widget({
              version: 2,
              type: 'profile',
              rpp: 4,
              interval: 30000,
              width: 240,
              height: 300,
              theme: {
                shell: {
                  background: '#dedede',
                  color: '#242424'
                },
                tweets: {
                  background: '#f2f3f4',
                  color: '#666666',
                  links: '#cc6633'
                }
              },
              features: {
                scrollbar: false,
                loop: false,
                live: false,
                behavior: 'all'
              }
            }).render().setUser('joseandom').start();
            </script>
            </div>

</aside>
