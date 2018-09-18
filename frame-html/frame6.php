<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE>
<html>
<head>
    <title>frame6</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script type="text/javascript" src="https://ccsqv2.dev.jp/coco-collage.js"></script>
    <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
</head>
<style type="text/css">
    #img {
        width: 500px;
        height: 500px;
        border: 1px solid;
        margin-left: auto;
        margin-right: auto;
    }
    #a {
        width: 500px;
        height: 250px;
        background-color: #FFC0CB;
        float: left;
        border-bottom: solid 5px #F0F8FF;
    }
    #b{
        width: 164px;
        height: 245px;
        background-color: #DDA0DD;
        float: right;
        border-left: solid 5px #F0F8FF;
    }
    #c{
        width: 163px;
        height: 245px;
        background-color: #B0E0E6;
        float: right;
        border-left: solid 5px #F0F8FF;
    }
    #d{
        width: 163px;
        height: 245px;
        background-color: #FFA07A;
        float: right;
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
    <div class ="x" id="d"> <input class="collage" type="file" > <img style="width: 100%; height: 100%;"> </div>
</div>
<input id="btn-Preview-Image" type="button" value="Preview"/>
<div id="previewImage">
</body>
</html>