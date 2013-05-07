<?php
/**
 * The generic template file
 * 
 * @package demoTheme
 */

    get_header();
?>

<div id="container">

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="post">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <div class="post_content">
                <?php the_excerpt(); ?>
            </div>

            <p class="meta">

                <span>Posted on</span> <?php the_time('F jS,Y'); ?>
                <span>by</span> <?php the_author(); ?>
                <br />
                <?php
                    _e('Filed under&#58; ');
                    the_category(', ');
                ?>
                <br />
                <?php
                    comments_popup_link('No Comments &#187; ', '1 Comment &#187; ', '% Comments &#187; ');
                    edit_post_link('Edit', ' &#124; ', '');
                ?>
            </p>

        </div>

    <?php endwhile; ?>

    <span>
        <?php next_posts_link('Older Posts'); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php previous_posts_link('Newer Posts'); ?>
    </span>

    <?php else : ?>
        <h4>Nothing Found</h4>
    <?php endif; ?>

</div>  <!--container end-->
</div>  <!--wrapper end-->

<?php get_sidebar(); ?>
    
<?php get_footer(); ?>