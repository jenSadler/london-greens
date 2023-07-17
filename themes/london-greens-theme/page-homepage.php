<?php get_header(); ?>

<div class="p-5 text-center bg-image jumbo-img" style="
      background:linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url( get_template_directory_uri() . "/_img/scott-webb-unsplash.jpg")?>');
	  background-size:cover;
    background-position:bottom;
    ">
<div class="container">
<div class="jumbotron lg-jumbo">
  <h1 class="display-4"><?php echo get_bloginfo( 'name' );?></h1>
  <p class="lead"><?php echo get_bloginfo( 'description' ); ?></p>
 <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div>
  </div>

</header>
<main class="homePage container">
  <div class="row">
		
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

      <?php while ( have_posts() ) : the_post(); ?>

        <article <?php post_class('postContainer'); ?> id="post-<?php the_ID(); ?>" >
        <?php if ( has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('page-header'); ?>
        <?php endif; ?>
        
        <div class="postText">
        <h2 class="postTitle"><?php the_title();?></h2>
        <?php the_content(); ?>
        
        </article>
      <?php endwhile; ?>
      <?php wp_reset_postdata();?>
    </div>
  </div>
  
  <?php global $post;?>
  <div class="row">
    <h2>What Do We Stand For?</h2>
    <hr/>
    <?php
      $standID = get_category_by_slug('home'); 
   
     $standQuery='numberposts=3&category='.$standID->term_id;
      $stand_posts = get_posts($standQuery); ?>

      <?php foreach($stand_posts as $post) : setup_postdata($post); ?>
      
        <article class="col-sm-12 col-md-12 col-lg-4 col-xl-4" <?php post_class('postContainer'); ?> id="post-<?php the_ID(); ?>-stand" >
          <?php if ( has_post_thumbnail() ) : ?>
	
		        <?php the_post_thumbnail( 'full',array( 'class' => 'stand-thumbs' ) ); ?>

          <?php endif; ?>
          <div class="postText">
            <h3 class="postTitle"><?php the_title();?> </h3>
            <?php the_content(); ?>
          </div>
        </article>
        
      <?php endforeach;?>
      <?php wp_reset_postdata();?>
  </div>

  <div class="row">
    <h2>Latest News</h2>
    <hr/>
    <?php
      
      $newsID = get_category_by_slug('news'); 
      $newsQuery='numberposts=3&category='.$newsID->term_id;
      $news_posts = get_posts($newsQuery); ?>

      <?php foreach($news_posts as $post) : setup_postdata($post); ?>
        <article class="col-sm-12 col-md-12 col-lg-4 col-xl-4" <?php post_class('postContainer'); ?> id="post-<?php the_ID(); ?>-news" >
          <?php if ( has_post_thumbnail() ) : ?>
	
            <?php the_post_thumbnail( 'full',array( 'class' => 'stand-thumbs' ) ); ?>
          <?php endif; ?>
          <div class="postText">
            <h3 class="postTitle"><?php the_title(); ?> </h3>
            <?php the_excerpt(); ?>

            <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">Read More <span class="sr-only">about <?php the_title()?> </span></a>
          </div>
        </article>
        
      <?php endforeach;?> 
      <?php wp_reset_postdata();?>



      <div class="row hold-home-ctas">
    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
      <div class="partyBox">
							<?php dynamic_sidebar( 'on-widgets' ); ?>
						</div>
			
    
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
    <div class="home-cta-links">
    <?php dynamic_sidebar( 'cta-widget' ); ?>
        </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
    <div class="partyBox">
							<?php dynamic_sidebar( 'can-widgets' ); ?>
						</div>
    
    </div>

  

  </div>
  </div>


</main>
<?php get_footer(); ?>
