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
            <p align="center"><img src="/step/images/img_flow01.png" alt="入力"></p>
            <div id="step3">エラーが発生しました。</div>
            <div class="btn_section">
                <a href="/" class="btn btn-success btn-home">トップ</a>
            </div>
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