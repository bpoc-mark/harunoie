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
                        'posts_per_page' => 10,
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
                                        <span class="highlight">多数あるプラン</span>の中から<br>
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
                                        自由設計より<span class="highlight">価格がお手頃</span>
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
                                        全棟<span class="quote-left">『</span><span class="highlight">耐震等級3</span><span class="quote-right">』</span>の高耐震、<br>
                                        <span class="quote-left">『</span><span class="highlight">HEAT20 G2</span><span class="quote-right">』</span>対応の<span class="highlight">高断熱</span>
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
    <section class="sect_3">
        <img class="img-clouds-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/top_house_1.svg" alt="">
        <img class="img-clouds-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/top_house_sp.svg" alt="">
        <div class="l-wrap">
            <div class="sect_3__inner">
                <div class="sect_3__flexcont">
                    <div class="c-content">
                        <h3 class="c-heading-title c-heading-title-primary mb-15">性能</h3>
                        <p class="c-heading-text">『耐震等級3』の高耐震、『HEAT20 G2』対応の高断熱が標準仕様。国の基準をはるかに上回る高性能住宅です。<br>
                            『耐震等級3』は、災害時の防災拠点となる警察署や消防署と同じ強度を有し、長期優良住宅の耐震性をも上回る、国内最高ランクの耐震性能。<br>
                            そして、現在の断熱基準としてはもっとも高性能な『 HEAT20』。「G2」はG1～G3の3段階の中間に当たり、ZEH（ゼッチ）基準の上位に位置しています。<br>
                            また、自然エネルギーを活用するなど省エネ性の向上にも取り組んでいるため、住み始めてからのランニングコストを大幅に抑えることも可能です。
                        </p>
                    </div>
                    <!-- <div class="right_features_sp"> -->
                        <p class="right_fea right-title-primary">features</p>
                    <!-- </div> -->
                    <div class="c-image">
                        <img class="performance-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/performance_imgtxt.png" alt="Performance">
                        <img class="kit" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/performance_img.png" alt="">
                        <!-- <img class="performance-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/performance_imgtxt.png" alt=""> -->
                    </div>
                </div>
                <div class="sect_3__relative">
                    <div class="sect_3__flexcont_2 mt-100">
                        <div class="c-content">
                            <h3 class="c-heading-title c-heading-title-primary mb-15">デザイン</h3>
                            <p class="c-heading-text">
                                建築におけるデザインとは、外観や内観などの見た目のよさだけを指すのではなく、機能的な動線や快適な居住環境、空間の使い方といった総合的な要素を含んでいます。
                                はるのいえの企画住宅は、思わず目を引くシンプルでスタイリッシュな外観と、山小屋風やカフェ風、シンプルナチュラルなど、木をふんだんに使った温かみのあるインテリアが特徴です。
                                徹底的にムダを省き、省エネ性にも配慮した効率的な間取り。コンパクトながらも狭さを感じさせない、家族がつながる開放的な空間。
                                飽きのこない価値あるデザインは、ご家族の日々の暮らしに潤いをもたらしてくれます。

                            </p>
                        </div>
                        <div class="c-image">
                            <img class="kit" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/circle_img.png" alt="">
                            <div class="d-image">
                                <img class="design" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/design_img.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="sect_3__relative">
                    <div class="sect_3__flexcont_3 mt-100">
                        <div class="c-content">
                            <h3 class="c-heading-title c-heading-title-primary mb-15">コンセプト</h3>
                            <p class="c-heading-text">
                                カバードポーチのある平屋の家。<br>
                                庭で自宅BBQやおうちキャンプができる家。<br>
                                家事の効率化を重視した家。<br>
                                はるのいえの企画住宅は、プランごとにさまざまなコンセプトをご用意しています。<br>
                                理想の暮らしを言葉にして伝えるのは難しいけれど、好きなものを選ぶのは意外と簡単。<br>
                                ご家族らしい暮らしを実現できるコンセプトハウスを、はるのいえで見つけてください。
                            </p>
                            <div class="concept-image">
                                <img class="design" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/concept_img_1.png" alt="">
                            </div>
                        </div>
                        <div class="c-image">
                            <img class="kit-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/concept_img.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="right_features_pc">
                <p class="right_fea right-title-primary">features</p>
            </div>
        </div>
        <img class="sect_3_row_3_sp" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/concept_img_sp.png" alt="">
    </section>
    <section class="sect_4">
        <div class="sect_4__overlay">
            <div class="l-wrap">
                <div class="sect_4__flexcon">
                    <a href="#sect_5" class="sect_4__ctext h-135">
                        <p class="c-heading">any plan</p>
                        <p class="c-txt">プラン</p>
                        <!-- <p class="arrow-white">🠗</p> -->
                        <img class="arrow-down"
                            src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/arrow_down.png" alt="">
                    </a>
                    <img class="forward_slash"
                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/forward_slash_img.png" alt="">
                    <a href="#sect_6" class="sect_4__ctext h-135">
                        <p class="c-heading">performance</p>
                        <p class="c-txt">性能・仕様</p>
                        <img class="arrow-down"
                            src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/arrow_down.png" alt="">
                    </a>
                    <img class="forward_slash"
                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/forward_slash_img.png" alt="">
                    <a href="#sect_7" class="sect_4__ctext">
                        <p class="c-heading">procedure</p>
                        <p class="c-txt">家づくりの流れ</p>
                        <img class="arrow-down"
                            src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/arrow_down.png" alt="">
                    </a>
                    <img class="forward_slash"
                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/forward_slash_img.png" alt="">
                    <a href="#sect_8" class="sect_4__ctext">
                        <p class="c-heading">virtual reality</p>
                        <p class="c-txt">V　R</p>
                        <img class="arrow-down"
                            src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/arrow_down.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_5" id="sect_5">
        <div class="sect_5_mw14">
            <div class="l-wrap">
                <div class="flexcon">
                    <div class="context">
                        <div class="c-head">
                            <h4 class="c-heading-plan">PLAN.<span>01</span></h4>
                            <h3 class="c-heading-title">個性を提案する家</h3>
                        </div>
                        <hr class="border-line">
                        <p class="c-txt">
                            「普通の家では満足できない」そんなあなたのためのプラン。<br>
                            <span class="space"></span>
                            ユニークな外観には似つかわしくない、家族のつながりを重視した優しい間取りが、このプランの大きな特徴。<br>
                            <span class="space"></span>
                            回遊性をもたせることにより、すべての部屋を緩くつなげた動線。<br>
                            親子間のコミュニケーションを生むリビング階段。<br>
                            吹き抜けをとおしてリビングとつながる2階のフリースペース。<br>
                            <span class="space"></span>
                            家族がどこにいても、お互いの気配を感じることのできるプランです。

                        </p>
                    </div>
                    <div class="c-image">
                        <div class="img_slider">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'category_name' => 'Plan 1',
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
                    </div>
                </div>
            </div>
        </div>
        <div class="sect_5_mw_1090">
            <div class="l-wrap">
                <div class="flexcon_1">
                    <div class="c-image">
                        <div class="img_slider">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'category_name' => 'Plan 2',
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
                    </div>
                    <div class="context">
                        <div class="c-head">
                            <h4 class="c-heading-plan">PLAN.<span>02</span></h4>
                            <h3 class="c-heading-title">デザインと性能を備えた家</h3>
                        </div>
                        <hr class="border-line">
                        <p class="c-txt">
                            暖房効率を考慮した間取りで、家中どこにいても夏涼しく冬暖かい。<br>
                        　  <br>
                            結露がなく、カビやダニとも無縁の住まい。 <br>
                            冷暖房コストも大幅に削減できます！ <br>
                        　  <br>
                            シンプルな三角屋根と、黒いガルバの外壁。1階部分を板張りにすることで、外観に変化をつけています。 <br>
                        　  <br>
                            「デザインと性能」どちらも手に入れたいという方にぴったりのプランです。
                        </p>
                        
                    </div>
                </div>
                <div class="flexcon_1">
                    <div class="c-image">
                        <div class="img_slider">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'category_name' => 'Plan 3',
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
                    </div>
                    <div class="context">
                        <div class="c-head">
                            <h4 class="c-heading-plan">PLAN.<span>03</span></h4>
                            <h3 class="c-heading-title">空調システム標準の家</h3>
                        </div>
                        <hr class="border-line">
                        <p class="c-txt">
                            空調システムの標準装備で“20年先を見据えた高性能住宅”。<br>
                            <br>
                            総二階のシンプルな形状と吹き抜けのあるオープンな間取りで、全館空調を無理なく実現しています。<br>
                            夏の暑さ、冬の寒さを軽減しつつ、冷暖房にかかるコストを大幅に削減。<br>
                        　  <br>
                            そして、このプランのもう1つの特徴が、“自然との調和”。<br>
                            南側に掃き出し窓を並べ、デッキを介してLDKと庭をつなげることで、家の中と外に連続性をもたせています。
                        </p>
                    </div>
                </div>
                <div class="flexcon_1">
                    <div class="c-image">
                        <div class="img_slider">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'category_name' => 'Plan 4',
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
                    </div>
                    <div class="context">
                        <div class="c-head">
                            <h4 class="c-heading-plan">PLAN.<span>04</span></h4>
                            <h3 class="c-heading-title">シャープな片流れの家</h3>
                        </div>
                        <hr class="border-line">
                        <p class="c-txt">
                            シャープなデザインがかっこいい、片流れ屋根のプラン。<br>
                        　  <br>
                            小屋裏を利用したコテージのような遊び心たっぷりのロフトスペースは、子ども部屋に、書斎に、趣味の部屋にと、自由にご活用いただけます。<br>
                        　  <br>
                            間口10メートル程度の敷地にも建築可能な、奥行きのあるデザイン。<br>
                            コンパクトながら、プライバシーにも配慮した間取り。<br>
                            開放感たっぷりの、大きな窓。<br>
                        　  <br>
                            子どもが巣立ったあとには、1階だけで暮らす“終の棲家”をイメージしてつくられました。
                        </p>
                    </div>
                </div>
                <div class="right_features">
                    <p class="right_fea right-title-primary">plan</p>
                </div>
            </div>
        </div>
        <div class="sect_5_mw14">
            <div class="l-wrap">
                <div class="flexcon">
                    <div class="context">
                        <div class="c-head">
                            <h4 class="c-heading-plan">PLAN.<span>05</span></h4>
                            <h3 class="c-heading-title">敷地と上手に付き合う家</h3>
                        </div>
                        <hr class="border-line">
                        <p class="c-txt">
                            「リゾートコテージで暮らすような、大人のためのプラン。<br>
                            　<br>
                            1階部分の広さが17坪弱。かなりコンパクトですが、ご夫婦2人のお住まいとしては十分です。<br>
                            終の棲家と考えれば、小さな平屋はとても合理的。使わなくなった子ども部屋が物置になることも、老後のために大がかりなリフォームをする必要もありません。<br>
                            　<br>
                            ロフト空間はあくまでもプラスαの位置づけ。<br>
                            子どもが巣立ったあとは書斎として、趣味のスペースとして、宿泊用の客間として、自由にご活用いただけます。<br>
                            　<br>
                            大きな窓と広いデッキ。開放的なのに、どこか隠れ家的。
                        </p>
                    </div>
                    <div class="c-image">
                        <div class="img_slider">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'category_name' => 'Plan 5',
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
                    </div>
                </div>
            </div>
        </div>
        <div class="sect_5_mw_1090">
            <div class="l-wrap">
                <div class="flexcon_1">
                    <div class="c-image">
                        <div class="img_slider">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'category_name' => 'Plan 6',
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
                    </div>
                    <div class="context">
                        <div class="c-head">
                            <h4 class="c-heading-plan">PLAN.<span>06</span></h4>
                            <h3 class="c-heading-title">毎日がウチカフェな平屋の家</h3>
                        </div>
                        <hr class="border-line">
                        <p class="c-txt">
                            カフェテラスのようなカバードポーチが特徴の平屋プラン。<br>
                            　<br>
                            26坪というコンパクトな間取りながら、収納も十分。<br>
                            パントリーを軸にした回遊動線は、家事効率化だけでなく、水まわりのプライバシー確保にも一役買っています。<br>
                            　<br>
                            対面キッチンからは、リビングダイニングの様子や4枚建ての窓越しにテラスと庭も一望できます。<br>
                            完全フラットなバリアフリー仕様なので、終の住処としてもおすすめです。洋間を和室に変更することも可能です。
                        </p>
                        <!-- <div class="right_features">
                            <p class="right_fea right-title-primary">plan</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="sect_5_mw14">
            <div class="l-wrap">
                <div class="flexcon">
                    <div class="context">
                        <div class="c-head">
                            <h4 class="c-heading-plan">PLAN.<span>07</span></h4>
                            <h3 class="c-heading-title">建築家が提案する家</h3>
                        </div>
                        <hr class="border-line">
                        <p class="c-txt">
                            女性建築家が提案する“家族の暮らしを楽しむ”プラン。<br>
                            　<br>
                            すっきりとしたシンプルな外観と、木のあたたかみを感じるインテリア。<br>
                            好きなものに囲まれて、家族がホッと寛ぐことのできる場所。<br>
                            　<br>
                            廊下やホールといったムダをすべて省くことで、31坪の広さを効果的に活用。<br>
                            1階部分は玄関を中心に、南側をパブリックなスペース、北側には水まわりや階段と、明確に区分しています。<br>
                            　<br>
                            2階へ上がると、臨機応変に収納の配置や広さを変えられるベッドルームと、広々としたフリースペース。

                        </p>
                    </div>
                    <div class="c-image">
                        <div class="img_slider">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'category_name' => 'Plan 7',
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
                    </div>
                </div>
            </div>
        </div>
        <div class="sect_5_mw_1090">
            <div class="l-wrap">
                <div class="flexcon_1">
                    <div class="c-image">
                        <div class="img_slider">
                            <?php
                            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'category_name' => 'Plan 8',
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
                    </div>
                    <div class="context">
                        <div class="c-head">
                            <h4 class="c-heading-plan">PLAN.<span>08</span></h4>
                            <h3 class="c-heading-title">街中アウトドアハウス</h3>
                        </div>
                        <hr class="border-line">
                        <p class="c-txt">
                            “街中アウトドアハウス”プラン。<br>
                            　<br>
                            街中だってアウトドアを楽しめます。<br>
                            　<br>
                            お気に入りのアウトドアグッズをたっぷりストックできる、大型のアウトドア収納。<br>
                            　<br>
                            そして、アウトドア生活を目いっぱい満喫できる1階・2階の屋根付きダブルデッキ。<br>
                            2階バルコニーの隣には、使い方自由な6畳のフリースペースも。<br>
                            　<br>
                            ずぼっとした外観、シンプルな間取り、温かみのあるインテリア。すべてが山小屋風のしつらえで、思わずテンションもUPします。
                        </p>
                        <!-- <div class="right_features">
                            <p class="right_fea right-title-primary">plan</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_6" id="sect_6">
        <img class="sect_6__image" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_6/asset_1.png" alt="">
        <div class="l-wrap">
            <p class="sect_6__text">performance</p>
            <div class="heat">
                <div class="heat__col-1">
                    <p class="title">熱性能「HEAT20 G2」</p>
                    <p class="content">はるのいえの企画住宅は、『HEAT20 G2』が標準仕様。
                        『HEAT20』とは住宅に関する有識者を集め2009年にできた民間団体で、断熱性能に関して「G1」「G2」「G3」の3段階の基準が設定されています。
                        各地域における代表的な暖房方式を調査・検討したうえで、「冬期間の室内温度環境」と「省エネルギー性能」を踏まえて設定されており、 G1＜G2＜G3と数字が大きくなるほど断熱性能は高くなります。
                        <br><br>
                        現在、日本には大きく分けて3つの「断熱性能の基準」があります。
                        なかでも、もっとも低い基準が『建築物のエネルギー消費性能の向上に関する法律（建築物省エネ法）』による「平成28年基準」。
                        その次が「ZEH（ゼッチ）基準」。 ZEH（ゼッチ）とは“ネット・ゼロ・エネルギー・ハウス”の略で、消費エネルギーよりもつくるエネルギーが多くなることを目指した住宅のこと。
                        そして、最も高性能な基準が「HEAT20の基準」です。
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_6/sect_6_table.png" alt="">
                    <p class="g2">『HEAT20 G2』対応の、弊社の断熱仕様は以下のとおり。</p>

                    <table>
                        <tr>
                            <th>基礎</th>
                            <td>スタイロフォーム100mm</td>
                        </tr>
                        <tr>
                            <th>天井</th>
                            <td>高性能グラスウール16K、310mm</td>
                        </tr>
                        <tr>
                            <th>壁</th>
                            <td>ネオマフォーム66mm＋45mmのダブル断熱</td>
                        </tr>
                        <tr>
                            <th>窓</th>
                            <td>樹脂製サッシ/トリプルガラス、複層ガラス</td>
                        </tr>
                    </table>
                    <p class="note">注）今後、変更の可能性もあります。</p>
                    <p class="heat20">なお、はるのいえでは建物の外皮性能だけでなく
                        <span class="heat_loss">日射熱・生活熱・換気による熱損失</span>
                        など、さまざまな要素を加味してシミュレーションを繰り返すことで、『HEAT20』の厳しい水準をクリアしています。
                    </p>
                </div>
                <div class="heat__col-2">
                    <p class="title">耐震等級「3」</p>
                    <p class="content">建築基準法で規定された耐震性能は「震度6～7の大地震でも倒壊・崩壊しない」ことを基準としたもの。
                        これは『耐震等級1』に該当し、3段階に分かれた耐震等級の中でもっとも性能が低いと位置付けられています。
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_6/sect_6_table-2.png" alt="">
                    <p class="seismic_grade">
                        震度7の大地震で倒壊しないなら、『耐震等級1』で十分と考える方もいらっしゃるかもしれません。<br>
                        しかし、2016年の熊本地震では繰り返す揺れによって『耐震等級2』の住宅が倒壊しています。<br>
                        これにより、『耐震等級1』はあくまでも避難時間をかせぐための耐震性能に過ぎず、その後も住み続ける上では、強度として十分でないことが実証されました。<br>
                        <br>
                        はるのいえの企画住宅は、『<span>耐震等級3</span>』が<span>標準仕様。</span>（※条件によっては対応できない場合がございます）<br>
                        壁量計算だけでなく、しっかりと<span>構造計算</span>（許容応力度計算）をして地震に対する耐力を確認しています。<br>
                        <br>
                        なお、『耐震等級3相当』とは、耐震等級3と同等の性能を持ってはいるものの、住宅性能評価機関への申請をせず、正式な認定を受けていない建物のことをいいます。<br>
                        『耐震等級3』の認定を受けた場合、地震保険の掛け金が50％に割引されるほか、フラット35の融資を受ける際に金利優遇がある、贈与税の非課税枠が加算対象となるなどのメリットも。<br>
                        <br>
                        より高い安心を求める方は、構造計算によって強度を証明された、はるのいえの高耐震住宅をご検討ください。
                    </p>
                </div>
                <div class="fuel">
                    <div class="fuel__col-1">
                        <p class="title">
                            燃費で家の<br>
                            性能を比べる
                        </p>
                        <p class="desc">HEAT20 G2基準の「PLAN05」に暮らす家庭と、省エネ基準同等プランの家に暮らす家庭の一年間の光熱費を想定してみました。その差を比べてみてください。
                        </p>
                    </div>
                    <div class="fuel__col-2">
                        <!-- BOX 1 -->
                        <div class="fuel__col-2__box-1">
                            <p class="title">省エネ基準の家</p>
                            <p class="box_cont">
                                <span class="year">年間</span>
                                <span class="price">¥383,008-</span>
                            </p>
                        </div>
                        <!-- BOX 2 -->
                        <div class="fuel__col-2__box-2">
                            <p class="title">HEAT20 G2の家</p>
                            <p class="box_cont">
                                <span class="year">年間</span>
                                <span class="f20">¥165,341-</span>
                            </p>
                            <div class="box_cont_2">
                                <p class="year">省エネ基準の家より</p>
                                <p class="price">¥217,667-<span style="color: #D88E9B; font-weight: bold;">お得</span></p>
                            </div>
                        </div>
                        <!-- BOX 3 -->
                        <div class="fuel__col-2__box-3">
                            <p class="title">HEAT20 ZEH仕様の家</p>
                            <p class="box_cont">
                                <span class="year">年間</span>
                                <span class="price">¥77,762-</span>
                            </p>
                            <div class="box_cont_2">
                                <p class="year">省エネ基準の家より</p>
                                <p class="price">¥305,246- <span style="color: #D88E9B; font-weight: bold;">お得</span></p>
                            </div>
                            <p class="offer">※太陽光発電システム 1kwあたり税込173,533円でご提供しています。</p>
                        </div>
                    </div>
                    <div class="methods">
                        <ul>
                            <li>
                                ※すべて全館冷暖房（住宅全体を24時間、冬季は20℃以上、夏季は27℃以下に維持して、年間を通じて室内環境を健康で快適な状態で維持する空調方法）
                            </li>
                            <li>
                                ※光熱費の計算は 電気27円/kwh、ガス180円/㎡、灯油64円/ℓ、売電2021年度19円/kWの単価設定により算定することを基本とします。
                            </li>
                            <li>
                                ※この計算結果は、標準モデル生活を行なった場合の計算結果であり、実際の燃費を保証するものではありません。
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_7" id="sect_7">
        <div class="l-wrap">
            <p class="sect_7__text">procedure</p>
            <div class="steps">
                <!-- STEP 1 -->
                <div class="procedure__left afterimage">
                    <div class="procedure__item">
                        <div class="row-1">
                            <p class="title">ヒアリング</p>
                        </div>
                        <p class="desc">まずは、あなたの理想の家づくりについてお聞かせください。
                            こだわりや予算をお伺いし、企画住宅で話を進めたいということであれば、この時点である程度プランの目星をつけておきます。<br>
                            お打ち合わせは対面でもオンラインでもOK。ご家族皆さまでご参加ください。
                        </p>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="procedure__right afterimage">
                    <div class="procedure__item">
                        <div class="row-1">
                            <p class="title">資金計画</p>
                        </div>
                        <p class="desc">家づくりの基本は資金計画。
                            はるのいえの資金計画は「家を建てるための計画」ではなく、「家を建てても今の生活をキープしていくための計画」です。
                            20年後、30年後まで考えた、無理のない資金計画をご提案いたします。
                        </p>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="procedure__left afterimage">
                    <div class="procedure__item">
                        <div class="row-1">
                            <p class="title">土地探し＋プラン選び（VR）</p>
                        </div>
                        <p class="desc">これから土地を購入されるお客さまには、土地探しもサポートいたします。<br>
                            土地の形状によって配置できるプランも変わってきますので、土地探しと並行してプラン選びを進めていきましょう。
                            プランごとのVR（バーチャル・リアリティ）もご体験いただけます！
                        </p>
                    </div>
                </div>

                <!-- STEP 4 -->
                <div class="procedure__right afterimage">
                    <div class="procedure__item">
                        <div class="row-1">
                            <p class="title">シミュレーション</p>
                        </div>
                        <p class="desc">間取りや仕様が同じ建物であっても、敷地が違えば日照や通風の条件は異なります。<br>
                            最適な温熱環境を整えるため、企画住宅であっても日当たりや風通し、建物燃費などのシミュレーションはしっかりと行います。
                        </p>
                    </div>
                </div>

                <!-- STEP 5 -->
                <div class="procedure__left afterimage">
                    <div class="procedure__item">
                        <div class="row-1">
                            <p class="title">着工</p>
                        </div>
                        <p class="desc">プラン決定後、構造計算や各種申請業務などに1ヶ月半〜程度のお時間をいただきます。<br>
                            施工期間中は工事の進捗状況をこまめにお知らせいたしますので、安心しておまかせください。
                        </p>
                    </div>
                </div>

                <!-- STEP 6 -->
                <div class="procedure__right afterimage">
                    <div class="procedure__item">
                        <div class="row-1">
                            <p class="title">自社検査＋<br>第三者機関による検査</p>
                        </div>
                        <p class="desc">はるのいえでは、自社検査のほか第三者機関による検査も行っています。<br>
                            検査は全7回177項目。雨漏りや水漏れしやすい部分と躯体の強度、省エネに関する部分を重点的にチェックします。
                        </p>
                    </div>
                </div>

                <!-- STEP 7 -->
                <div class="procedure__left afterimage">
                    <div class="procedure__item">
                        <div class="row-1">
                            <p class="title">お引き渡し</p>
                        </div>
                        <p class="desc">完成検査が終わったら、いよいよお引き渡しです。<br>
                            夏涼しく冬暖かい、省エネの家。はるのいえの企画住宅で、心地よいくらしをスタートしてください！
                        </p>
                    </div>
                </div>

                <!-- STEP 8 -->
                <div class="procedure__right afterimage">
                    <p class="step_9_txt">※それぞれ必要な期間には変動がございます。</p>
                    <div class="procedure__item">
                        <div class="row-1">
                            <p class="title">アフターサービス</p>
                        </div>
                        <p class="desc">半年、1年、2年、5年、10年の全5回、第三者機関がお住まいの点検に訪問いたします。<br>
                            保証は維持管理型保証（最大50年保証）、短期保証（2年）のほか、保険代理店との提携による充実した安心サービスもご案内しております。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_8" id="sect_8">
        <div class="sect_8_mw14">
        <img class="img-clouds-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_8/vr_video.png" alt="">
            <!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4tnf8FMd2Wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>
    </section>
    <section class="sect_9">
        <div class="sect_9__wrapper">
            <div class="sect_9__cont flex">
                <div class="sect_9__cont__item">
                    <p>virtual reality</p>
                </div>
                <div class="sect_9__cont__item">
                    <p>
                    はるのいえが大切にしていること。それは、お客さまに「いかにわかりやすく伝えるか」ということです。<br>
                    <br>
                    そこで、すべてのお客さまにリアルな立体空間をご体感いただけるよう、「<span>VR</span>」を導入しております。<br>
                    VRならゴーグルを装着して映像にアクセスするだけで、まるで本当にその空間にいるかのような臨場感を、誰でも簡単に体験できます。<br>
                    <br>
                    対面でのお打ち合わせが難しい場合には、当社からゴーグルを貸し出して、ご自宅から映像にアクセスし、VRを体感いただくことも可能です。<br>
                    完成してからの「こんなはずじゃなかった」「想像していたのと違う」というリスクを避けるためにも、ぜひはるのいえのVRをご体験ください。

                    </p>
                </div>
            </div>
        </div>     
    </section>
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
