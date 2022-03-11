<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/head.php" ?>

    <title>Flame's Website: Title</title>

    <link rel="stylesheet" href="/css/crypto.css" />
    <script src="/js/pgpKeys.js" defer></script>

  </head>
  <body>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/topbar.html" ?>
    <div class="main">
      <div class="main-container">
          <div class="keys">
              <div class="main">
                <h2>Current PGP key</h2>
                <p>This is my current PGP key, you can use it to email me with some extra security if you want</p>
                <div class="key-text" id="main-key-text"></div>
              </div>
          </div>
      </div>
    </div>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php" ?>
  </body>
</html>