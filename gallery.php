<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    <title>Show images in folder</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<!--    <script src="js/gallery2.js"></script>-->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/gallery.js"></script>

<!--    <script type="text/javascript" src="js/app.js"></script>-->

<!--    agsdagv-->
    <link rel="stylesheet" type="text/css" href="css/gallery2.css">
</head>
<body>

<div id="head">
<div class="container">
    <div class="row">

<section class="row" id="albumYears">
    <button id="showAllButton">Show All</button>
    <button id="button2012">2012</button>
    <button id="button2013">2013</button>
    <button id="button2014">2014</button>
</section>

<!--<div class="gallery" id="2012">-->
<!--    <img src="img/GalleryImages/2012/img1.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2012/img2.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2012/img3.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2012/img4.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2012/img5.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2012/img6.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2012/img7.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2012/img8.jpg" alt="a picture" class="photo">-->
<!--</div>-->
<!---->
<!--<div class="gallery" id="2013">-->
<!--    <img src="img/GalleryImages/2013/img1.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2013/img2.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2013/img3.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2013/img4.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2013/img5.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2013/img6.jpg" alt="a picture" class="photo">-->
<!--</div>-->
<!---->
<!--<div class="gallery" id="2014">-->
<!--    <img src="img/GalleryImages/2014/img1.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2014/img2.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2014/img3.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2014/img4.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2014/img5.jpg" alt="a picture" class="photo">-->
<!--    <img src="img/GalleryImages/2014/img6.jpg" alt="a picture" class="photo">-->
<!--</div>-->
        <div class="item"></div>
<?php
//date_default_timezone_set("Europe/Copenhagen");
$filetype = '*.*';
$folder = 'img/GalleryImages/2012/';
$files = glob($folder.$filetype);
$filepath = glob($folder.$filetype);
//$files = scandir($folder);
$count = count($files);
//echo("<hr /> <hr /> count =". $count . "<hr />files = " . $files . "<hr />folder =" . $folder . "<hr /> filepath =" .
//    var_dump($filepath));
$sortedArray = array();
for ($i = 0; $i < $count; $i++) {
    $sortedArray[date ('YmdHis', filemtime($files[$i])) . $i] = $files[$i];
}

ksort($sortedArray);
# krsort($sortedArray);


foreach ($sortedArray as $filename) {
    echo '<img src="'.$filename.'" title="' . substr($filename,strlen($folder),strpos($filename, '.')-strlen($folder)) . '" />';
}
?>
        </div>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>-->

    </div>
</div>

</body>
</html>