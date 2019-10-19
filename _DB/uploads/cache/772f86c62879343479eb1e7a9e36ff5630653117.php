<?php (the_content()); ?>
<?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>


<section class="ourPromise">
    <div class="container">
        <?php if(get_field('promise_title')): ?>
            <?php echo get_field('promise_title'); ?>

        <?php endif; ?>
    </div>
</section>