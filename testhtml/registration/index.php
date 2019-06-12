<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>会社概要</title>
    <?php require_once('../head.php');?>  
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="./css/reponsive.css"/>
</head>
<body>
<?php require_once('../header.php');?>
<div class="container-fluid">
    <div class="container ">
        <main>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 title-row-3">
                <h3>登録・お問い合わせフォーム</h3>
            </div>
            <div class="col-md-12">
                    <div class="tab-menu">
                            <ul>
                                <li class="active">入力 1</li> 
                                    <span>></span>
                                <li>入力 2</li>
                                    <span>></span>
                                <li>入力 3</li>
                            </ul>
                    </div>
            </div>
            <form action="#">
                <table class="table01 table_custom">
                    <tbody>
                    <tr>
                        <th>
                            <div>
                                内容 <img src="images/btn_require_new.gif" alt="内容">
                            </div>
                        </th>

                        <td>
                            <select name="content" class="form-control col-md-6 content">
                                <option></option>
                                <option>スカウト機能の利用</option>
                                <option>求人依頼</option>
                                <option>お問い合わせ</option>
                            </select>
                        </td>
                    </tr>
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
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                                会社名(団体名) <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control" type="text" name="company" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                                お名前 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control" type="text" name="firstname" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                            お名前ふりがな <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control" type="text" name="lastname" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                            募集職種 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control" type="text" name="job" value="" placeholder="例　介護" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                            必要資格 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control" type="text" name="level" value="" placeholder="例 初任者研修以上" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                            勤務時間 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control col-md-6" type="text" name="time" value="" placeholder="例 9：00～18：00" required>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            <div>
                            募集日数 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control col-md-6" type="text" name="time" value="" placeholder="例　週2日程度、曜日相談可能" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                            電話番号 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control col-md-6" type="text" name="phone" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                            メールアドレス <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control col-md-6" type="email" name="email" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                            就業先住所 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control " type="text" name="address1" value="" required>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <div>
                            所在地 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <input class="form-control " type="text" name="address2" value="" required>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            <div>
                            お問い合わせ内容 <img src="images/btn_require_new.gif" alt="必須">
                            </div>
                        </th>
                        <td>
                            <textarea class="form-control" rows="3" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>備考</th>
                        <td>
                            <textarea class="form-control" rows="3"></textarea>
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
</body>
</html>
