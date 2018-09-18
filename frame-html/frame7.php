<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE>
<html>
<head>
    <title>frame7</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script type="text/javascript" src="https://cqv3.dev.jp/coco-collage.js"></script>
    <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
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
        width: 97px;
        height: 97px;
        background-color: #FFC0CB;
        float: left;
        border-bottom: solid 5px #F0F8FF;
        border-right: solid 5px #F0F8FF;
    }
    #b {
        width: 97px;
        height: 97px;
        background-color: #DDA0DD;
        float: left;
        border-right: solid 5px #F0F8FF;
        border-bottom: solid 5px #F0F8FF;
    }
    #c {
        width: 96px;
        height: 97px;
        background-color: #B0E0E6;
        float: right;
        border-bottom: solid 5px #F0F8FF;
    }
    #d {
        width: 198px;
        height: 198px;
        background-color: #FFC0CB;
        float: right;
        border-left: solid 5px #F0F8FF;
    }
    #e {
        width: 97px;
        height: 96px;
        background-color: #B0E0E6;
        float: right;
        border-bottom: solid 5px #F0F8FF;
    }
    #f {
        width: 97px;
        height: 97px;
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
    <div class ="x" id="e"> <input class="collage" type="file" > <img style="width: 100%; height: 100%;"> </div>
    <div class ="x" id="f"> <input class="collage" type="file" > <img style="width: 100%; height: 100%;"> </div>
</div>
<input id="btn-Preview-Image" type="button" value="Preview"/>
<div id="previewImage">
</body>
</html>