<?php get_header(); ?>
</header>
<main class="container">
    <div class="row">
        <div class=" col-sm-12 col-md-6 col-lg-7 col-xl-8">
        <?php 
        $newsID = get_category_by_slug('news'); 
        $newsQuery='category='.$newsID->term_id;
        
          while ( have_posts() ) : the_post(); ?>

          <article <?php post_class('postContainer'); ?> id="post-<?php the_ID(); ?>" >
            <?php if ( has_post_thumbnail()) : ?>
              <a href="<?php echo get_the_permalink(); ?>" ><?php the_post_thumbnail('page-header'); ?></a>
            <?php endif; ?>
            <div class="postText">
            <h3 class="postTitle"><a href="<?php echo get_the_permalink(); ?>" ><?php the_title();?></a></h3>
            <p class="postDate"><?php the_date();?></p>
            <?php the_content(); ?>
            
          </div>
        </article>
        <?php endwhile; ?>

        </div>
	
			 
				<div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
				
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
				</div>
						</main>
<?php get_footer(); ?>
