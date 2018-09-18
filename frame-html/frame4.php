<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE>
<html>
<head>
    <title>frame4</title>
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
        background-color: #E0FFFF;
    }
    #a {
        width: 295px;
        height: 273px;
        background-color: #FFC0CB;
        border-radius: 132px;
        margin-top: 10px;
        margin-left: 10px;
        float: left;
    }
    #b {
        width: 130px;
        height: 130px;
        background-color: #FFA07A;
        border-radius: 66px;
        margin-top: 76px;
        margin-right: 28px;
        float: right;
    }
    #c{
        width: 222px;
        height: 207px;
        background-color: #DDA0DD;
        border-radius: 104px;
        float: right;
        margin-right: 28px;
        margin-top: -13px;
    }
    #d{
        width: 160px;
        height: 160px;
        background-color: #DAA520;
        border-radius: 81px;
        float: right;
        margin-right: 50px;
        margin-top: 26px;
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
    <div class ="x" id="a"> <input class="collage" type="file" name="" id="img1"> <img style="width: 100%; height: 100%; border-radius: 132px;"> </div>
    <div class ="x" id="b"> <input class="collage" type="file" name="" id="img2"> <img style="width: 100%; height: 100%; border-radius: 66px;"> </div>
    <div class ="x" id="c"> <input class="collage" type="file" name="" id="img3"> <img style="width: 100%; height: 100%; border-radius: 104px;"> </div>
    <div class ="x" id="d"> <input class="collage" type="file" name="" id="img4"> <img style="width: 100%; height: 100%; border-radius: 81px;"> </div>
</div>
<input id="btn-Preview-Image" type="button" value="Preview"/>
<div id="previewImage">
</body>
</html>