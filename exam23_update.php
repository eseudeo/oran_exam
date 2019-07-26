<?
$GRADE[1] = "1학년";
$GRADE[2] = "2학년";
$GRADE[3] = "3학년";
$GRADE[4] = "4학년";
$GRADE[5] = "5학년";

$SEX[1] = "남성";
$SEX[2] = "여성";

// 리퍼러 검사
referer_check();
/*
CREATE TABLE `exam_table` (

  `exam_id` int(11) NOT NULL COMMENT '오토아이디',
  `exam_name` varchar(50) NOT NULL DEFAULT '' COMMENT '이름',
  `exam_hakbun` varchar(50) NOT NULL DEFAULT '' COMMENT '학번',
  `exam_grade` tinyint(4) NOT NULL DEFAULT '0' COMMENT '학년',
  `exam_sex` tinyint(4) NOT NULL DEFAULT '0' COMMENT '성별',
  `exam_hakgua` varchar(50) NOT NULL DEFAULT '' COMMENT '학과',
  `exam_hakjum` float NOT NULL DEFAULT '0' COMMENT '학점',
  `exam_regdate` datetime NOT NULL DEFAULT '1971-01-01 00:00:00' COMMENT '저장일시',
  `exam_update` datetime NOT NULL DEFAULT '1971-01-01 00:00:00' COMMENT '수정일시'

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='';
*/


$update_value = 1;

if($name && $hakbun && $grade && $sex && $hakgua && $hakjum) {
	echo "이름 : ".$name."<br>";
	echo "학번 : ".$hakbun."<br>";
	echo "학년 : ".$GRADE[$grade]."<br>";
	echo "성별 : ".$SEX[$sex]."<br>";
	echo "학과 : ".$hakgua."<br>";
	echo "학점 : ".$hakjum."<br>";
	//exit;
} else {
	alert("입력되지 않은 값이 있습니다.");
}

if($w == "") {

	//$sql = "insert into exam_table values ($name, $hakbun,$grade, $sex, $hakgua, $hakjum, '2019-07-08 14:09:00')";
	$sql = "insert into exam_table set exam_name = '$name', exam_hakbun = '$hakbun', exam_grade = '$grade', exam_sex = '$sex', exam_hakgua = '$hakgua', exam_hakjum = '$hakjum', exam_regdate = '".date('Y-m-d H:i:s')."' ";
	echo $sql;
	sql_query($sql);

/*
// set 를 활용한 insert 문(컬럼 vs 변수값 형태로 저장하기 때문에 직관적)
insert into exam_table set exam_name = '$name', exam_hakbun = '$hakbun', exam_grade = '$grade', exam_sex = '$sex', exam_hakgua = '$hakgua', exam_hakjum = '$hakjum', exam_regdate = 'datetime 형태 시간값'
*/

}
//alert("입력되었습니다.", ORANGE_URL."/system/exam/exam23.php");
?>