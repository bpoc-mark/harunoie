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
    <section class="sect_3">
        <img class="img-clouds-pc" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/top_house_1.png" alt="">
        <img class="img-clouds-sp" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/top_house_sp.png" alt="">
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
            <div class="sect_3__right_features">
                <p class="right_fea right-title-primary">features</p>
            </div>
        </div>
        <img class="sect_3_row_3_sp" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/concept_img_sp.png" alt="">
    </section>
    <section class="sect_4">
        <div class="sect_4__overlay">
            <div class="l-wrap">
                <div class="sect_4__flexcon">
                    <a href="" class="sect_4__ctext h-135">
                        <p class="c-heading">any plan</p>
                        <p class="c-txt">プラン</p>
                        <!-- <p class="arrow-white">🠗</p> -->
                        <img class="arrow-down"
                            src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/arrow_down.png" alt="">
                    </a>
                    <img class="forward_slash"
                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/forward_slash_img.png" alt="">
                    <a href="" class="sect_4__ctext h-135">
                        <p class="c-heading">performance</p>
                        <p class="c-txt">性能・仕様</p>
                        <img class="arrow-down"
                            src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/arrow_down.png" alt="">
                    </a>
                    <img class="forward_slash"
                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/forward_slash_img.png" alt="">
                    <a href="" class="sect_4__ctext">
                        <p class="c-heading">procedure</p>
                        <p class="c-txt">家づくりの流れ</p>
                        <img class="arrow-down"
                            src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/arrow_down.png" alt="">
                    </a>
                    <img class="forward_slash"
                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/forward_slash_img.png" alt="">
                    <a href="" class="sect_4__ctext">
                        <p class="c-heading">virtual reality</p>
                        <p class="c-txt">V　R</p>
                        <img class="arrow-down"
                            src="<?php echo get_template_directory_uri(); ?>/release/image/sect_4/arrow_down.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_5">
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
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_1.png"
                                    alt="">
                            </div>
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_1.png"
                                    alt="">
                            </div>
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
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_2.png"
                                    alt="">
                            </div>
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_2.png"
                                    alt="">
                            </div>

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
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_3.png"
                                    alt="">
                            </div>
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_3.png"
                                    alt="">
                            </div>

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
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_4.png"
                                    alt="">
                            </div>
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_4.png"
                                    alt="">
                            </div>

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
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_5.png"
                                    alt="">
                            </div>
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_5.png"
                                    alt="">
                            </div>
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
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_6.png"
                                    alt="">
                            </div>
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_6.png"
                                    alt="">
                            </div>

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
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_7.png"
                                    alt="">
                            </div>
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_7.png"
                                    alt="">
                            </div>
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
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_8.png"
                                    alt="">
                            </div>
                            <div>
                                <img class="forward_slash"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_5/slick_img_8.png"
                                    alt="">
                            </div>

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
    <section>6</section>
    <section>7</section>
    <section>8</section>
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