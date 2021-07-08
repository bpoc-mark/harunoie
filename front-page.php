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
    <section class="sect_2">
        <div class="sect_2__wrapper">
            <div class="l-wrap">
                <div class="sect_2_cont">
                    <div class="sect_2_item">
                        <p class="txt_concept">concept</p>
                    </div>
                    <div class="sect_2_item">
                        <p class="txt_sub">
                            おしゃれで<br>
                            高性能な住宅を、<br>
                            もっと手軽に。
                        </p>
                    </div>
                    <div class="sect_2_item">
                        <p class="txt_des">
                            おしゃれで住みやすい家をライフスタイルに合わせて選ぶことができる。十分な性能と品質を備えた、お手頃価格の家。<br>
                            <br>
                            一般的に、高気密・高断熱、省エネ、高耐震といった<span>高性能住宅</span>は、そうでない住宅に比べてイニシャルコストが高くなりがちです。<br>
                            より多くの方に、より<span>安心・安全で快適</span>な家に、<span>お手頃な価格</span>で住んでもらいたい。<br>
                            <br>
                            そこではるのいえでは、企画住宅の取り扱いをスタートいたしました。
                        </p>

                        <div class="sect_2_sub_cont">
                            <div class="sect_2_sub_item">
                                <div class="sub_itm">
                                    <p>
                                        POINT<br>
                                        <span>01</span>
                                    </p>
                                </div>
                                <div class="sub_itm">
                                    <p>
                                        <span>多数あるプラン</span>の中から<br>
                                        ライフスタイルに合わせて選べる
                                    </p>
                                    <img src="<?php echo get_template_directory_uri();?>/release/image/sect_2/sect_2_itm_1.png" alt="">
                                </div>
                            </div>
                            <div class="sect_2_sub_item">
                                <div class="sub_itm">
                                    <p>
                                        POINT<br>
                                        <span>02</span>
                                    </p>
                                </div>
                                <div class="sub_itm">
                                    <p>
                                        同じデザイン、間取り、性能でも<br>
                                        自由設計より<span>価格がお手頃</span>
                                    </p>
                                    <img src="<?php echo get_template_directory_uri();?>/release/image/sect_2/sect_2_itm_2.png" alt="">
                                </div>
                            </div>
                            <div class="sect_2_sub_item">
                                <div class="sub_itm">
                                    <p>
                                        POINT<br>
                                        <span>03</span>
                                    </p>
                                </div>
                                <div class="sub_itm">
                                    <p>
                                        全棟『<span>耐震等級3</span>』の高耐震、<br>
                                        『<span>HEAT20 G2</span>』対応の<span>高断熱</span>
                                    </p>
                                    <img src="<?php echo get_template_directory_uri();?>/release/image/sect_2/sect_2_itm_3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </section>
    <section>3</section>
    <section>4</section>
    <section>5</section>
    <section>6</section>
    <section>7</section>
    <section>8</section>
    <section>9</section>
    <section class="sect_10">
        <div class="sect_10__wrapper">
            <div class="sect_10__cont flex">
                <div class="sect_10__cont__item">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri();?>/release/image/footer/footer_logo.png" alt="">
                    </a>
                </div>
                <div class="sect_10__cont__item">
                    <p>
                        長野県須坂市の注文住宅・企画住宅<br>
                        <span>はるのいえ　(株)池田住建企画</span>
                    </p>
                    <p>
                        〒382-0003長野県須坂市旭ケ丘1-7 <br>
                        TEL:026-214-7388 <br>
                        MAIL:harunoensoku@gmail.com
                    </p>
                </div>
                <div class="sect_10__cont__item">
                    <a href="https://haruno-ie.com/contact" target="_blank">
                        家づくりのお問い合わせはこちら
                        <img src="<?php echo get_template_directory_uri();?>/release/image/sect_10/sect_10_btn_arrow.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>