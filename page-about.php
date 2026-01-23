<?php get_header(); ?>
<main id="about">
    <section class="about__top">
        <div class="about__top--inner">

            <picture>
                <source srcset="<?= get_theme_file_uri() ?>/assets/images/about_message.png" media="(min-width: 640px)" />
                <img src="<?= get_theme_file_uri() ?>/assets/images/about_message_sp.png" alt="MDN" />
            </picture>

        </div>

        <div class="wave-top wave-blue"></div>
    </section>
    <section class="about__company">
        <h2 class="h2-01">会社概要</h2>
        <dl>
            <div>
                <dt>会社名</dt>
                <dd>一般社団法人　こころ会</dd>
            </div>
            <div>
                <dt>代表取締役</dt>
                <dd>岩長泰志</dd>
            </div>
            <div>
                <dt>所在地</dt>
                <dd>〒356-0059　埼玉県ふじみ野市桜ヶ丘1-38-34</dd>
            </div>
            <div>
                <dt>電話番号</dt>
                <dd>049-293-6729</dd>
            </div>
            <div>
                <dt>FAX番号</dt>
                <dd>049-293-6780</dd>
            </div>
            <div>
                <dt>事業内容</dt>
                <dd>
                    <ul>
                        <li>就労継続支援B型</li>
                        <li>地域活動支援センター</li>
                        <li>相談支援</li>
                    </ul>
                </dd>
            </div>
        </dl>
    </section>
    <?php 
        $args = [
            "top-wave" => "blue",
            "background" => "yellow",
            "service" => "yellow",
        ];
        get_template_part("parts/footer_top", null ,$args); 
    ?>
</main>

<?php get_footer(); ?>