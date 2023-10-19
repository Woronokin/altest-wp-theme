<?php
/*
Template Name: Страница сотрудника (кастомный тип записи)
Template post type: team
*/
get_header();
?>

<div class="content">
    <div class="first-col">
        <div class="fix-content">
            <img class="photo" src="<?php echo get_field('photo', $post->ID)['sizes']['post_thumb']; ?>" alt="Фото сотрудника <?php the_title(); ?>">
            <?php if (get_field('position', $post->ID)) : ?>
                <div class="sub-title center">
                    <h3><?php echo get_field('position', $post->ID); ?></h3>
                </div>
            <?php endif; ?>
            <?php if (get_field('email', $post->ID)) : ?>
                <div class="under center">
                    <a class="pers-link" href="mailto:<?php echo get_field('email', $post->ID); ?>"><?php echo get_field('email', $post->ID); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="second-col">
        <?php if (get_field('employee_why', $post->ID)) : ?>
            <div class="why">
                <h2>Почему я работаю</h2>
                <p><?php echo the_field('employee_why', $post->ID); ?></p>
            </div>
        <?php endif;
        if (get_field('employee_when', $post->ID)) : ?>
            <div class="when">
                <h2>Как и когда я устроился</h2>
                <p><?php echo the_field('employee_when', $post->ID); ?></p>
            </div>
        <?php endif;
        if (get_field('employee_what', $post->ID)) : ?>
            <div class="what">
                <h2>Что я делаю в организации</h2>
                <p><?php echo the_field('employee_what', $post->ID); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>

<?php get_footer(); ?>