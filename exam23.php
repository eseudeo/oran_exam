<?
$GRADE[1] = "1학년";
$GRADE[2] = "2학년";
$GRADE[3] = "3학년";
$GRADE[4] = "4학년";
$GRADE[5] = "5학년";

$SEX[1] = "남성";
$SEX[2] = "여성";

$sql = "select * from exam_table where exam_id = '1'";
$result = sql_query($sql);
$row=sql_fetch_array($result);

print_r($row);

?>
<div style="margin-left:10px;">

<pre>23. PHP 를 병행한 예제입니다. 
	 (1) 아래 테이블의 학년, 성별 부분에 PHP 배열을 이용한 select 와 radio 를 만들려고 합니다. 반복문 안에 각 구성요소를 알맞게 넣어서 문제 22번의 같은 항목들처럼 나오게 해주세요.
	 (2) 위의 문제가 해결되면 모든 항목을 입력한 후 확인 버튼을 눌렀을 때 해당 폼을 검증하도록 해보세요.(jquery 이용)
</pre>

<br /><br />
<form method="post" id="exam_form" name="exam_form" action="<?=ORANGE_URL?>/system/exam/exam23_update.php" enctype="multipart-form/data">
<input type="hidden" name="w" id="w" value="<?=$w?>" />
<table width="50%" border=1>
<colgroup>
	<col style="width:15%" />
	<col style="width:35%" />
	<col style="width:15%" />
	<col style="width:35%" />
</colgroup>
<tr>
	<th>이름</th>
	<td><input type="text" id="name" name="name" class="input_form w100p" value="<?=$row['exam_name']?>" /></td>
	<th>학번</th>
	<td><input type="text" id="hakbun" name="hakbun" class="input_form w100p" value="<?=$row['exam_hakbun']?>" /></td>
</tr>
<tr>
	<th>학과</th>
	<td><input type="text" id="hakgua" name="hakgua" class="input_form w100p" value="<?=$row['exam_grade']?>" /></td>
	<th>학년</th>
	<td>
		<select id="grade" name="grade"><option value="">학년을 선택하세요</option>
		<?
		foreach($GRADE as $key => $data):
		echo '<option value="'.$key.'">'.$data.'</option>';
		endforeach;
		?>

</select>
	</td>
</tr>
<tr>
	<th>성별</th>
	<td>
	<?   foreach($SEX as $key => $data) { ?>
		  <input type="radio" name="sex" value="<?=$key?>"/><? echo $data;  ?>
	<?   }   ?>
	</td>
	<th>학점</th>
	<td><input type="text" id="hakjum" name="hakjum" class="input_form w100p" value="<?=$row['exam_hakjum']?>" /></td>
</tr>
</table>
<br />
<div class="center" style="width:50%;">
	<input type="submit" value="확 인" class="sng_form_btn" />
</div>

<br /><br />


</div>

<script type="text/javascript">	
var interval_on = 0;

$(document).ready(function(){   
//	1. 검증 시 위의 form 이 submit 될 때 실행되는 스크립트를 만들어주세요.
//	2. text 들은 입력여부를, select와 radio 는 선택 여부를 확인 후 submit 되도록 해주세요.
$("#grade option").each(function(){
	 if($(this).val()=="<?=$row['exam_grade']?>"){
      $(this).attr("selected","selected");
	 }
});

$("input[name=sex]").each(function(){
	 if($(this).val()=="<?=$row['exam_sex']?>"){
      $(this).attr("checked", true);
	 }
});

$( "#exam_form" ).submit(function( event ) {
	var name = $("#name").val();

	var hakbun = $("#hakbun").val();

	var hakgua = $("#hakgua").val();

	var hakjum = $("#hakjum").val();

	var sex_input = $('input[type="radio"]:checked').val();

	var grade_input =$("#grade option:selected").val();
	
	
/*	
	alert(sex_input+grade_input);
	event.preventDefault();
*/
	if(!name || !hakbun || !hakgua || !hakjum){
			event.preventDefault();
	}

	if(!sex_input || !grade_input){
		event.preventDefault();
	}

	});	
});

</script> 