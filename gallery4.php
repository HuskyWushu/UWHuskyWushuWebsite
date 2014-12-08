<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="resources/UberGallery.css" />
<link rel="stylesheet" type="text/css" href="resources/colorbox/1/colorbox.css" />
<script type="text/javascript" src="://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.mi
n.js"></script>
<script type="text/javascript" src="resources/colorbox/jquery.colorbox.js"></script>

</head>
<body>

<script type="text/javascript">
    $(document).ready(function(){
        $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
    });
</script>

<?php include_once('resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('/gallery-images'); ?>

    </body>
</html>