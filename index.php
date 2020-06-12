<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Parallax Template - Materialize</title>

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
        <li><a href="search.php"><i class="material-icons white-text">search</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#"><h4>Hacker News</h4></a></li>
        <li><a href="#">All News</a></li>
        <li><a href="#">Latest News</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center text-lighten-2">Hacker News</h1>
        <div class="row center">
          <h5 class="header col s12 light">A website where you will get latest tech news from anywhere!</h5>
        </div>
        <div class="row center">
          <a href="news.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Let's Go!</a>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="hackernews-1.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <footer class="page-footer white">
    <div class="container">
      <div class="row">
      <h4 class="mytext center">Contact Us</h4>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input id="name" type="text" class="validate">
              <label for="name">Name</label>
            </div>
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="message" class="materialize-textarea" data-length="120"></textarea>
              <label for="message">Message you want to tell us!</label>
            </div>
          </div>
          <div class="row">
            <dib class="col s12 center">
              <button type="submit" class="btn">Send Message</button>
            </dib>
          </div>
        </form>
      </div>
    </div>
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