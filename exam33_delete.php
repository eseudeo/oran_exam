<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<?
	$connect_db = @mysqli_connect("localhost", "id", "pw") or die('MySQL Connect Error!!!');
	$select_db  = @mysqli_select_db($connect_db, "db_name") or die('MySQL DB Error!!!');
	
	$id = $_GET[id];

	$pw_sql =  "SELECT password FROM exam_board WHERE id='$id'";
	$result = mysqli_query($connect_db, $pw_sql);
	$row = mysqli_fetch_assoc($result);

	$pw_frm = $_POST['pw'];
	$pw_db = $row['password'];

	if(!$pw_frm==""){
		$del_sql = "DELETE FROM exam_board WHERE password='$pw_db' ";
		mysqli_query($connect_db, $del_sql);
		echo ("<meta http-equiv='Refresh' content='0; URL=exam33.php'>");
		mysql_close($connect_db); 

	}
?> 

<h2>글 삭제</h2>
<div>
	<form id="pw_frm" name="pw_frm" method="post">
		<div>
		<b>작성자만 글을 삭제할 수 있습니다. </b>
		</div>
		<div>
		비밀번호
		<input type="password" name="pw" id="pw">
		<input type="submit" value="확인" id="check">
		</div>
	</form>
</div>

<script type="text/javascript">

$(document).ready(function() { 
	var $pw_db = "<? echo $pw_db ?>";
	$('#pw_frm').submit(function(){ 
		if($('#pw').val()=='') { 
			alert("비밀번호를 입력해주세요!");
			event.preventDefault();
			return false;
		}
		if ($('#pw').val() != $pw_db)
		{
			alert("비밀번호가 일치하지 않습니다!");
			event.preventDefault();
			return false;
		}
		if ($('#pw').val() == $pw_db)
		{	
			alert("게시글이 삭제되었습니다!");
			return true;
		}
	});
});
</script> 