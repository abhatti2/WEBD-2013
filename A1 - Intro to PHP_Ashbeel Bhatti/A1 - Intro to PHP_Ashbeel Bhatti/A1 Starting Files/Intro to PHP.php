<?php

/*******w******** 
    
    Name: Ashbeel Bhatti
    Date: 2024-05-19
    Description: Dynamic image gallery using Unsplash API and locally stored images

****************/

$config = [

    'gallery_name' => "Nature's Beauty",
    
    'unsplash_categories' => ['landscape', 'flowers', 'animals', 'mountains', 'sunsets', 'trees', 'oceans', 'birds'],
    
    'local_images' => [
        [
            'filename' => 'image1.png',
            'photographer' => 'Theodoros Vryzakis',
            'url' => 'https://unsplash.com/@europeana'
        ],
        [
            'filename' => 'image2.png',
            'photographer' => 'Boston Public Library',
            'url' => 'https://unsplash.com/@bostonpubliclibrary'
        ],
        [
            'filename' => 'image3.png',
            'photographer' => 'Jan Kobell',
            'url' => 'https://unsplash.com/@europeana'
        ],
        [
            'filename' => 'image4.png',
            'photographer' => 'Samuel Fisher',
            'url' => 'https://unsplash.com/@tepapa'
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
    <title>Assignment 1</title>
</head>
<body>
    <h1><?php echo $config['gallery_name']; ?></h1>
    <div id="gallery">
        <?php foreach ($config['unsplash_categories'] as $category): ?>
            <div id="category">
                <h2><?php echo ucfirst($category); ?></h2>
                <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
            </div>
        <?php endforeach; ?>
    </div>

    <h1><?php echo count($config['local_images']); ?> Large Images</h1>
    <div id="local-images">
        <?php foreach ($config['local_images'] as $image): ?>
            <div id="local-image">
                <img src="images/<?php echo $image['filename']; ?>" alt="<?php echo $image['filename']; ?>">
                <p>
                    <a href="<?php echo $image['url']; ?>" target="_blank">
                        <?php echo $image['photographer']; ?>
                    </a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>