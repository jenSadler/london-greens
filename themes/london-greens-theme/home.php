<?php get_header(); ?>
</header>
<main class="container">
    <div class="row">
        <div class=" col-sm-12 col-md-6 col-lg-8 col-xl-9">
        <?php
      
      $newsID = get_category_by_slug('news'); 
      $newsQuery='&category='.$newsID->term_id;
      $news_posts = get_posts($newsQuery); ?>

      <?php foreach($news_posts as $post) : setup_postdata($post); ?>
    

          <article <?php post_class('postContainer'); ?> id="post-<?php the_ID(); ?>" >
            <?php if ( has_post_thumbnail()) : ?>
              <a href="<?php echo get_the_permalink(); ?>" ><?php the_post_thumbnail('page-header', array( 'class' => 'main-news-thumbs' )); ?></a>
            <?php endif; ?>
            <div class="postText">
            <h3 class="postTitle"><a href="<?php echo get_the_permalink(); ?>" ><?php the_title();?></a></h3>
            <p class="postDate"><?php the_date();?></p>
            <?php the_excerpt(); ?>
            <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">Read More <span class="sr-only">about <?php the_title()?> </span></a>

          </div>
        </article>
        <?php endforeach; ?>

        </div>
	
			 
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
				
          <?php get_sidebar();?>
        </div>
			</div>
		</main>
<?php get_footer(); ?>
