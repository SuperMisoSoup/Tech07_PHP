<html>
<head>
<meta charset="utf-8">
<title>POST入力</title>
<link rel="stylesheet" href="css/test.css"/>
</head>
<body>
<form action="write.php" method="post"> <!-- アクションが起きたらwrite.phpに飛ばす -->
	<p>◆お名前：<input type="text" name="name"></p>
	<p>◆MAIL：<input type="text" name="mail"></p>
	<p>
		◆参加回数：
		<input type="radio" id="contactChoice1" name="contact" value="first" />
      	<label for="contactChoice1">初めて</label>

 	    <input type="radio" id="contactChoice2" name="contact" value="second" />
    	<label for="contactChoice2">2回目</label>

	    <input type="radio" id="contactChoice3" name="contact" value="more tha three times" />
    	<label for="contactChoice3">3回以上</label>
	</p>
	<p>◆10段階評価：<input id="p_input" name="hyouka" type="range" min="1" max="10" step="1" /><output id="value"></output></p>

	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>

<script>
	const value = document.querySelector("#value");
	const input = document.querySelector("#p_input");
	value.textContent = input.value;
	input.addEventListener("input", (event) => {
		value.textContent = event.target.value;
	});
</script>

</html>