<?php
require_once ('libs/mdpf/vendor/autoload.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/config/sendmail.php');

$row1 = $row2 = $row3 = $img_file = '';
$is_send_mail = $is_print = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['resume_action']) && $_POST['resume_action'] === 'send_mail'){
        $is_send_mail = true;
    }

    $is_print = true;
    $phonetic = isset($_POST['phonetic']) ? $_POST['phonetic'] : '';
    $phonetic_3 = isset($_POST['phonetic_3']) ? $_POST['phonetic_3'] : '';
    $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
    $address = isset($_POST['address']) ? nl2br($_POST['address']) : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $hope = isset($_POST['hope']) ? nl2br($_POST['hope']) : '';

    $birth_date_year = isset($_POST['birth_date_year']) && !empty($_POST['birth_date_year']) ? $_POST['birth_date_year'] : '&nbsp;&nbsp;&nbsp;&nbsp;';
    $birth_date_month = isset($_POST['birth_date_month']) && !empty($_POST['birth_date_month']) ? $_POST['birth_date_month'] : '&nbsp;&nbsp;';
    $birth_date_day = isset($_POST['birth_date_day']) && !empty($_POST['birth_date_day']) ? $_POST['birth_date_day'] : '&nbsp;&nbsp;';

    $birth_age = isset($_POST['birth_age']) && !empty($_POST['birth_age']) ? $_POST['birth_age'] : '&nbsp;&nbsp;';

    $address_filter = isset($_POST['address_filter']) && !empty($_POST['address_filter']) ? $_POST['address_filter'] : '〒';
    $gender = isset($_POST['gender'])? $_POST['gender'] : '';

    $img_file = isset($_POST['img_64'])? $_POST['img_64'] : '';

    foreach(['row1'=>15,'row2'=>8,'row3'=>8] as $row=>$num){
        for ( $i = 1; $i <= $num; $i++) {
            $class = ($i == 1) ? 'first': ($i == $num ? 'last':'');
            $year = (isset($_POST[$row][$i]) && isset($_POST[$row][$i]['year'])) ? $_POST[$row][$i]['year'] : '';
            $month = (isset($_POST[$row][$i]) && isset($_POST[$row][$i]['month'])) ? $_POST[$row][$i]['month'] : '';
            $academic = (isset($_POST[$row][$i]) && isset($_POST[$row][$i]['academic'])) ? $_POST[$row][$i]['academic'] : '';
            ${$row} .= "<tr class='r9 $class'>";
            ${$row} .="<td colspan='1' align='center'>$year</td>
            <td colspan='1' align='center'>$month</td>
            <td colspan='4' >$academic</td>
        </tr>";
        }
    }

    error_reporting(0 );
    ob_start();
    include('print.php');
    $html = ob_get_contents();
    ob_end_clean();
    $pdf = new mPDF('utf-8');
    $pdf->WriteHTML($html);
    $file_name = '履歴書.pdf';

    if($is_send_mail){
        $attachment = "upload/temp/".$file_name;
        if (file_exists($attachment)){
            unlink($attachment);
        }
        $pdf->Output($attachment,'F');

    }else{
        $pdf->Output($file_name,'I');
    }

    if($is_send_mail){
        $title = '履歴書作成のお知らせ';
        $body .= $surname.' 様が履歴書を作成されました。<br/>';
        $body .= '氏名: '.$surname.'<br/>';
        $body .= '住所: '.$address.'<br/>';
        if(sendmail($title,$body, $email, $surname, $surname, $attachment)){
            echo '履歴書を作成されました。';
        }else{
            echo 'エラーが発生しました。';
        }
    }

    if (file_exists($attachment)){
        unlink($attachment);
    }
    exit;
}else{
    $phonetic = '<input name="phonetic" placeholder="">';
    $phonetic_3 = '<input id="phonetic_3" name="phonetic_3" placeholder="">';
    $surname = '<input name="surname" >';
    $address = '<textarea id="address" name="address" placeholder=""></textarea>';
    $phone = '<input name="phone" placeholder="">';
    $mobile = '<input name="mobile" placeholder="">';
    $email = '<input class="required" name="email" placeholder="sample@trust-growth.co.jp">';
    $hope = '<textarea class="row_6" name="hope" placeholder="" rows="6"></textarea>';
    $birth_date = '<input name="birth_date" placeholder="**** 年 ** 月 ** 日生　（満**歳）" >';

    $birth_date_year = '<input class="holder_center number" name="birth_date_year" placeholder="****" maxlength="4" type="number" min="0">';

    $birth_age = '**';

    $address_filter = '〒 <input id="zip" name="address_filter" placeholder="（***　－ ****)" > ';

    $place_holder = [
        'row1' =>[
            '1'=> [
                '1' => '',
                '2'=> '',
                '3'=> '&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;学&nbsp;&nbsp;&nbsp;&nbsp;歴',
            ],
            '2'=> [
                '1' => '平成23年',
                '2'=> '3月',
                '3'=> '○○高等学校卒業',
            ],
            '3'=> [
                '1' => '平成23年',
                '2' => '3月',
                '3' => '△△大学入学',
            ],
            '4'=> [
                '1' => '平成27年',
                '2' => '3月',
                '3' => '△△大学卒業',
            ],
            '5'=> [
                '1' => '',
                '2' => '',
                '3' => '',
            ],
            '6'=> [
                '1' => '',
                '2' => '',
                '3' => '&nbsp;
                        &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;職&nbsp;&nbsp;&nbsp;&nbsp;歴',
            ],
            '7'=> [
                '1' => '平成27年',
                '2'=> '4月',
                '3'=> '株式会社○○　入職 （正社員）　事務職',
            ],
            '8'=> [
                '1' => '平成29年',
                '2'=> '3月',
                '3' => '株式会社○○ 　一身上の都合にて退職',
            ],
            '9'=> [
                '1' => '平成29年',
                '2'=> '4月',
                '3'=> '介護老人保健施設△△　入職 （契約社員）　 介護職',
            ],
            '10'=> [
                '1' => '平成31年',
                '2'=> '3月',
                '3'=> '介護老人保健施設△△　 契約期間満了にて退職',
            ],
            '11'=> [
                '1' => '令和元年',
                '2'=> '5月',
                '3'=> '特別養護老人ホーム●●　入職（派遣社員）　介護職',
            ],
            '12'=> [
                '1' => '',
                '2'=> '',
                '3'=> '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	&nbsp;
			&nbsp;
		        現在に至る',
            ],
        ],
        'row2' =>[

        ],
        'row3' =>[
            '1'=> [
                '1' => '平成22年',
                '2' => '1月',
                '3' => '普通運転免許',
            ],
            '2'=> [
                '1' => '平成23年',
                '2' => '3月',
                '3' => '介護福祉士',
            ],
        ]
    ];
    foreach(['row1'=>15,'row2'=>8,'row3'=>8] as $row=>$num){
        for ( $i = 1; $i <= $num; $i++) {
            $class = ($i == 1) ? 'first': ($i == $num ? 'last':'');
            $holder1 = isset($place_holder[$row][$i])?$place_holder[$row][$i]['1']:'';
            $holder2 = isset($place_holder[$row][$i])?$place_holder[$row][$i]['2']:'';
            $holder3 = isset($place_holder[$row][$i])?$place_holder[$row][$i]['3']:'';
            ${$row} .= "<tr class='r9 $class'>";
            ${$row} .= "<td colspan='1' align='center'><input name='".$row."[$i][year]'"." placeholder='".$holder1."'></td>";
            ${$row} .= "<td colspan='1' align='center'><input name='".$row."[$i][month]'"." placeholder='".$holder2."' class='holder_center'></td>";
            ${$row} .= "<td colspan='4' ><input name='".$row."[".$i."][academic]' placeholder='".$holder3."'></td></tr>";
        }
    }
    include ('print.php');
}
?>
