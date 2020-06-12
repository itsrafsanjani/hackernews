<?php
$news_url = file_get_contents("data.json");
$hackernewss = json_decode($news_url, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hacker News - Tech Related Latest News</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="teal" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo white-text">Hacker News</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="search.php"> <i class="material-icons white-text">search</i></a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">
                        <h4>Hacker News</h4>
                    </a></li>
                <li><a href="#">All News</a></li>
                <li><a href="#">Latest News</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <h4 class="center">Latest Top Rated Tech News</h4>
            <h6 class="center light">(Click to view the news)</h6>
            <?php 
            foreach ($hackernewss as $hackernews){
            ?>
            <div class="col s12">
                <a href="<?php echo  $hackernews['link']; ?>" target="_blank">
                
                <div class="card teal">
                    <div class="card-content white-text">
                    <span class="badge white black-text">Votes: <?php echo  $hackernews['votes']; ?></span>
                        <p class=""><?php echo  $hackernews['title']; ?></p>
                    </div>
                </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <footer class="page-footer white">
    <div class="footer-copyright">
      <div class="container">
        Made with ❤️ by <a class="indigo-text bold" href="http://www.facebook.com/itrafsanjani">Md. Rafsan Jani</a>
      </div>
    </div>
  </footer>
    <!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>