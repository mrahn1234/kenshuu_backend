<?php require './config/db.php'; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="プレスリリースサイト" />
    <link rel="shortcut icon" type="image/png" href="./public/assets/image/favicon.ico" />
    <link rel="stylesheet" href="./public/assets/sass/main.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>PR TIMES｜プレスリリース・ニュースリリースNo.1配信サービス</title>
</head>

<body>
    <div class="wrapper">
        <?php include './views/common/_header.php' ?>
        <nav class="nav">
            <ul class="categories">
                <li class="categories__item categories__item--active-item">
                    <a href="#">総合</a>
                </li>
                <li class="categories__item"><a href="#">テクノロジー</a></li>
                <li class="categories__item"><a href="#">モバイル</a></li>
                <li class="categories__item"><a href="#">アプリ</a></li>
                <li class="categories__item"><a href="#">エンタメ</a></li>
                <li class="categories__item"><a href="#">ビューティー</a></li>
                <li class="categories__item"><a href="#">ファッション</a></li>
                <li class="categories__item"><a href="#">ライフスタイル</a></li>
                <li class="categories__item"><a href="#">ビジネス</a></li>
                <li class="categories__item"><a href="#">グルメ</a></li>
                <li class="categories__item"><a href="#">スポーツ</a></li>
            </ul>
        </nav>
        <section class="ranking">
            <ul class="articles">
                <li class="articles__item">
                    <div class="articles__order-number">1</div>
                    <a href="#" class="articles__link">
                        <div class="articles__cover">
                            <img src="./public/assets/image/1.png" alt="article-image" />
                        </div>
                        <p class="articles__content">
                            【新型コロナ感染者数マップ】緊急事態宣言発令状況やを東京都市区町村別,緊急事態宣言発令状況やを東京都市区町村別
                        </p>
                    </a>
                    <div class="articles__stamp">
                        <p class="articles__time">
                            <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                            2時間
                        </p>
                        <a href="#">
                            <p class="articles__company-release">いちから株式会社</p>
                        </a>
                        <a href="#">
                            <p class="articles__pv">PV 00,000 / UU 00,000</p>
                        </a>
                    </div>
                </li>
                <li class="articles__item">
                    <div class="articles__order-number">2</div>
                    <a href="#" class="articles__link">
                        <div class="articles__cover">
                            <img src="./public/assets/image/2.png" alt="article-image" />
                        </div>
                        <p class="articles__content">
                            従業員に国内最大級の「危険手当」を支給
                        </p>
                    </a>
                    <div class="articles__stamp">
                        <p class="articles__time">
                            <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                            1時間
                        </p>
                        <a href="#">
                            <p class="articles__company-release">株式会社SHIFT</p>
                        </a>
                        <a href="#">
                            <p class="articles__pv">PV 00,000 / UU 00,000</p>
                        </a>
                    </div>
                </li>
                <li class="articles__item">
                    <div class="articles__order-number">3</div>
                    <a href="#" class="articles__link">
                        <div class="articles__cover">
                            <img src="./public/assets/image/3.png" alt="article-image" />
                        </div>
                        <p class="articles__content">
                            【医療関係優先期間終了】洗える布マスク「スーパーフィット」の一般販売...
                        </p>
                    </a>
                    <div class="articles__stamp">
                        <p class="articles__time">
                            <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                            2時間
                        </p>
                        <a href="#">
                            <p class="articles__company-release">
                                株式会社アメイズプラス
                            </p>
                        </a>
                        <a href="#">
                            <p class="articles__pv">PV 00,000 / UU 00,000</p>
                        </a>
                    </div>
                </li>
                <li class="articles__item">
                    <div class="articles__order-number">4</div>
                    <a href="#" class="articles__link">
                        <div class="articles__cover">
                            <img src="./public/assets/image/4.png" alt="article-image" />
                        </div>
                        <p class="articles__content">
                            【新型コロナ感染者数マップ】緊急事態宣言発令状況やを東京都市区町村別...
                        </p>
                    </a>
                    <div class="articles__stamp">
                        <p class="articles__time">
                            <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                            2021年3月10日
                        </p>
                        <a href="#">
                            <p class="articles__company-release">いちから株式会社</p>
                        </a>
                        <a href="#">
                            <p class="articles__pv">PV 00,000 / UU 00,000</p>
                        </a>
                    </div>
                </li>
                <li class="articles__item">
                    <div class="articles__order-number">5</div>
                    <a href="#" class="articles__link">
                        <div class="articles__cover">
                            <img src="./public/assets/image/5.png" alt="article-image" />
                        </div>
                        <p class="articles__content">
                            ニコニコ超会議2020 東大寺から疫病退散を祈願 法要と国宝
                        </p>
                    </a>
                    <div class="articles__stamp">
                        <p class="articles__time">
                            <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                            2時間
                        </p>
                        <a href="#">
                            <p class="articles__company-release">
                                株式会社アメイズプラス
                            </p>
                        </a>
                        <a href="#">
                            <p class="articles__pv">PV 00,000 / UU 00,000</p>
                        </a>
                    </div>
                </li>
                <li class="articles__item">
                    <div class="articles__order-number">6</div>
                    <a href="#" class="articles__link">
                        <div class="articles__cover">
                            <img src="./public/assets/image/6.png" alt="article-image" />
                        </div>
                        <p class="articles__content">
                            東京証券取引所市場第一部へのお知らせ
                        </p>
                    </a>
                    <div class="articles__stamp">
                        <p class="articles__time">
                            <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                            2時間
                        </p>
                        <a href="#">
                            <p class="articles__company-release">
                                株式会社アメイズプラス
                            </p>
                        </a>
                        <a href="#">
                            <p class="articles__pv">PV 00,000 / UU 00,000</p>
                        </a>
                    </div>
                </li>
            </ul>
        </section>
        <main class="main">
            <div class="contents">
                <div class="top-heading">
                    <h3 class="contents__title">新着プレスリリース</h3>
                    <a class="btn btn--info btn--radius" href="./views/article_new.php">Submit</a>
                </div>
                <div class="wrap">
                    <ul class="articles">
                        <li class="articles__item">
                            <a href="#" class="articles__link">
                                <div class="articles__cover">
                                    <img src="./public/assets/image/a1.png" alt="article-image" />
                                </div>
                                <p class="articles__content">
                                    BRITA JapanがG20のユース向け公式付属会議「Y20 SUMMIT 2019
                                    JAPAN」に登壇！マイボトル化推進...
                                </p>
                            </a>
                            <div class="articles__stamp">
                                <p class="articles__time">
                                    <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                                    5分前
                                </p>
                                <a href="#" class="articles__company-release">BRITA Japan株式会社</a>
                            </div>
                        </li>
                        <li class="articles__item">
                            <a href="#" class="articles__link">
                                <div class="articles__cover">
                                    <img src="./public/assets/image/a1.png" alt="article-image" />
                                </div>
                                <p class="articles__content">
                                    近くの飲食店を社食として利用できる【どこでも社食】が「東京純豆腐」と提携近くの飲食店を社食として利用できる【どこでも社食】が「東京純豆腐」と提携
                                </p>
                            </a>
                            <div class="articles__stamp">
                                <p class="articles__time">
                                    <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                                    5分前
                                </p>
                                <a class="articles__company-release" href="#">BRITA Japan株式会社</a>
                            </div>
                        </li>
                        <li class="articles__item">
                            <a href="#" class="articles__link">
                                <div class="articles__cover">
                                    <img src="./public/assets/image/a1.png" alt="article-image" />
                                </div>
                                <p class="articles__content">創業10年で10件の特許を取得！</p>
                            </a>
                            <div class="articles__stamp">
                                <p class="articles__time">
                                    <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                                    5分前
                                </p>
                                <a href="#" class="articles__company-release">BRITA Japan株式会社</a>
                            </div>
                        </li>
                        <li class="articles__item">
                            <a href="#" class="articles__link">
                                <div class="articles__cover">
                                    <img src="./public/assets/image/a1.png" alt="article-image" />
                                </div>
                                <p class="articles__content">
                                    チャット型検索エンジン『CHAT EXTENSION』を提供開始
                                </p>
                            </a>
                            <div class="articles__stamp">
                                <p class="articles__time">
                                    <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                                    5分前
                                </p>
                                <a href="#" class="articles__company-release">BRITA Japan株式会社</a>
                            </div>
                        </li>
                        <li class="articles__item">
                            <a href="#" class="articles__link">
                                <div class="articles__cover">
                                    <img src="./public/assets/image/a1.png" alt="article-image" />
                                </div>
                                <p class="articles__content">
                                    AWAが月額480円の新プラン「学生プラン」をスタート
                                </p>
                            </a>
                            <div class="articles__stamp">
                                <p class="articles__time">
                                    <img src="./public/assets/image/icon.png" class="clock-icon clock-icon--size" alt="time-stamp" />
                                    5分前
                                </p>
                                <a href="#" class="articles__company-release">BRITA Japan株式会社</a>
                            </div>
                        </li>
                    </ul>
                    <div class="control">
                        <a class="btn btn--primary input--radius" href="./views/check.php">もっと見る</a>
                    </div>
                </div>
            </div>
            <aside class="side">
                <div class="keyword">
                    <h4 class="title">今注目のキーワード</h4>
                    <ul class="hot-keywords">
                        <li class="hot-keywords__item"><a href="#">桜</a></li>
                        <li class="hot-keywords__item"><a href="#">令和</a></li>
                        <li class="hot-keywords__item"><a href="#">テレワーク</a></li>
                        <li class="hot-keywords__item"><a href="#">#AprilDream</a></li>
                        <li class="hot-keywords__item"><a href="#">電子マネー</a></li>
                        <li class="hot-keywords__item"><a href="#">令和</a></li>
                        <li class="hot-keywords__item more-detail">
                            <a href="#">もっと見る</a>
                        </li>
                    </ul>
                </div>
            </aside>
        </main>
        <?php include './views/common/_footer.php' ?>
    </div>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>