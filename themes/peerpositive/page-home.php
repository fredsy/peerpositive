<?php
/**
 * Template Name: PeerPositivePOWER Home Page
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="main-section-full-width-container">

					<!-- Top Menu Items -->
					<div class="top-container">
							<div class="menu-button">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/09/button-menu-placeholder.png" />
									<h3 class="menu-button-caption">top menu 1</h3>
							</div>
							<div class="menu-button">
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/09/button-menu-placeholder.png" />
									<h3 class="menu-button-caption">top menu 2</h3>
							</div>
					</div>

          <div class="main-section-center">

              <div class="sidebar-left sidebar">
                  <!-- Left Menu Items -->
                  <div class="left-container">
                      <div class="menu-button">
                          <h3 class="menu-button-caption">peer intervention</h3>
                          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/09/button-1-peer-intervention.png" />
                      </div>
                      <div class="menu-button">
                          &nbsp;
                      </div>
                      <div class="menu-button">
                          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/09/button-3-hotline.png" />
                          <h3 class="menu-button-caption">hotline - get help</h3>
                      </div>
                  </div>
              </div>

              <div class="center-graphic">
                  <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/09/UnleashYourSuperpowers-BG.png" />
              </div>

              <div class="sidebar-right sidebar">
                  <!-- Right Menu Items -->
                  <div class="right-container">
                      <div class="menu-button">
                          <h3 class="menu-button-caption">music videos</h3>
                          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/09/button-2-music-videos.png" />
                      </div>
                      <div class="menu-button">
                          &nbsp;
                      </div>
                      <div class="menu-button">
                          <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/09/button-4-superpower-pledge.png" />
                          <h3 class="menu-button-caption">superpower pledge</h3>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="books-section section">

          <h2>"Rap" on Reading Books by The Music in Me Foundation International</h2>

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

      </div> <!-- end of "books-section" -->

      <div class="aboutus-section section">

          <h2>About the Music in Me Foundation</h2>

          <div class="aboutus-section-body">

              <?php
                $aboutus_section_query = new WP_Query( 'pagename=about-the-music-in-me-foundation' );

                // The Loop
                if ( $aboutus_section_query->have_posts() ) {
                  while ( $aboutus_section_query->have_posts() ) {
                    $aboutus_section_query->the_post();
                    echo get_the_content();
                  }
                  echo '</ul>';
                } else {
                  // no posts found
                }
              ?>

          </div> <!-- end of "aboutus-section-body" -->

      </div> <!-- end of "aboutus-section" -->

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
