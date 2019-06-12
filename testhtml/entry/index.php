<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>会社概要</title>
    <?php require_once('../head.php');?>
    <link rel="stylesheet" href="./css/index-top.css"/>
    <link rel="stylesheet" href="./css/smart-top.css"/>
    <link rel="stylesheet" href="./css/step.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
<div class="container-fluid">
    <div class="container ">
        <main>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 title-row-3">
                <h4> 会社概要</h4>
            </div>

            <div id="entry-steps" data-step="1">
                <h5>入力
                    <i class="fa fa-angle-right"></i>
                </h5>
                <section id="">
                    <div class="step_content">
                        <form action="#">
                            <table class="table01 table_custom">
                                <tbody>
                                <tr>
                                    <th>
                                        <div>
                                            カテゴリ <img src="images/btn_require_new.gif" alt="必須">
                                        </div>
                                    </th>

                                    <td>
                                        <label><input type="radio" name="category" value="1">医療福祉</label>&nbsp;&nbsp;&nbsp;
                                        <label><input type="radio" name="category" value="2">IT</label>&nbsp;&nbsp;&nbsp;
                                        <label><input type="radio" name="category" value="3">その他</label>
                                        <span class="form_error" id="chk_category">お名前を入力してください</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div>
                                            お名前 <img src="images/btn_require_new.gif" alt="必須">
                                        </div>
                                    </th>
                                    <td>
                                        <input class="form-control col-md-5" type="text" name="name" value="" required>
                                        <span class="form_error" id="chk_name">お名前を入力してください</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div>
                                            お名前ふりがな <img src="images/btn_require_new.gif" alt="必須">
                                        </div>
                                    </th>
                                    <td>
                                        <input class="form-control col-md-5" type="text" name="kana" value="" required>
                                        <span class="form_error" id="chk_kana">お名前（カナ）を入力してください</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>生年月日</th>
                                    <td>
                                        <input class="form-control  col-md-5" type="text" name="birth_day" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>性別</th>
                                    <td>
                                        <select name="gender" class="form-control col-md-1">
                                            <option></option>
                                            <option>女性</option>
                                            <option>男性</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div>
                                            郵便番号
                                        </div>
                                    </th>
                                    <td>
                                        〒&nbsp;
                                        <input type="text" name="zip_1" size="4" maxlength="3" id="js_zip1" class="form-control col-md-1 input-inline noime require" value="" > -
                                        <input type="text" name="zip_2" size="5" maxlength="4" id="js_zip2" class="form-control col-md-1 input-inline noime require" value="" >
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div>
                                            都道府県 <img src="images/btn_require_new.gif" alt="必須">
                                        </div>
                                    </th>
                                    <td>
                                        <input class="form-control " type="text" name="state" value="" required>
                                        <span class="form_error" id="chk_state">州を入力してください</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div>
                                            市区町村 <img src="images/btn_require_new.gif" alt="必須">
                                        </div>
                                    </th>
                                    <td>
                                        <input class="form-control " type="text" name="city" value="" required>
                                        <span class="form_error" id="chk_city">都市を入力してください。</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>番地以下</th>
                                    <td>
                                        <input class="form-control" type="text" name="address" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div>
                                            電話番号 <img src="images/btn_require_new.gif" alt="必須">
                                        </div>
                                    </th>
                                    <td>
                                        <input class="form-control col-md-5" type="text" name="tel" value="" required>
                                        <span>（半角数字）例：03-6911-3010</span>
                                        <span class="form_error" id="chk_tel">電話番号を入力してください</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>メールアドレス</th>
                                    <td>
                                        <input class="form-control col-md-5" type="text" name="mail" value="">
                                        <span class="form_error" id="chk_mail">メールアドレスの書式を確認してください</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>希望案件</th>
                                    <td>
                                        <a class="btn btn-info" href="#">案件検索</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>内容（ご希望の職種・勤務地・条件など）例文：紹介希望</th>
                                    <td>
                                        <input class="form-control" type="text" name="content" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div>
                                            個人情報について <img src="images/btn_require_new.gif" alt="必須">
                                        </div>
                                    </th>
                                    <td>
                                        <label>
                                            <input type="radio" name="consent" value="0">
                                            同意しない
                                        </label>
                                        &nbsp;&nbsp;
                                        <label>
                                            <input type="radio" name="consent" value="1">
                                            同意する
                                        </label>
                                        <span class="form_error" id="chk_consent">個人情報について同意が無いと確認画面へは進めません</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="btn_section">
                        <a id="btn_step1" href="javascript:void(0);" class="btn btn-success" >確認画進む</a>
                    </div>
                </section>
                <h5>確認
                    <i class="fa fa-angle-right"></i>
                </h5>
                <section>
                    <div id="step2"></div>
                    <div class="btn_section">
                        <a class="btn btn-success btn_back" href="javascript:void(0);">入力画面へ戻る</a>
                        <a id="btn_step2" href="javascript:void(0);" class="btn btn-success" >確認画進む</a>
                    </div>
                </section>
                <h5>完了</h5>
                <section>
                    <div id="step3"></div>
                    <div class="btn_section">
                        <a href="/" class="btn btn-success btn-home">トップ</a>
                    </div>
                </section>
            </div>
        </main>
    </div>
</div>

<img src="/images/top-page.png" alt="ページTOPへ" onclick="topFunction()" id="myBtn" class="top-page">
<?php require_once('../js-footer.php');?>
<script type="text/javascript" src="./js/entry.js"></script>
<script type="text/javascript" src="./js/jquery.steps.js"></script>
<script type="text/javascript" src="./js/validate.js"></script>

</body>
</html>
