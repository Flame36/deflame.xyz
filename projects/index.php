<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/head.php" ?>

    <title>Flame's Website: Projects</title>

    <link rel="stylesheet" href="/css/projects.css" />
    <script src="/js/projects.js" defer></script>

  </head>
  <body>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/topbar.html" ?>
    <div class="main">
      <div class="main-container">
        <h1>Project list</h1>
        <ul class="projects">
            <div class="project" id="template">
                <a href="{URL}">
                    <h2>{NAME}</h2>
                    <p>{DESC}</p>
                </a>
            </div>
        </ul>
      </div>
    </div>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php" ?>
  </body>
</html>