<link rel="stylesheet" type="text/css" href="css/gallery.css">
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
<?php
date_default_timezone_set("Europe/Copenhagen");
$folder = 'img/2012';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);

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

<!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>-->
<script src="js/gallery.js"></script>