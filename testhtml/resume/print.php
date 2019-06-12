<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>履歴書作成</title>
    <?php if(!$is_print){
        require_once('../head.php');
    } ?>
    <link rel="stylesheet" type="text/css" href="./css/step.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

<?php
if(!$is_print) {
    require_once('../header.php');
    ?>

    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 title-row-3">
                <h3>履歴書作成
                </h3>
            </div>
            <div id="example-basic">
                <h3>入力
                    <i class="fa fa-angle-right"></i>
                </h3>

                <section id="">
                    <?php require_once('form.php'); ?>
                </section>
                <h3>確認
                    <i class="fa fa-angle-right"></i>
                </h3>
                <section>
                    <div id="step2"></div>
                </section>
                <h3>完了</h3>
                <section>
                    <div id="step3"></div>
                    <div class="btn_section">
                        <a href="/" class="btn btn-success btn-home">トップ</a>
                    </div>
                </section>
            </div>
        </div>
        <?php require_once('../footer.php');?>
    </div>
    <script type="text/javascript">
        var today_y = "<?= date('Y') ?>";
        var today_m = "<?= date('m') ?>";
        var today_d = "<?= date('d') ?>";
    </script>
<?php
require_once('../js-footer.php');?>
    <script type="text/javascript" src="./js/jquery.jpostal.js"></script>
    <script type="text/javascript" src="./js/jquery.steps.js"></script>
    <script type="text/javascript" src="./js/print.js"></script>
<?php }else{
    require_once('form.php');
}
?>
</body>
</html>
