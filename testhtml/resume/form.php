<form target="_blank" id="resume_form" class="table-responsive" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data">
    <table class="resume ">
        <tr class="">
            <th scope="col" width="100"><h4>履歴書</h4></th>
            <th scope="col" width="50"> </th>
            <th scope="col" <?= !$is_print?'width="280"':''?>></th>
            <th scope="col" width="120"></th>
            <th scope="col" width="100"></th>
            <th scope="col" width="130" class="col-thumb" style="text-align: center; font-size: 12px">
                <?= date("Y年 m月 d日現在") ?>
            </th>
        </tr>
        <tr class="r1">
            <td class="no-bottom no-right" colspan="1" rowspan="1">ふりがな</td>
            <td class="no-bottom no-right no-left" colspan="3" rowspan="1" >
                <?= $phonetic ?>
            </td>
            <td class="l-dotted gender" colspan="1" rowspan="3" align="center">
                <?php
                if($is_print){?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <?= (isset($gender) && ($gender == 'male') )?'<img width="15px" src="./img/check1.png">':'<img width="15px" class="checkbox1" src="./img/check2.png">'?><span>男</span>
                            <?= (isset($gender) && ($gender == 'female'))?'<img width="15px" src="./img/check1.png">':'<img width="15px" class="checkbox1" src="./img/check2.png">'?><span>女</span>
                        </label>
                    </div>
                <?php }else{ ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" check="" name="gender" value="male"><span class="sex">男</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label ">
                            <input type="checkbox" class="form-check-input" check="" name="gender" value="female"><span class="sex">女</span>
                        </label>
                    </div>
                <?php }?>
            </td>
            <td class="img" colspan="1" rowspan="4" width="130">
                <table>
                    <tr>
                        <td class="thumb <?= empty($img_file)?'no_img':'has_img' ?>" style="height: 150px; " id="img_upload">
                            <?php
                            if($is_print && !empty($img_file)){
                                echo "<img id='thumb' src='".$img_file."' height='auto' width='100%' style='max-width:120px;' alt='image preview...'>";
                            }else{ ?>
                                <p id="text_thumb" style="margin-left: 3px;">
                                    （写真を貼る位置）<br/>
                                    <span class="note">クリックして、写真を導入してください<br/></span>
                                    1．縦  36～40mm<br/>
                                    　 横  24～30mm　<br/>
                                    2．本人単身胸から上<br/>
                                    3．.裏面のりづけ
                                </p>
                                <?php if(!$is_print){?>
                                    <img src="" id='thumb' src="" height="auto" alt="Image preview..." style="display:none">
                                    <input id="img_file" name="img_file" type="file" accept="image/*" style="display: none">
                                    <input id="img_64" name="img_64" type="hidden" value="" style="display: none">
                                <?php }
                            }?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="r2 " >
            <td class="dotted no-right" colspan="1" rowspan="2">氏     名</td>
            <td class="dotted no-right no-left" colspan="3" rowspan="2">
                <?= $surname ?>
            </td>
        </tr>
        <tr class="r3" ></tr>
        <tr class="r4 birthdate">
            <td colspan="1">生年月日</td>
            <td colspan="4">
                <?= $birth_date_year ?> 年
                <?php if($is_print){
                    echo $birth_date_month;
                }else{?>
                    <select class="custom_select holder_center number" name="birth_date_month">
                        <option value="">**</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                <?php }?> 月

                <?php if($is_print){
                    echo $birth_date_day;
                }else{?>
                    <select class="custom_select holder_center number" name="birth_date_day">
                        <option value="">**</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                <?php }?> 日生

                （満 <span id="old_calc"><?= $birth_age ?></span> 歳）
                <input type="hidden" name="birth_age" value="">
            </td>
        </tr>
        <tr class="r5">
            <td class="no-bottom no-right"  colspan="1">ふりがな</td>
            <td class="no-bottom no-left " colspan="5">
                <?= $phonetic_3 ?>
            </td>
        </tr>
        <tr class="r6 ">
            <td class=" dotted no-right no-bottom" colspan="1"  >現住所　</td>
            <td class=" dotted no-left no-bottom address_filter" colspan="5" >
                <?= $address_filter ?>
            </td>
        </tr>
        <tr>
            <td class="row_2 no-top" colspan="6">
                <?= $address ?>
            </td>
        </tr>
        <tr class="r7 ">
            <td class="no-right" colspan="1" >（電話）</td>
            <td class="no-left" colspan="2" >
                <?= $phone ?>
            </td>
            <td class="no-right" colspan="1" align="center">（携帯電話）</td>
            <td class="no-left" colspan="2" >
                <?= $mobile ?>
            </td>
        </tr>
        <tr class="r8 ">
            <td class="no-right" colspan="1" >（E-mail）</td>
            <td class="no-left" colspan="5" >
                <?= $email ?>
            </td>
        </tr>
        <tr class="heading">
            <td class="" colspan="1" align="center">年</td>
            <td class="" colspan="1" align="center">月</td>
            <td class="" colspan="4" align="center">学歴・職歴</td>
        </tr>
        <?= $row1 ?>
    </table>

    <pagebreak></pagebreak>

    <table class="resume ">
        <tr class="">
            <th width="100"></th>
            <th width="50"> </th>
            <th <?= !$is_print?'width="280"':''?>></th>
            <th width="120"></th>
            <th width="100"></th>
            <th width="130"></th>
        </tr>
        <tr class="heading">
            <td class="" colspan="1" align="center">年</td>
            <td class="" colspan="1" align="center">月</td>
            <td class="" colspan="4" align="center">学歴・職歴</td>
        </tr>

        <?= $row2 ?>

        <!---->
        <tr class="heading">
            <td class="" colspan="1" align="center">年</td>
            <td class="" colspan="1" align="center">月</td>
            <td class="" colspan="4" align="center">免許・資格</td>
        </tr>

        <?= $row3 ?>

        <!---->
        <tr class="heading-line">
            <td class="" colspan="6" >本人希望記入欄</td>
        </tr>

        <tr class="">
            <td class="row_6" colspan="6" style="vertical-align: top; padding-top: 5px !important">
                <?= $hope ?>
            </td>
        </tr>
    </table>
</form>
