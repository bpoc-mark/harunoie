<?php get_header();?>
    <section class="sect_1">
        <div class="sect_1__wrapper">
            <div class="hero_slider_cont">
                <div class="hero_slider">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 4,
                        'category_name' => 'Hero',
                        'paged' => $paged,
                    );

                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div>
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <p class="hero_txt">haru no ie　<span>by ikeda juken kikaku</span></p>
            </div>
        </div>
    </section>
    <section>2</section>
    <section>3</section>
    <section>4</section>
    <section>5</section>
    <section>6</section>
    <section>7</section>
    <section>8</section>
    <section>9</section>
    <section>10</section>
<?php get_footer();?>