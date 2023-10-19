<?php
/*
Template Name: Шаблон главной страницы
*/
get_header();
?>

<div class="content">
    <div class="cat-posts">
        <?php
        $args = array(
            'post_type' => 'team',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        );

        $posts_team = get_posts($args);

        if ($posts_team) {
            foreach ($posts_team as $post) {
        ?>
                <div class="cat-item">
                    <img class="photo" src="<?php echo get_field('photo', $post->ID)['sizes']['post_thumb']; ?>" alt="Фото сотрудника <?php the_title(); ?>">
                    <div class="sub-title center">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <?php if (get_field('position', $post->ID)) : ?>
                        <div class="card-descr">
                            <?php echo get_field('position', $post->ID); ?>
                        </div>
                    <?php endif; ?>
                    <div class="center">
                        <a class="pers-link" href="<?php the_permalink(); ?>">на страницу</a>
                    </div>
                </div>

        <?php }
        } ?>
    </div>
</div>

</body>

<?php get_footer(); ?>