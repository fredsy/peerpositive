<?php
/**
 * Template Name: PeerPositivePOWER Home Page
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="center-graphic">
          <img src="http://peerpositive.dev/wp-content/uploads/2016/09/UnleashYourSuperpowers-BG.png" />
      </div>

      <div class="books-section">

          <h2>Books by the Music in Me Foundation</h2>

          <div class="book-cover-list">

              <?php
                $book_section_query = new WP_Query( 'pagename=books-by-the-music-in-me-foundation' );

                // The Loop
                if ( $book_section_query->have_posts() ) {
                  while ( $book_section_query->have_posts() ) {
                    $book_section_query->the_post();
                    echo get_the_content();
                  }
                  echo '</ul>';
                } else {
                  // no posts found
                }
              ?>

          </div> <!-- end of "book-cover-list" -->

      </div>

      <!-- If you have posts to display. Disabled for now -->
			<?php
      /*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
      */
      ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
