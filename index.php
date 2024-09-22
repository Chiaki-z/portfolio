<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ポートフォリオ</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="js-fade">
        <div id="header">
            <div id="title">
                <h1>Portfolio</h1>
            </div>
            <div id="menu">
                <p>Profil</p>
                <p>Self PR</p>
                <p>Vison</p>
            </div>
        </div>
        </div>
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <div class="menu-content">
                <ul>
                    <li>
                        <a href="#Profil">Profil</a>
                    </li>
                    <li>
                        <a href="#Self_PR">Self_PR</a>
                    </li>
                    <li>
                        <a href="#Vison">Vison</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="js-fade">
        <div id="gazou">
            <h1>人生に失敗がないと人生に失敗する</h1>
            <h2>Chiaki Kawashima  1st Portfolio</h2>
        </div>
        </div>
    </header>
    <main>
        <div class="js-fade">
        <div id="Profil">
            <div class="title">
                <h1>Profil</h1>
                <h2>自己紹介</h2>
            </div>
            </div>
            <div class="js-fade">
            <div class="Profil__content">
                <div id="Profil__phot">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nezumi.JPG" >alt="プロフィール画像"
                </div>
                <div id="Profil__keireki">
                    <div id="Profil__name">
                        <p>Name.</p>
                        <p>川島　千明</p>
                    </div>
                    <div id="Profil__old">
                        <p>Age.</p>
                        <p>22</p>
                    </div>
                    <div id="Profil__Career">
                        <p>Career. </p>
                        <p>屋久島おおぞら高等学校　卒業</p>
                     </div>
                </div>
            </div>
            </div>
        </div>
        <div id="Self_PR">
            <div class="js-fade">
            <div class="Self_PR__title">
                <h1>Self PR</h1>
                <h2>自己PR</h2>
            </div>
            </div>
            <div class="js-fade">
            <div class="Self_PR__content">
                <div class="hoby">
                    <div class="hoby__title">
                        <p>好きなこと</p>
                    </div>
                    <div class="hoby__content">
                        <p>私はゲームが好きで、特にオンラインゲームをよくやります。ゲームを通して沢山の方とコミュニケーションをとって友好関係を広げたり、協力して難しいコンテンツを攻略したりする事がとても楽しいです。</p>
                    </div>
                </div>
                <div class="good">
                    <div class="good__title">
                        <p>得意なこと</p>
                    </div>
                    <div class="good__content">
                        <p>私はプログラミングを学習しており、ウェブサイトやウェブサービスを作ることが得意です。また、自分自身でスキルをみにつけていることでクリエイティブ思考がみにつき、具体的な企画を練ることが得意です。</p>
                    </div>
                </div>
                <div class="experience">
                    <div class="experience_title">
                        <p>今までの経験</p>
                    </div>
                    <div class="experience_content">
                        <p>私は学生時代ボランティアをやっており、主に地域のイベントのサポート等をしていました。現在は事務の仕事をしており、CADやExcelを使った仕事をしています</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div id="Vison">
            <div class="js-fade">
            <div class="Vison__title">
                <h1>Vison</h1>
                <h2>目標<h2>
            </div>
            </div>
            <div class="js-fade">
            <div class="daimei">
                <h3>クリエイティブ性を取り入れた人材になる</h3>
            </div>
            </div>
            <div class="js-fade">
            <div class="content1">
                <p>私の人生において、クリエイティブな仕事に触れる機会はとても多かったです。</p>
                <p>しかし、自分自身のクリエイティブ性は皆無でした。</p>
                <p>段々と自分自身でも何か生み出していきたいと思いが強まり、</p>
                <p>現在ウェブ関連のプログラミングを学習しております。</p>
            </div>
            </div>
            <div class="js-fade">
            <div class="content2">
                <p>将来的にはフルスタックエンジニアを目指し、</p>
                <p>セールスとプログラミングの領域で</p>
                <p>イノベーションを起こしたいと考えております。</p>
            </div>
            </div>
            <div class="js-fade">
            <div class="shita">
                <p>NEXT COMINGSOON</p>
            </div>
            </div>
    </main>
    <footer>
        <div class="js-fade">
        <div class="top">
            <p>TOP</p>
        </div>
        <div class="shita">
            <p>Created by  Chisaki Kawashima</p>
        </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>