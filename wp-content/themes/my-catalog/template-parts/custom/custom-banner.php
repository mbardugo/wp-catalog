<?php
global $blocks; 
  $wt_img_id = $blocks[0]['attrs']['id'];
        $img_data = wp_get_attachment_metadata($wt_img_id);
        $img_dir = substr($img_data['file'], 0, strrpos($img_data['file'], '/'));

        ?>

<div class="banner-wrapper">
    <img src="<?= UPLOAD_URL . '/' . $img_dir . '/' . $img_data['sizes']['banner-image']['file']; ?>">
    <div class="banner-title">
        <?php the_title('<h1>', '</h1>'); ?>
    </div>
</div>       