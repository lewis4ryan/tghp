<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>会社概要</title>
    <?php require_once('../head.php');?>
    <link rel="stylesheet" href="./css/index-top.css"/>
    <link rel="stylesheet" href="./css/smart-top.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
<?php require_once('../header.php');?>
<div class="container-fluid">
    <div class="container ">
        <main>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 title-row-3">
                <h3> 会社概要</h3>
            </div>
            <p align="center"><img src="images/img_flow01.png" alt="入力"></p>
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
                            <label><input type="radio" name="sex" value="2">医療福祉</label>&nbsp;&nbsp;&nbsp;
                            <label><input type="radio" name="sex" value="2">IT</label>&nbsp;&nbsp;&nbsp;
                            <label><input type="radio" name="sex" value="2">その他</label>
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
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                                お名前ふりがな <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control col-md-5" type="text" name="pre_name" value="" required>
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
                            <input type="text" name="zip_1" size="4" maxlength="3" id="js_zip1" class="form-control col-md-1 noime require" value="" > -
                            <input type="text" name="zip_2" size="5" maxlength="4" id="js_zip2" class="form-control col-md-1 noime require" value="" >
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
                            <input class="form-control col-md-5" type="text" name="phone_number" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>
                            <input class="form-control col-md-5" type="text" name="email_address" value="">
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
                            &nbsp;&nbsp;
                            <span class="formHelp">個人情報保護方針・利用目的・取り扱いについて</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p align="center">
                    <a href="/complete.php" class="btn btn-success">確認画進む</a>
                </p>
            </form>
        </main>
    </div>
    <?php require_once('../footer.php');?>
</div>
<?php require_once('../js-footer.php');?>
<script>
    (function($) {
        $(function() {
            $('.multi-select-dd').fSelect();
        });
    })(jQuery);
</script>
</body>
</html>
