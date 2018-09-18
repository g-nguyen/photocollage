<!DOCTYPE>
<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
    <script type="text/javascript" src="https://cqv3.dev.jp/coco-collage.js"></script>
</head>
<style type="text/css">
	#img {
		width: 300px;
		height: 300px;
		border: 1px solid;
		margin-left: auto;
		margin-right: auto;
	}
	#a {
		width: 148px;
		height: 300px;
		background-color: #FFC0CB;
		float: left;
	}
	#b{
		width: 147px;
		height: 147px;
		background-color: #DDA0DD;
		float: right;
	}
	#c{
		width: 147px;
		height: 148px;
		background-color: #B0E0E6;
		float: right;
		border-top: solid 5px #F0F8FF;
	}
	.x {
        position: relative;
    }
    .x img {
        display: none;
        position: absolute;
        top: 0;
    }
	.collage{
		width: 0;
		height: 0;
	}
</style>
<body>
	<div id="img">
		<div class ="x" id="a"> <input class="collage" type="file" > <img style="width: 100%; height: 100%;"> </div>
		<div class ="x" id="b"> <input class="collage" type="file" > <img style="width: 100%; height: 100%;"> </div>
		<div class ="x" id="c"> <input class="collage" type="file" > <img style="width: 100%; height: 100%;"> </div>
	</div>
	<input id="btn-Preview-Image" type="button" value="Preview"/>
	<div id="previewImage"></div>
</body>
</html>
