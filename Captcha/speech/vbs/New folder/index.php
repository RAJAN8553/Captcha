<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
</head>.
<body>

	<input type="text" name="text">
	<a href="#" class="say">Say</a>
	<audio src="" class="saeech" hidden></audio>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	$(function(){
		$('a.say').on('click',function(e){
			e.preventDefault();
			var text= $('input[name="text"]').val();
			text=encodeURLComponent(text);
			console.log(text);
			var url="https://translate.google.com/translate_tts?ie=UTF-8&q="+text+&tl=en";
			$('audio').attr('src',url).get(0).play();
		});
	});
	</body>
	</html>