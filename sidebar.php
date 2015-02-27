<aside class="sidebar">
		<div class="widget-area" role="complementary">
        	            
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
            
            
            <div class="sidebar-module">
            	<h3>Brevemente</h3>
                <p>Después de años de formación y experiencia en comunicación y recursos humanos en una multinacional estoy convencido de la necesidad de implementar una estrategia de comunicación efectiva para las personas concretas y para las empresas.</p>
                <p><a href="http://es.linkedin.com/pub/jos%C3%A9-%C3%A1ngel-dom%C3%ADnguez-calatayud/32/308/967" class="ico-linkedin">Mi currículum en LinkedIn</a></p>
            </div>
            
            <div class="sidebar-module">
            	<h3>Contacta conmigo</h3>
                <p><a href="/contactame/" class="ico-contact">Envíame un email</a></p>
                <p><span class="ico-phone">Llámame al 629 33 55 24</span></p>
                <p><a href="https://twitter.com/joseandom" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir @joseandom</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
            </div>
            
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
            
            <div class="sidebar-module">
            	<h3>Sigue mi blog</h3>
                <p><a href="http://feeds.feedburner.com/jadominguez" class="ico-rss">Suscríbete al RSS</a></p>
            </div>
            
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>

</aside>
