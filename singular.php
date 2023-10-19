<?php
/*
Template Name: Страница сотрудника (кастомный тип записи)
Template post type: post, page
*/
get_header();
?>

<div class="content">
    <?php if (have_posts()) :
        while (have_posts()) :
            
            the_post();
            the_content();

        endwhile;
    endif; ?>
</div>

</body>

<?php get_footer(); ?>