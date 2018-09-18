<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>choose</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script type="text/javascript" src="https://ccsqv2.dev.jp/coco-collage.js"></script>
    <link rel="stylesheet" type="text/css" href="https://ccsqv2.dev.jp/modal.css">
</head>
<body>

<a id="changeBtn">Change Layout</a>
<div id="myModal" class="modal">
	<div class="modal-content">
        <span class="close">&times;</span>
        <h1>Select a Collage Template</h1>
        <div class="frame-image">
            <a target="frame1"><img src="https://ccsqv2.dev.jp/frame-img/frame1.png" style="width: 100px; height: 100px;"></a>
            <a target="frame2"><img src="https://ccsqv2.dev.jp/frame-img/frame2.png" style="width: 100px; height: 100px;"></a>
            <a target="frame3"><img src="https://ccsqv2.dev.jp/frame-img/frame3.png" style="width: 100px; height: 100px;"></a>
            <a target="frame4"><img src="https://ccsqv2.dev.jp/frame-img/frame4.png" style="width: 100px; height: 100px;"></a>
            <a target="frame5"><img src="https://ccsqv2.dev.jp/frame-img/frame5.png" style="width: 100px; height: 100px;"></a>
            <a target="frame6"><img src="https://ccsqv2.dev.jp/frame-img/frame6.png" style="width: 100px; height: 100px;"></a>
            <a target="frame7"><img src="https://ccsqv2.dev.jp/frame-img/frame7.png" style="width: 100px; height: 100px;"></a>
            <a target="frame8"><img src="https://ccsqv2.dev.jp/frame-img/frame8.png" style="width: 100px; height: 100px;"></a>
            <a target="frame9"><img src="https://ccsqv2.dev.jp/frame-img/frame9.png" style="width: 100px; height: 100px;"></a>
            <a target="frame10"><img src="https://ccsqv2.dev.jp/frame-img/frame10.png" style="width: 100px; height: 100px;"></a>
            <a target="frame11"><img src="https://ccsqv2.dev.jp/frame-img/frame11.png" style="width: 100px; height: 100px;"></a>
            <a target="frame12"><img src="https://ccsqv2.dev.jp/frame-img/frame12.png" style="width: 100px; height: 100px;"></a>
            <a target="frame13"><img src="https://ccsqv2.dev.jp/frame-img/frame13.png" style="width: 100px; height: 100px;"></a>
            <a target="frame14"><img src="https://ccsqv2.dev.jp/frame-img/frame14.png" style="width: 100px; height: 100px;"></a>
            <a target="frame15"><img src="https://ccsqv2.dev.jp/frame-img/frame15.png" style="width: 100px; height: 100px;"></a>
        </div>
  	</div>
</div>
<div id="frame"></div>
<script type="text/javascript">
	var modal = document.getElementById('myModal');
	var btn = document.getElementById("changeBtn");
	var span = document.getElementsByClassName("close")[0];

	btn.onclick = function() {
	    modal.style.display = "block";
	}

	span.onclick = function() {
	    modal.style.display = "none";
	}

	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	$(document).ready(function(){
		$("a[target='frame1']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame1.php");
				 modal.style.display = "none";
		});
		$("a[target='frame2']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame2.php");
				 modal.style.display = "none";
		});
		$("a[target='frame3']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame3.php");
				 modal.style.display = "none";
		});
		$("a[target='frame4']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame4.php");
				 modal.style.display = "none";
		});
		$("a[target='frame5']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame5.php");
				 modal.style.display = "none";
		});
		$("a[target='frame6']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame6.php");
				 modal.style.display = "none";
		});
		$("a[target='frame7']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame7.php");
				 modal.style.display = "none";
		});
		$("a[target='frame8']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame8.php");
				 modal.style.display = "none";
		});
		$("a[target='frame9']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame9.php");
				 modal.style.display = "none";
		});
		$("a[target='frame10']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame10.php");
				 modal.style.display = "none";
		});
		$("a[target='frame11']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame11.php");
				 modal.style.display = "none";
		});
		$("a[target='frame12']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame12.php");
				 modal.style.display = "none";
		});
		$("a[target='frame13']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame13.php");
				 modal.style.display = "none";
		});
		$("a[target='frame14']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame14.php");
				 modal.style.display = "none";
		});
		$("a[target='frame15']").click(function(){
				$("#frame").load("https://ccsqv2.dev.jp/frame-html/frame15.php");
				 modal.style.display = "none";
		});
	});
</script>
</body>
</html>
