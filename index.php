<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <title>Exercice 6</title>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center bg-dark text-white">
              <div class="col-md-12">
                  <p>
                      <?php
                      $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                      echo $number;
                      ?>
                  </p>
              </div>
          </div>
      </div>
  </body>
</html>
