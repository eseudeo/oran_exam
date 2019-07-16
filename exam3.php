<?
?>

<pre>3. 아래 왼쪽의 펭귄 이미지를 클릭 시, 튤립 이미지로 바뀌도록 스크립트를 작성해보세요.(튤립의 파일경로는 image/Tulips.jpg 사용)</pre>


<img src="image/Penguins.jpg" id="penguin" width="200px" onclick="image_change();" />



<script type="text/javascript">

function image_change() {
	document.getElementById("penguin").src="image/Tulips.jpg";
}
</script>