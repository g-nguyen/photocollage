<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE>
<html>
<head>
    <title>frame5</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
    <script type="text/javascript" src="https://ccsqv2.dev.jp/coco-collage.js"></script>
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
        width: 315px;
        height: 317px;
        background-color: #FFC0CB;
        float: left;
        border-right: solid 5px #F0F8FF;
    }
    #b {
        width: 180px;
        height: 155px;
        background-color: #ADD8E6;
        float: right;
        border-bottom: solid 5px #F0F8FF;
    }
    #c {
        width: 180px;
        height: 157px;
        background-color: #DDA0DD;
        float: right;
    }
    #d {
        width: 250px;
        height: 177px;
        background-color: #ADD8E6;
        float: right;
        border-left: solid 5px #F0F8FF;
        border-top: solid 5px #F0F8FF;
    }
    #e {
        width: 245px;
        height: 177px;
        background-color: #DDA0DD;
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
    <div class ="x" id="a"> <input class="collage" type="file" name="" id="img1"> <img style="width: 100%; height: 100%;"> </div>
    <div class ="x" id="b"> <input class="collage" type="file" name="" id="img2"> <img style="width: 100%; height: 100%;"> </div>
    <div class ="x" id="c"> <input class="collage" type="file" name="" id="img3"> <img style="width: 100%; height: 100%;"> </div>
    <div class ="x" id="d"> <input class="collage" type="file" name="" id="img4"> <img style="width: 100%; height: 100%;"> </div>
    <div class ="x" id="e"> <input class="collage" type="file" name="" id="img5"> <img style="width: 100%; height: 100%;"> </div>
</div>
<input id="btn-Preview-Image" type="button" value="Preview"/>
<div id="previewImage">
</body>
</html>