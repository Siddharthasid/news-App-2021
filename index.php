<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News App | Implementing Google API</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
        $url = 'http://newsapi.org/v2/everything?q=tesla&from=2021-01-19&sortBy=publishedAt&apiKey=c0849ebc50ad44faac081a5600ce2f89';   
        
        $response = file_get_contents($url);

        $newsData = json_decode($response);
    ?>

    <div class="jumbotron text-center myju">
    
        <h1>News App</h1>
        <h6> - By Implementing Google News API - </h6>
    
    </div>

    <div class="container-fluid">
        <?php
        
        foreach($newsData->articles as $news){    
        ?>
        <div class="row newsgrid">
            <div class="col-md-3">
                <img src="<?php echo $news->urlToImage ?>" alt="News Thumbnail" class="rounded">
            </div>

            <div class="col-md-9">
                <h2>Title : <?php echo $news->title ?> </h2>
                <h5>Description : <?php echo $news->description ?> </h5>
                <p>Content : <?php echo $news->content ?> </p>
                <h6>Author : <?php echo $news->author ?> </h6>
                <h6>Published : <?php echo $news->publishedAt ?> </h6>
            </div>
        </div>

        <?php
            }
        ?>

    </div>



    <div class="bg-dark text-white text-center mt-3 p-5 myfoot">
    <h5 class="card-title">Created and Designed by - <span>Siddhartha Sarkar.</span></h5>
    </div>
    



</body>
</html>