@extends('layout.master')
@section('content')
<div class="container-fluid">
    <main>
        <div class="image-box ratio-5-3">
            <div class="image">
                <div class="container">

                    <div class="text">
                        <div class="text_one ">
                            <p class="font_one  "> The Choice is</p>
                            <p class="font_one  "> Yours</p>
                        </div>
                        <div class="text_two">
                            <p>仕事を選ぶ</p>
                            <p>自由をあなたに</p>
                        </div>
                        <div class="name">
                            <!-- <p class="name"> TRUST GROWTH</p>
                            <p class="text-name">株式会社トラストグロース</p> -->
                            <img  src="/images/background/trust-growth.png" alt="trust growth"/>
                        </div>
                    </div>
                    <div class="panel search_form">
                        <div class="panel-heading">

                            <span><img src="/images/search-top.png" alt="かんたん検索"/>かんたん検索</span>
                        </div>
                        <div class="panel-body">
                            <div class="select_option ">
                                <select class="multi-select-dd">
                                    <option value="MySQL" selected>勤務地を選ぶ</option>
                                    <option value="SQLServer">勤務地を選ぶ</option>
                                    <option value="Oracle">勤務地を選ぶ</option>
                                    <option value="HTML">勤務地を選ぶ</option>
                                    <option value="CSS">勤務地を選ぶ</option>
                                    <option value="jQuery">勤務地を選ぶ</option>
                                    <option value="Bootstrap">勤務地を選ぶ</option>
                                </select>
                                <select tabindex="1" class="multi-select-dd">
                                    <option value="MySQL" selected>働き方を選ぶ</option>
                                    <option value="SQLServer">勤務地を選ぶ</option>
                                    <option value="Oracle">勤務地を選ぶ</option>
                                    <option value="HTML">勤務地を選ぶ</option>
                                    <option value="CSS">勤務地を選ぶ</option>
                                    <option value="jQuery">勤務地を選ぶ</option>
                                    <option value="Bootstrap">勤務地を選ぶ</option>
                                </select>
                                <select tabindex="3" class="multi-select-dd">
                                    <option value="MySQL" selected>職種を選ぶ</option>
                                    <option value="SQLServer">勤務地を選ぶ</option>
                                    <option value="Oracle">勤務地を選ぶ</option>
                                    <option value="HTML">勤務地を選ぶ</option>
                                    <option value="CSS">勤務地を選ぶ</option>
                                    <option value="jQuery">勤務地を選ぶ</option>
                                    <option value="Bootstrap">勤務地を選ぶ</option>
                                </select>
                                <div>
                                    <button accesskey="g" tabindex="4" class="button-search">
                                        <img src="./images/search.png" alt="検索" />
                                        <span class="fa fa-search ">この条件で検索</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row row2">
                <div class="col-xl-4 col-lg-4 col-md-4 -col-sm-12 col-12">
                    <div class="collum">

                        <a href="page2.php">
                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12">
                                <img src="/images/icon-1.png" alt="医療福祉">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 ">
                                <h2 class="title">医療・福祉</h2>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 ">
                                <h3 class="conten">
                        介護・看護・保育など、需要の広がる業界で <br>
						活躍できる環境をご提供します
                    </h3>
                            </div>
                        </a>
                        <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 button">
                            <a href="page8.php">
                                <div class="button-collum">

                                    <img src="/images/btn-next.png" alt="求人検索">
                                    <span> 求人を検索する</span>

                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 -col-sm-12 col-12">
                    <div class="collum">
                        <a href="page3.php">
                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12">
                                <img src="/images/icon-2.png" alt="ITエンジニア">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 ">
                                <h2 class="title">I Tエンジニア</h2>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 ">
                                <h3 class="conten">
                        進化の早いIT業界<br>
						今のあなたに最適なお仕事を探しませんか
                    </h3>
                            </div>
                        </a>
                        <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 button">
                            <a href="page29.php">
                                <div class="button-collum">
                                    <img src="/images/btn-next.png" alt="仕事紹介">
                                    <span> お仕事を紹介してもらう</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 -col-sm-12 col-12">
                    <div class="collum">
                        <a href="page4.php">
                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12">
                                <img src="/images/icon-3.png" alt="総合人材">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 ">
                                <h2 class="title">総合人材</h2>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 ">
                                <h3 class="conten">
                                   オフィスワーク・軽作業・製造・接客など<br>
            						多様な業種・職種を取り扱っています
                                </h3>
                            </div>
                        </a>
                        <div class="col-xl-12 col-lg-12 col-md-12 -col-sm-12 col-12 button">
                            <a href="page9.php">
                                <div class="button-collum">
                                    <img src="/images/btn-next.png" alt="求人検索">
                                    <span> 求人を検索する</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row color-background">
            <div class="container">
                <div class="row-2">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                <div class="collum-2">
                                <a href="/system/">
                                    <div class="row">

                                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 small-panel ">
                                            <div class="collum-2-title">
                                                <img src="/images/img-index-1.png" alt="新卒採用">
                                                <span class="title-img">ご担当者の方へ</span>
                                            </div>
                                            <span class="note-title-img">（企業様向け）</span>
                                            <br>
                                            <div class="m-top-10">
                                                <span class="text-content ">スカウトの</span>
                                                <br>
                                                <span class="text-content">ご利用はこちらから</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 next-page">
                                            <img src="./images/next-page.png" alt="初めての方へ">
                                        </div>

                                    </div>
                                    </a>
                                </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                <div class="collum-2">
                                <a href="/beginner/">
                                    <div class="row">

                                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 small-panel">

                                            <div class="collum-2-title">
                                                <img src="/images/img-index-2.png" alt="初めての方へ">
                                                <span class="title-img">初めての方へ</span>
                                            </div>
                                            <span class="note-title-img">（お仕事を探している方向け）</span>
                                            <br>
                                            <div class="m-top-10">
                                                <span class="text-content">当社のご案内と</span>
                                                <br>
                                                <span class="text-content">無料登録はこちらから</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 next-page">
                                            <img src="/images/next-page.png" alt="初めての方へ">
                                        </div>

                                    </div>
                                    </a>
                                </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row margin-top-50">
            <div class="container">
                <div class="row-2">
                    <div class="text-new">
                        <span>News</span>
                    </div>
                    <div class="margin-top-30">
                        <article class="row text-body">

                            <div class="col-xl-1 col-lg-1 col-md-1 -col-sm-12 col-12"><span>2019/1/9</span></div>
                            <div class="col-xl-10 col-lg-10 col-md-10 -col-sm-12 col-12">
                                <p>【設計施工派遣事業部】</p>
                                <span>トラストグロース設計施工派遣事業部サイトを新設致しました。</span>
                            </div>
                        </article>
                        <article class="row text-body">

                            <div class="col-xl-1 col-lg-1 col-md-1 -col-sm-12 col-12"><span>2019/1/9</span></div>
                            <div class="col-xl-10 col-lg-10 col-md-10 -col-sm-12 col-12">
                                <p>【設計施工派遣事業部】</p>
                                <span>トラストグロース設計施工派遣事業部サイトを新設致しました。</span>
                            </div>
                        </article>
                        <article class="row text-body">

                            <div class="col-xl-1 col-lg-1 col-md-1 -col-sm-12 col-12"><span>2019/1/9</span></div>
                            <div class="col-xl-10 col-lg-10 col-md-10 -col-sm-12 col-12">
                                <p>【設計施工派遣事業部】</p>
                                <span>トラストグロース設計施工派遣事業部サイトを新設致しました。</span>
                            </div>
                        </article>
                        <article class="row text-body">

                            <div class="col-xl-1 col-lg-1 col-md-1 -col-sm-12 col-12"><span>2019/1/9</span></div>
                            <div class="col-xl-10 col-lg-10 col-md-10 -col-sm-12 col-12">
                                <p>【設計施工派遣事業部】</p>
                                <span></span>トラストグロース設計施工派遣事業部サイトを新設致しました。
                            </div>
                        </article>
                        <article class="row text-body">

                            <div class="col-xl-1 col-lg-1 col-md-1 -col-sm-12 col-12"><span>2019/1/9</span></div>
                            <div class="col-xl-10 col-lg-10 col-md-10 -col-sm-12 col-12">
                                <p>【設計施工派遣事業部】</p>
                                <span>トラストグロース設計施工派遣事業部サイトを新設致しました。</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script>
    (function($) {
        $(function() {
            $('.multi-select-dd').fSelect();
        });
    })(jQuery);
</script>
@endsection