<script  src="http://code.jquery.com/jquery-latest.min.js"></script>

<?
echo "- 아래 html 소스에 form 과 submit 버튼을 직접 추가하여 exam31_update.php 파일로 넘길 수 있도록 수정해보세요.<br />";
echo "(기본적으로 form 이 table 및 submit 버튼을 모두 감싸고 있어야 제대로 동작합니다.)<br /><br />";

echo "- jquery 를 이용해서 추가 버튼을 눌렀을 때 테이블 마지막에 행을 추가해보세요.<br />";
echo "(추가할 행 : 학년, 학과, 연락처, 이메일 - 각각 input을 이용하여 입력창 형태로 추가)<br />";
echo "(추가된 입력창은 위의 form submit 시 입력 여부를 검사할 수 있어야 함)<br />";
echo "(처음 추가 시에는 학년,학과가 추가되고 두번째 추가시에는 연락처,이메일 이 추가되도록 하세요)<br /><br />";

?>

<form method="post" id="info_form" name="info_form" action="<?=ORANGE_URL?>/system/exam/exam31_update.php" >
<table class="info_tb" border=1 width="1000px">
	<colgroup>
		<col width="15%" />
		<col width="35%" />
		<col width="15%" />
		<col width="35%" />
	</colgroup>
	<tr>
		<th>이름</th>
		<td  id="name" name="name" value="">홍길동</td>
		<th>학번</th>
		<td id="hakbun" name="hakbun" value="">201912345</td>
	</tr>

	<tr class="info1">
      <th>학년</th>
      <td><input type="text"  id="grade" name="grade" value=""></td>
      <th>학과</th>
      <td ><input type="text" id="hakgua" name="hakgua" value=""></td>
   </tr>
   <tr class="info2">
      <th>연락처</th>
      <td><input type="text" id="tel" name="tel" value=""></td>
      <th>이메일</th>
      <td ><input type="text" id="mail" name="mail" value=""></td>
   </tr>

</table>
<br />

<input type="button" id="add_element" value="추가" />
<input type="submit" value="확 인" class="form_btn" />
</form>

<script type="text/javascript">
$(document).ready(function(){
	var flag = 0;
	$(".info1").hide();
	$(".info2").hide();

	var count = $('.info_tb tr').length;
	$('#add_element').click(function() {
		if(flag==0){
			$(".info1").show();
			flag=1;
		}
		else if(flag==1){
			$(".info2").show();
			flag = 2;
		}
		else if(flag==2){
			alert("error");
			event.preventDefault();
		}
	});

	$( "#info_form" ).submit(function(event ) {


	var grade = $("#grade").val();

	var hakgua = $("#hakgua").val();

	var tel = $("#tel").val();

	var mail = $("#mail").val();
	
	var st = "";

	if(!grade){
		st += " 학년";
		event.preventDefault();
	}
	if(!hakgua){
		event.preventDefault();
		st += " 학과";
	}

	if(!tel){
		event.preventDefault();
		st += " 연락처";
	}
	if(!mail){
		event.preventDefault();
		st += " 메일";
	}
		alert(st +="을/를 입력해주세요!");
	});

	/*
		<tbody id="add_tb"></tbody>
	var count = $('.info_tb tr').length;
	 $('#add_element').click(function() {
		 if(count==1){
		$('.info_tb > tbody:last').append('<tr><th>학년</th><td></td><th>학과</th><td></td></tr>');
		count++;
		 }
		 else if(count==2){
		$('.info_tb > tbody:last').append('<tr><th>연락처</th><td></td><th>이메일</th><td></td></tr>');
		count++;
		 }
		 else{
			 alert("error");
			event.preventDefault();	
		 }
  });

  */
});

</script>