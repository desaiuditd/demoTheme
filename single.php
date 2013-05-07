<?php
/**
 * The Template for displaying all single posts.
 *
 * @package demoTheme
 *
 */

get_header(); ?>

<div id="container">

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="post">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p class="meta">
                <span>Posted on</span> <?php the_time('F jS,Y'); ?>
                <span>by</span> <?php the_author(); ?>
            </p>

            <div class="post_content">
                <?php the_content(); ?>
            </div>
        </div>

        <?php comments_template(); ?>

    <?php endwhile; ?>

    <?php else : ?>
        <h4>Nothing Found</h4>
    <?php endif; ?>
</div>  <!--container end-->
</div>  <!--wrapper end-->

<?php get_footer(); ?>