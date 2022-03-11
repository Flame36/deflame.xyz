<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/head.php" ?>

    <title>Flame's Website</title>

    <link rel="stylesheet" href="/css/home.css" />
  </head>

  <body>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/topbar.html" ?>
    <div class="main">
      <div class="main-container">
        <div class="main-content padded">
          <h1>Hi, I'm Flame!</h1>
          <p>
            I'm a hobbyist, (mostly) backend developer who writes bots, malware,
            multi purpose scripts and other.
            <br />
            This website is a collection of my personal projects, hosted by me
            for fun and to learn more about web developement.
          </p>
          <div class="button-wrapper">
            <button>
              <a href="/projects" class="button-text">See more</a>
            </button>
          </div>
        </div>
        <script>
          const imageDataUrl = "/data/homepageImgs.json";
        </script>
        <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/slideshow.html" ?>
      </div>
    </div>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php" ?>
  </body>
</html>
