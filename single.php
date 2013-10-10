<?php
/**
 * The Template for displaying all single posts.
 *
 * @package demoTheme
 *testing
 */

get_header(); ?>

<div class="container row">
<div id="article" class="col24">

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="post container">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p class="meta">
                <span>Posted on</span> <?php the_time('F jS,Y'); ?>
                <span>by</span> <?php the_author(); ?>
            </p>

            <div class="post_content">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="comments container">
            <?php comments_template(); ?>
        </div>

    <?php endwhile; ?>

    <?php else : ?>
        <h4>Nothing Found</h4>
    <?php endif; ?>
</div>  <!--article end-->
</div>  <!--container end-->

<?php get_footer(); ?>
