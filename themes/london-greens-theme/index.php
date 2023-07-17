<?php get_header(); ?>

<main>
        <div class="latestNewsContainer">

          <?php while ( have_posts() ) : the_post(); ?>

          <article <?php post_class('postContainer'); ?> id="post-<?php the_ID(); ?>" >
            <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('page-header'); ?>
            <?php endif; ?>
            <div class="postText">
            <h3 class="postTitle"><?php the_title();?></h3>
            <p class="postDate"><?php the_date();?></p>
            <?php the_content(); ?>
          </div>
        </article>
        <?php endwhile; ?>

        </div>
	
			 
				<div class="holdSidebar">
				
					<div class="partyBoxContainer">
						<div class="partyBox">
							<?php dynamic_sidebar( 'on-widgets' ); ?>
						</div>
					</div>
					<?php dynamic_sidebar( 'cta-widget' ); ?>
					
					<div class="partyBoxContainer">
						

						<div class="partyBox">
							<?php dynamic_sidebar( 'can-widgets' ); ?>
						</div>

				 </div>
           


				</div>
						</main>
<?php get_footer(); ?>
