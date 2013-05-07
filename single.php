<?php
/**
 * The Template for displaying all single posts.
 *
 * @package demoTheme
 *
 */

get_header(); ?>

<body>
	<div id="header">
            <h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
            <?php bloginfo('description'); ?>
	</div>

        <div id="container">
            
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <div class="post">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                    <p class="meta">
                        <span>Posted on</span> <?php the_time('F jS,Y'); ?>
                        <span>by</span> <?php the_author(); ?>
                    </p>

                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>
                </div>

            <?php endwhile; ?>

            <?php next_posts_link('Older Posts'); ?>
            <?php previous_posts_link('Newer Posts'); ?>

            <?php else : ?>
                <h4>Nothing Found</h4>
            <?php endif; ?>
        </div>

</body>

<?php get_footer(); ?>