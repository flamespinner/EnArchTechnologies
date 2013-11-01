<!DOCTYPE php>
<html>
<head>
    <title>EnArch Technologies | Home</title>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .cap  {width:190px;height:240px;display:inline-block;background:white url(resources/images/slider/caption1.gif) no-repeat 0 0;border-radius:4px;}
        .cap2 {background-image:url(resources/images/slider/caption2.gif)}
        .cap3 {background-image:url(resources/images/slider/caption3.gif)}
        .cap4 {background-image:url(resources/images/slider/caption4.gif)}
    </style>
</head>
<body>
    <div class="div1"><h1>EnArch Technologies</h1>
        <br />
    </div>

    <div id="sliderFrame">
        <div id="slider">
            <a href="http://www.menucool.com/"><img src="resources/images/slider/slider-1.jpg" alt="#htmlcaption1" /></a>
            <a class="lazyImage" href="resources/images/slider/slider-2.jpg" title="#htmlcaption2">slide 2</a>
            <a href="http://www.menucool.com/javascript-image-slider">
                <b data-src="resources/images/slider/slider-3.jpg" data-alt="#htmlcaption3">Image Slider</b>
            </a>
            <a class="lazyImage" href="resources/images/slider/slider-4.jpg" title="#htmlcaption4">slide 4</a>
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb"><img src="resources/images/slider/thumb-1.gif" /></div>
            <div class="thumb"><img src="resources/images/slider/thumb-2.gif" /></div>
            <div class="thumb"><img src="resources/images/slider/thumb-3.gif" /></div>
            <div class="thumb"><img src="resources/images/slider/thumb-4.gif" /></div>
        </div>
        <!--captions-->
        <div style="display: none;">
            <div id="htmlcaption1">
                <div class="cap"></div>
            </div>
            <div id="htmlcaption2">
                <div class="cap cap2"></div>
            </div>
            <div id="htmlcaption3">
                <div class="cap cap3"></div>
            </div>
            <div id="htmlcaption4">
                <div class="cap cap4"></div>
            </div>
        </div>
    </div>


    <div class="div2">
    </div>
</body>
</html>
