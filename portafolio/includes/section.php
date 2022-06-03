<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/lightbox/css/lightbox.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <title>Document</title>
    
</head>
<body>

<?php 
add_shortcode('lightbox', 'ligthbox_medicart');

if( !function_exists( 'ligthbox_medicart' ) ):
    function ligthbox_medicart( $atts ){
        echo "hola";
    }
endif;   



?>


<div class="gallery">
        <a href="./source/pain/ACP & STEM CELL THERAPIES -FOR PAIN MANAGEMENT.png" data-lightbox="mygallery"><img src="./source/pain/ACP & STEM CELL THERAPIES -FOR PAIN MANAGEMENT.png" alt=""></a>
        <a href="./source/pain/ADVANCED PAIN MANAGEMENT.png" data-lightbox="mygallery"><img src="./source/pain/ADVANCED PAIN MANAGEMENT.png" alt=""></a>
        <a href="./source/pain/NCV-EMG (2 Day-Training).png" data-lightbox="mygallery"><img src="./source/pain/NCV-EMG (2 Day-Training).png" alt=""></a>
        <a href="./source/pain/Pain Management Show (3-Days Training).png" data-lightbox="mygallery"><img src="./source/pain/Pain Management Show (3-Days Training).png" alt=""></a>
    </div>

<script src="/lightbox/js/lightbox.min.js"></script>
</body>
</html>