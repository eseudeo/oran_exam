<?
//$BOARD[0] ="번호|분류|제목|작성자|작성일|조회수";
$BOARD[1] ="40621|입학|2019학년도(후기) 대학원 특별전형(추가모집) 모집요강 안내|대학원교학부|2019.07.09|145";
$BOARD[2] ="40620|기타|Falling Walls Lab Seoul 2019 행사|학생처 학생과|2019.07.09|313";
$BOARD[3] ="40619|기타|[공학교육혁신센터] Flexible Device 제조공정 교육과정 교육생 모집(1, 2차)|공학교육혁신센터|2019.07.09|179";
$BOARD[4] ="40618|학사|2019학년도 2학기 순천대학교 교류 수학 안내|학사관리과|2019.07.09|60";
$BOARD[5] ="40617|기타|	'제3회 국립공원 논문공모전'|학생처 학생과|2019.07.09|80";

$BOARD[6] ="40616|기타|방역으로 인한 도서관 휴관 안내|중앙도서관 정보지원과|2019.07.09|167";
$BOARD[7] ="40615|학사|2019학년도 제2학기 충남대학교 교류 수학 안내|학사관리과|2019.07.09|64";
$BOARD[8] ="40614|학사|2019학년도 2학기 강원대학교 교류 수학 안내|학사관리과|2019.07.09|30";
$BOARD[9] ="40613|입학|전북대학교 유연인쇄전자전문대학원 2019학년도 후기 특별전형 추가 모집|공과대학혁신센터|2019.07.09|51";
$BOARD[10] ="40612|학사|일반대학원 본논문 제출 장소 공지|대학원교학부|2019.07.09|116";

$BOARD[11] ="40611|기타|건설근로자공제회 주최 제10회 사진.영상 공모전|학생처 학생과|2019.07.09|75";
$BOARD[12] ="40610|기타|2019 국립아시아문화전당 문화상품 디자인 공모전 개최|학생처 학생과|2019.07.09|89";
$BOARD[13] ="40609|교육|[LINC+]2019 하계 NCS 기반 국민연금공단 취업 지원 프로그램 모집(~07.11)|사회맞춤형산학협력선도대학육성사업단|2019.07.09|289";
$BOARD[14] ="40608|기타|(재)인천인재육성재단 2019년 제7기 인천글로벌리더십스쿨 교육생 선발|학생처 학생과|2019.07.09|101";
$BOARD[15] ="40607|교육|컴퓨터 교육 하계 방학 특강 안내(정보전산원)|정보전산원|2019.07.09|150";

$BOARD[16] ="40606|취업|2019-2학기 큰사람경력개발장학생 선발 안내 및 추가 공지|학생처 취업지원부|2019.07.08|931";
$BOARD[17] ="40605|학사|2019학년도 1학기 최종 성적 확인 안내|학사관리과|2019.07.08|1529";
$BOARD[18] ="40604|학사|2019학년도 2학기 경북대학교 교류수학 안내|학사관리과|2019.07.06|350";
$BOARD[19] ="40603|기타|[한국과학창의재단] 2019년 2학기 대학생 교육기부프로그램 참가자 모집|학생처 학생과|2019.07.05|815";
$BOARD[20] ="40602|기타|2019 서울 백제역사유적 그림, 일러스트 공모전|학생처 학생과|2019.07.05|228";
$BOARD[21] ="40601|기타|청년 참여 플랫폼 정책추진단 모집|학생처 학생과|2019.07.05|354";
$BOARD[22] ="40600|기타|강화 스토리워크 버스 투어 7월 프로그램|학생처 학생과|2019.07.05|276";
?>

<?
	$size = count($BOARD);
	$list_num = 5;
	$page_num = ceil($size/$list_num);

		if($_GET[page] && $_GET[page] > 0){
			$page = $_GET[page];
		}else{
			$page = 1;
}
?>
<colgroup width=""></colgroup>
<table>
	<colgroup width="30px"></colgroup>
    <colgroup width="30px"></colgroup>
    <colgroup width="200px"></colgroup>
    <colgroup width="50px"></colgroup>
	<colgroup width="30px"></colgroup>
	<colgroup width="30px"></colgroup>

	<tr class="head_tr">
		<th>번호</th>
		<th>분류</th>
		<th>제목</th>
		<th>작성자</th>
		<th>작성일</th>
		<th>조회수</th>
<?
	for($j=1+($page-1)* $list_num; $j<=$list_num*$page; $j++){
		list($number, $catagory, $title, $writer, $date, $count) = explode("|", $BOARD[$j]);
		if(!$BOARD[$j]){
			break;}
		else{
?>
		<tr class="content_tr">
			<td><?=$number?></td>
			<td><?=$catagory?></td>
			<td><?=$title?></td>
			<td><?=$writer?></td>
			<td><?=$date?></td>
			<td><?=$count?></td>
		</tr>
<? } } ?>


</table>
<div class="apg">
<?for ($i=1; $i<=$page_num;$i++){?>
<a href= "<?=$PHP_SELF?>?page=<?=$i?>" class="pg"><?=$i?></a>
<!--page는 변수 -->
<?}?>
</div>

<style type="text/css">
table {
  border-collapse: collapse;
  width: 100%;
}

td {  
  border: 1px solid #ddd;
  text-align: center;
}

th, td {
  padding: 10px;
}

.content_tr:hover {background-color:#f5f5f5;}

.apg{
text-align: center;

}

.pg{
text-decoration:none;
font-size: 1.5em;
font-weight: bold;
}
</style>