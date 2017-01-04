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
									<a href="#">
											<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2013/03/button-5b-musicinme.png" alt="Safe Social Media Moves"/>

											<?php if(pll_current_language() == 'en') { ?>
											<h3 class="menu-button-caption">Safe Social Media Moves</h3>
											<?php } ?>
											<?php if(pll_current_language() == 'es') { ?>
											<h3 class="menu-button-caption">Safe Social Media (espanol)</h3>
											<?php } ?>
									</a>
							</div>

							<!--
							<div class="translate-options">
									<?php // dynamic_sidebar('polylang-translate-widget'); ?>
							</div>
							-->

							<div class="menu-button">
									<a href="#">
											<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2013/03/button-6b-kids-dancing.png" alt="In This Together" />

											<?php if(pll_current_language() == 'en') { ?>
											<h3 class="menu-button-caption">In This Together</h3>
											<?php } ?>
											<?php if(pll_current_language() == 'es') { ?>
											<h3 class="menu-button-caption">In This Together (espanol)</h3>
											<?php } ?>

									</a>
							</div>
					</div>

          <div class="main-section-center">

              <div class="sidebar-left sidebar">
                  <!-- Left Menu Items -->
                  <div class="left-container">
                      <div class="menu-button">
													<a href="#">
                          		<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2013/03/button-1b-sparkle.png" alt="Games &amp; Activities"/>

															<?php if(pll_current_language() == 'en') { ?>
															<h3 class="menu-button-caption">Games &amp; Activities</h3>
															<?php } ?>
															<?php if(pll_current_language() == 'es') { ?>
															<h3 class="menu-button-caption">Games &amp; Activities (espanol)</h3>
															<?php } ?>
													</a>
                      </div>
                      <div class="menu-button">
                          &nbsp;
                      </div>
                      <div class="menu-button">
													<a href="#">
                          		<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2013/03/button-3b-bullyblues.png" alt="Hotline - Get Help" />

															<?php if(pll_current_language() == 'en') { ?>
															<h3 class="menu-button-caption">Hotline - Get Help</h3>
															<?php } ?>
															<?php if(pll_current_language() == 'es') { ?>
															<h3 class="menu-button-caption">Hotline - Get Help (espanol)</h3>
															<?php } ?>
													</a>
                      </div>
                  </div>
              </div>

              <div class="center-graphic">
                  <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2013/03/UnleashYourSuperpowers-BG.png" />
              </div>

              <div class="sidebar-right sidebar">
                  <!-- Right Menu Items -->
                  <div class="right-container">
                      <div class="menu-button">
													<a href="#">
                          		<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2013/03/button-2b-musicman.png" alt="Music Videos"/>
															<h3 class="menu-button-caption">Music Videos</h3>

													</a>
                      </div>
                      <div class="menu-button">
                          &nbsp;
                      </div>
                      <div class="menu-button">
													<a href="#" onclick="return false">
                          		<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2013/03/button-4b-superpower-pledge.png" alt="Superpower Pledges"/>
                          		<h3 class="menu-button-caption">Superpower Pledge</h3>
													</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

			<div class="intro-text-section section">

          <!-- What is Bullying? -->

					<div class="intro-text">

					    <?php

								if (function_exists('pll_current_language')){
										if(pll_current_language() == 'en') {
		              			$intro_text_query = new WP_Query( array (
										        'pagename'      => 'what-is-bullying',
												) );
		            		};
		            		if(pll_current_language() == 'es') {
		              			$intro_text_query = new WP_Query( array (
										        'pagename'      => 'que-es-el-acoso',
												) );
		            		};
								}

					      // The Loop
					      if ( $intro_text_query->have_posts() ) {
					        while ( $intro_text_query->have_posts() ) {
					          $intro_text_query->the_post();
					          echo the_content();
										// $the_page_content = get_the_content();
										// echo get_content_with_formatting($the_page_content);
					        }
					        echo '</ul>';
					      } else {
					        // no posts found
					      }
					    ?>

					</div> <!-- end of "intro-text" -->

      </div> <!-- end of "intro-text-section" -->

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
