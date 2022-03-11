<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/head.php" ?>

    <title>Flame's Website: Contact</title>

    <link rel="stylesheet" href="/css/contact.css" />

  </head>
  <body>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/topbar.html" ?>
    <div class="main">
      <div class="main-container">
          <div class="contacts">
              <div class="section" id="email">
                  <h2>E-Mail</h2>
                  <ul>
                      <li>flame@deflame.xyz</li>
                      <li>business@deflame.xyz</li>
                      <li>copyright@deflame.xyz</li>
                  </ul>
              </div>
              <div class="section" id="social">
                  <h2>Social</h2>
                  <ul>
                    <li>
                        <a class="facebook" href="/contact#social" target="_blank" rel="noopener noreferrer">
                            <div class="i-wrapper">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <p>Facebook</p>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="//twitter.com/DeFlame36" target="_blank" rel="noopener noreferrer">
                            <div class="i-wrapper">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <p>Twitter</p>
                        </a>
                    </li>
                    <li>
                        <a class="instagram" href="/contact#social" target="_blank" rel="noopener noreferrer">
                            <div class="i-wrapper">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <p>Instagram</p>
                        </a>
                    </li>
                    <li>
                        <a class="github" href="//github.com/Flame36" target="_blank" rel="noopener noreferrer">
                            <div class="i-wrapper">
                                <i class="fab fa-github"></i>
                            </div>
                            <p>Github</p>
                        </a>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
    </div>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php" ?>
  </body>
</html>