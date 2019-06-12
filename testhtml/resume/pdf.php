<?php
require_once ('libs/mdpf/vendor/autoload.php');
$html = '<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>履歴書</title>

	<style>

		.resume {
			border-collapse: collapse;
			width: 100%;
			font-family: SJIS;
		}

		tr{
			height: 30px;
		}

		td {
			height: 30px;
			border: 1px solid black;
			padding: 0 8px;
		}


		.resume th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			color: #333;
			border: 0 ;
			font-weight: normal;
		}

		.hidden{
			visibility: hidden !important;
		}

		.row_2{
			height: 60px;
		}

		.row_3{
			height: 90px;
		}

		.row_6{
			height: 180px;
		}

		.img{
			border: 0;
		}

		.img {
			padding: 0 10px 2px 10px;
		}

		.thumb{
			border: dotted 1px black;
		}



		.line, .line td{
			/*height: 3px;
			padding: 0;
			border-top: 0;
			border-bottom: 0.01rem solid black;*/
		}

		.no-top{
			border-top: 0!important;
		}

		.no-bottom{
			border-bottom: 0 !important;
		}

		.no-left{
			border-left: 0!important;
		}

		.no-right{
			border-right: 0!important;
		}

		.dotted{
			border-top: 1px dotted black !important;
		}

		.l-dotted{
			border-left: 1px dotted black!important;
		}

		.r-dotted{
			border-right: 1px dotted black!important;
		}
		.r9 td{
			border-bottom: 0;
			border-top: 1px dotted black;
		}
		.r9  td:nth-child(1){
			border-right: 1px dotted   black !important;
		}

		.r9 td:nth-child(2){
			border-left: 0 !important;
			border-right: 1px  dotted   black !important;

		}
		.r9 td:nth-child(3){
			border-left: 0 !important;
		}

		.first td{
			border-top: 0 !important;
		}

		.last td{
			border-bottom: 1px  solid black!important;
		}

		.heading  td:nth-child(1){
			border-right: 1px  dotted   black!important;
			border-bottom: double black!important;

		}

		.heading td:nth-child(2){
			border-left: 0;
			border-right: 1px  dotted   black!important;
			border-bottom: double black!important;


		}
		.heading td:nth-child(3){
			border-left: 0!important;
			border-bottom: double black!important;

		}

		.heading-line td{
			border-bottom: double black!important;
		}
	</style>
</head>
<body>
<table class="resume">
	<tr class="">
		<th>ふりがな</th>
		<th width="40"> </th>
		<th></th>
		<th></th>
		<th></th>
		<th width="130">****年 **月 **日現在</th>
	</tr>
	<tr class="r1">
		<td class="no-bottom no-right" colspan="4" rowspan="1">ふりがな</td>
		<td class="l-dotted" colspan="1" rowspan="3" align="center">男　・　女</td>
		<td class="img" colspan="1" rowspan="4" >
			<table >
				<tr>
					<td class="thumb" style="width: 110px;height: 150px">
						<p style="font-size: 10px; margin-top: 10px">
							（写真を貼る位置）<br/><br/><br/>

							1．縦  36～40mm<br/>
							　 横  24～30mm　<br/>
							2．本人単身胸から上<br/>
							3．.裏面のりづけ
							<img src="./upload/image1.jpg" />
						</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr class="r2 " >
		<td class=" dotted no-right" colspan="4" rowspan="2">氏     名</td>
	</tr>
	<tr class="r3" >
	</tr>
	<tr class="r4">
		<td colspan="1">生年月日</td>
		<td colspan="4">**** 年 ** 月 ** 日生　（満**歳）</td>
	</tr>
	<tr class="r5">
		<td class="no-bottom no-right"  colspan="1">ふりがな</td>
		<td class="no-bottom no-left" colspan="5"></td>
	</tr>
	<tr class="r6 ">
		<td class="row_3 dotted no-right" colspan="1"  >現住所　</td>
		<td class="row_3 dotted no-left" colspan="5" >（〒　***　－ ****　　）</td>
	</tr>
	<tr class="r7 ">
		<td class="" colspan="3" >（電話）</td>
		<td class="" colspan="3" >（携帯電話）</td>
	</tr>
	<tr class="r8 ">
		<td class="no-right" colspan="1" >（E-mail）</td>
		<td class="no-left" colspan="5" >**********@*********</td>
	</tr>
	<tr class="heading">
		<td class="" colspan="1" align="center">年</td>
		<td class="" colspan="1" align="center">月</td>
		<td class="" colspan="4" align="center">学歴・職歴</td>
	</tr>

	<tr class="r9 first">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 last">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
</table>
<pagebreak></pagebreak>
<table class="resume ">
	<tr class="">
		<th></th>
		<th width="40"> </th>
		<th></th>
		<th></th>
		<th></th>
		<th width="160"></th>
	</tr>
	<tr class="heading">
		<td class="" colspan="1" align="center">年</td>
		<td class="" colspan="1" align="center">月</td>
		<td class="" colspan="4" align="center">学歴・職歴</td>
	</tr>

	<tr class="r9 first">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<!---->
	<tr class="heading">
		<td class="" colspan="1" align="center">年</td>
		<td class="" colspan="1" align="center">月</td>
		<td class="" colspan="4" align="center">免許・資格</td>
	</tr>

	<tr class="r9 first">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<tr class="r9 ">
		<td class="" colspan="1" ></td>
		<td class="" colspan="1" ></td>
		<td class="" colspan="4" ></td>
	</tr>
	<!---->
	<tr class="heading-line" >
		<td class="" colspan="6" >本人希望記入欄</td>
	</tr>

	<tr class="">
		<td class="row_6" colspan="6"></td>
	</tr>
</table>
</body>
</html>';
$pdf = new mPDF('utf-8');
$pdf->WriteHTML($html);
$filename = mb_convert_encoding("resume.pdf", 'UTF-8');
$pdf->Output($filename,'I');
?>
