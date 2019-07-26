<?
	$connect_db = @mysqli_connect("localhost", "id", "pw") or die('MySQL Connect Error!!!');
	$select_db  = @mysqli_select_db($connect_db, "db_name") or die('MySQL DB Error!!!');

	$cmt_name = $_POST['cmt_name'];
	$cmt_pw = $_POST['cmt_pw'];
	$cmt_txt = $_POST['cmt_txt'];

	$post_id= $_GET['post_id'];

	//값이 없을 때는 실행하지 않도록 처리
	if($cmt_name != ""||$cmt_pw !="" ||$cmt_txt != ""){
		$cmt_insert_query = "INSERT INTO exam_comments SET post_id='$post_id', password='$cmt_pw', author='$cmt_name', content='$cmt_txt', regdate = '".date('Y-m-d H:i:s')."' ";
		mysqli_query($connect_db, $cmt_insert_query);
	}
	echo ("<meta http-equiv='Refresh' content='0; URL=exam33_post.php?no=$post_id'>");

	?>