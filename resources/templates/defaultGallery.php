<!-- Start UberGallery <?php echo UberGallery::VERSION; ?> - Copyright (c) <?php echo date('Y'); ?> Chris Kankiewicz (http://www.ChrisKankiewicz.com) -->
<!DOCTYPE html>
<html>
    <head lang="en">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/parallax.js"></script>
        <link rel="stylesheet" href="css/parallax.css"/>
        <script type="text/javascript" src="js/app.js"></script>

        <meta charset="UTF-8">

        <title>History</title>
    </head>

    <div id="head"></div>
<div id="galleryWrapper">
    
    <?php if (!empty($images) && $stats['total_images'] > 0): ?>
        
        <ul id="galleryList" class="clearfix">
            
            <?php foreach ($images as $image): ?>
                <li><a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>" rel="<?php echo $relText; ?>"><img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>"/></a></li>
            <?php endforeach; ?>
            
        </ul>
        
    <?php else: ?>
    
        <p>No images found.</p>
    
    <?php endif; ?>
    
    
    <div id="galleryFooter" class="clearfix">

        <?php if ($stats['total_pages'] > 1): ?>
            
            <ul id="galleryPagination">
            
                <?php foreach ($paginator as $item): ?>
                    <li class="<?php echo $item['class']; ?>">
                        <?php if (!empty($item['href'])): ?>
                            <a href="<?php echo $item['href']; ?>"><?php echo $item['text']; ?></a>
                        <?php else: ?>
                            <?php echo $item['text']; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            
            </ul>
            
        <?php endif; ?>

        <div id="credit">Powered by, <a href="https://www.facebook.com/johnmartin.devera">MartiniTheGod</a></div>
        
    </div>
    
</div>
</html>
<!-- End UberGallery - Distributed under the MIT license: http://www.opensource.org/licenses/mit-license.php -->
