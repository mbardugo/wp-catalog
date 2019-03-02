<?php

/**
 * Template Name: About
 */

get_header();
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php $wt_content = $post->post_content;
if (has_blocks($wt_content)) :
    $blocks = parse_blocks($wt_content);
    if ($blocks[0]['blockName'] == 'core/image') :
        get_template_part('template-parts/custom/custom', 'banner');
        ?>


<?php endif; ?>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
