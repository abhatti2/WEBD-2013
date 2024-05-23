<?php

/*******w******** 
    
    Name: Ashbeel Bhatti
    Date: 2024-05-20
    Description: Image gallery showcasing locally stored image thumbnails and using the Luminous JavaScript library to display their respective images in full.

****************/

$config = [

    'gallery_name' => "Nature's Beauty",
    
    'local_images' => [
        [
            'filename' => 'image1.png',
            'photographer' => 'Theodoros Vryzakis',
            'url' => 'https://unsplash.com/@europeana',
            'thumbnail' => 'image1_thumbnail.png',
        ],
        [
            'filename' => 'image2.png',
            'photographer' => 'Boston Public Library',
            'url' => 'https://unsplash.com/@bostonpubliclibrary',
            'thumbnail' => 'image2_thumbnail.png',
        ],
        [
            'filename' => 'image3.png',
            'photographer' => 'Jan Kobell',
            'url' => 'https://unsplash.com/@europeana',
            'thumbnail' => 'image3_thumbnail.png',
        ],
        [
            'filename' => 'image4.png',
            'photographer' => 'Samuel Fisher',
            'url' => 'https://unsplash.com/@tepapa',
            'thumbnail' => 'image4_thumbnail.png'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
    <title>Lightbox Gallery</title>
</head>
<body>
    <h1><?php echo $config['gallery_name']; ?></h1>
    <div id="gallery">
        <?php foreach ($config['local_images'] as $image): ?>
            <div class="image">
                <a href="images/<?php echo $image['filename']; ?>">
                    <img src="images/<?php echo $image['thumbnail']; ?>" alt="<?php echo $image['filename']; ?>">
                </a>
                <h3 class="photographer"><?php echo $image['photographer']; ?></h3>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
        new LuminousGallery(document.querySelectorAll(".image a"));
    </script>
</body>
</html>
