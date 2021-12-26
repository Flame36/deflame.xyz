<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/head.php" ?>

    <title>Error <?php echo http_response_code() ?></title>

    <link rel="stylesheet" href="/css/error.css" />
  </head>
  <body>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/topbar.html" ?>
    <div class="main">
      <div class="main-container">
        <div class="error">
          <h1>Coming Soon!</h1>
          <p id="description">This page will be available soon!</p>
          <div class="button-wrapper">
            <button>
              <a href="/" class="button-text">Return home</a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php //require $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.html" ?>
  </body>
</html>