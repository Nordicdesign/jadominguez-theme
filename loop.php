
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php /* How to display all other posts. */ ?>
<!-- this is my usual loop for the posts ************************************************************************** -->
	<article>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        	<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

            <div class="entry-date">
            	<span class="entry-date-day"><?php  echo get_the_date(j); ?></span>
                <span class="entry-date-month"><?php  echo get_the_date(F); ?></span>
                <span class="entry-date-year"><?php  echo get_the_date(Y); ?></span>
            </div>		

	<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
	<?php else : ?>
			
				<div class="entry">
			 		<?php the_content(); ?>
			 	</div>
				
	<?php endif; ?>

			<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>


			<div class="entry-utility">
				<?php the_tags( '<p>Etiquetas: ', ', ', '.</p>' ); ?>

				<div class="comments">
					
					
					<span class="comments-link"><i class="icon-chat"></i><?php comments_popup_link( __( 'Deja un comentario', 'twentyten' ), __( '1 Comentario', 'twentyten' ), __( '% Comentarios', 'twentyten' ) ); ?></span>
					<?php edit_post_link( __( 'Editar', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
				</div>
			</div><!-- .entry-utility -->
		</div><!-- #post-## -->

		</article>
		
		<?php comments_template( '', true ); ?>

		

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
