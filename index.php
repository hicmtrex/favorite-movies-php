<?php

$movies = array(
    (object)[
        'title' => 'Kill Bill',
        'genre' =>  'Action/Crime',
        'image' => 'https://i.ytimg.com/vi/c_dNIXwrbzY/maxresdefault.jpg',
        'rating' => '8.1'
    ],
    (object)[
        'title' => 'I Am Legend',
        'genre' =>  'Sci-fi/Horror',
        'image' => 'https://www.innovationwarrior.com/wp-content/uploads/1628555458_0x0.jpg',
        'rating' => '7.2'
    ],
    (object)[
        'title' => 'Wind River',
        'genre' =>  'Mystery/Thriller',
        'image' => 'https://www.afcinema.com/IMG/arton11905.jpg?1513072432',
        'rating' => '7.7'
    ],
    (object)[
        'title' => 'Inception',
        'genre' =>  'Mystery',
        'image' => 'https://c4.wallpaperflare.com/wallpaper/574/531/642/2010-inception-movie-inception-poster-wallpaper-preview.jpg',
        'rating' => '8.8'
    ],
    (object)[
        'title' => 'The Shining"',
        'genre' =>  'Horror',
        'image' => 'https://l.cimalight.io:2053/uploads/thumbs/fe68163bc-1.jpg',
        'rating' => '8.5'
    ],
    (object)[
        'title' => 'Interstellar',
        'genre' =>  'Sci-fi/Adventure ',
        'image' => 'https://www.10wallpaper.com/wallpaper/2560x1600/1501/interstellar_matthew_mcconaughey-Movie_High_Quality_Wallpaper_2560x1600.jpg',
        'rating' => '8.6'
    ],
    (object)[
        'title' => 'The Dark Knight',
        'genre' =>  'Action/Adventure',
        'image' => 'https://cdn.prime1studio.com/media/catalog/product/cache/1/image/1400x1400/17f82f742ffe127f42dca9de82fb58b1/h/d/hdmmdc-02_a19.jpg',
        'rating' => '9'
    ],
    (object)[
        'title' => 'Predestination',
        'genre' =>  'Sci-fi/Action',
        'image' => 'http://www.kissmygeek.com/wp-content/uploads/2014/12/Predestination-banner3.jpg',
        'rating' => '7.5'
    ],


);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('./view/navbar.php') ?>

    <main class="main py-3">
        <div class="container">
            <div class="row">
                <h1 class="text-center text-white">Favorite Movies</h1>
                <?php
                foreach ($movies as $movie) {
                    echo "
                  <div class='col-md-4 col-3  col-sm-12 col-lg-4 col-3 col-xl-3'>
                  <a href='#'>   
                  <div class='card shadow rounded my-3 p-2'>
                 <img style='height: 15rem'; src='$movie->image' class='card-img-top' alt='...'>
                 <div class='card-body'>  
                 <h4 class='card-title'>$movie->title</h4>
                 <h6 class='card-subtitle mb-2 text-muted'>$movie->genre</h6>
                 <p class='card-text'> <img 
                 src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/IMDB_Logo_2016.svg/2560px-IMDB_Logo_2016.svg.png' 
                  width='40px' class='me-1'
                 /> <strong>$movie->rating</strong></p>
                 </div>
                </div>
                </a>
                  </div>
                ";
                }
                ?>

            </div>
        </div>

    </main>

    <?php include('./view/footer.php') ?>
</body>

</html>