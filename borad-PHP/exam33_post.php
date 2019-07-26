<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<style>
.button {
  background-color: #acc2d9;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.del {
background-color: #1A5276;
}
#post {
    float: left;
    position: relative;
    margin-top: 10px;
    width: 100%;
    border-top: 2px solid #66575a;
    border-bottom: 2px solid #66575a;
}
title {
    padding: 15px 0;
    font-size: 19px;
    font-weight: 500;
    letter-spacing: -1px;
    border-bottom: 1px solid #d8d8d8;
}
#author {
    margin-top: 5px;
    font-size: 12px;
    text-align: right;
    color: #777;
}
#comments {
    float: left;
    position: relative;
    margin-top: 10px;
    width: 100%;
    border: 2px solid #66575a;
}
table {
        border-spacing: 0px 10px;
      }

 .table-row {
    background-color: #E8E8E8;
	padding: 8px;
	text-align: left;
	border-bottom: 1px solid #ddd;
  }
</style>

<?
	$connect_db = @mysqli_connect("localhost", "id", "pw") or die('MySQL Connect Error!!!');
	$select_db  = @mysqli_select_db($connect_db, "db_name") or die('MySQL DB Error!!!');
	
	$id = $_GET[no];
	
	$post_sql =  "SELECT * FROM exam_board WHERE id='$id'";
	$result = mysqli_query($connect_db, $post_sql);
	
	$cmt_select_query = "SELECT * FROM exam_comments WHERE post_id='$id' ";
	$cmt_result = mysqli_query($connect_db, $cmt_select_query);
			
	while($row = mysqli_fetch_assoc($result)){
?>
<div id = "post">

	<div id = "title">
		<h2 style="color:#1a4157;"><? echo $row['title']; ?></h2>
	</div>
	<hr />
	<div id = "author">
		<span><? echo $row['author']; ?></span>
		|
		<span><? echo $row['regdate']; ?></span>
	</div>

	<div id = "content">
		<? echo $row['content']; ?>
	</div>

	<?}?>
	</br>
</div>

	<div align = "right">
		<input type="button" value="수 정" onclick="location='exam32.php?id=<?=$id?>&edit=edit' " id="edit" class="frm_btn button"/>
		<input type="button" value="삭 제" onclick="location='exam33_delete.php?id=<?=$id?>&del=del' " id="del" class="frm_btn button del"/>
	</div>

<div id="list_comments" class="container">

	<table >
		<colgroup width="200px"></colgroup>
		<colgroup width="500px"></colgroup>
		<?
			while($cmt_row = mysqli_fetch_assoc($cmt_result)){
		?>
		<tbody class="table-row">
			<tr>
			<td><? echo $cmt_row['author'];?></td>
			<td rowspan="2"><? echo $cmt_row['content']; ?></td>
			</tr>
			<tr>
			<td><? echo $cmt_row['regdate']; ?></td>
			</tr>
		</tbody>
		<? } ?>
	</table>
</div>

<br/><br/>

<div id="">
	<form method="post" action="exam33_cmt_update.php?post_id=<?=$id?>" id="cmt_form" class="cmt_form">
		<table>
			<tr>
				<td>이름<input type="text" id="cmt_name" name="cmt_name" value=""></td>
				<td>비밀번호<input type="password" id="cmt_pw" name="cmt_pw" value=""></td>
			</tr>
			<tr>
				<td>
					<textarea id="cmt_txt" name="cmt_txt" class="text_win" value=""></textarea>
					<input type="submit" id="cmt_btn" class ="" value="등록하기">
				</td>
			</tr>
		</table>
	</form>
</div>

	<input type="button" value="목 록" onclick="location='exam33.php'" class="frm_btn button"/>

<script type="text/javascript">
$(document).ready(function() { 

	$("#cmt_form").submit(function(event){
	
		var name = $("#cmt_name").val();

		var pw = $("#cmt_pw").val();

		var content = $("#cmt_txt").val();
	
		if(name == "") {
			alert("이름를 입력해주세요.");
			$('#cmt_name').focus();
			event.preventDefault();
			return false;
		}
		if(pw == "") {
			alert("패스워드를 입력해주세요.");
			$('#cmt_pw').focus();
			event.preventDefault();
			return false;
		}
		if(content == "") {
			alert("내용을 입력해주세요.");
			$('#cmt_txt').focus();
			event.preventDefault();
			return false;
		}
	});
});
</script>