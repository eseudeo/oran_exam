<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<style>
table {
  border-collapse: separate;
  width: 100%;
}

th {
	padding: 8px;
	background-color: #acc2d9;
	color: white;
}

.text_win {
	padding: 8px;
	text-align: left;
	border: 1px solid #ddd;
	width: 50%;
}

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
</style>

<?
	$connect_db = @mysqli_connect("localhost", "id", "pw") or die('MySQL Connect Error!!!');
	$select_db  = @mysqli_select_db($connect_db, "db_name") or die('MySQL DB Error!!!');
	
	$id = $_GET[no];

	$post_sql =  "SELECT * FROM exam_board WHERE id='$id'";
	$result = mysqli_query($connect_db, $post_sql);
	
			
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

<div id="comments">
	
</div>
	<input type="button" value="목 록" onclick="location='exam33.php'" class="frm_btn button"/>

<script type="text/javascript">
$(document).ready(function() { 

	$("#del").click(function(){ 
	
	});
});
</script>