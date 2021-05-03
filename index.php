<?php
  $text = "Lorem ipsum dolor sit, amet consectetur adipisicing strunz. A vero aperiam error.";
  $bad_word = "strunz";
  $censored_text = str_replace("strunz", "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
  </head>
  <body>
    <h1>Badwords</h1>
    <p><?php echo $censored_text ?></p>
    <h5>La lunghezza del paragrafo è di <?php echo strlen($censored_text) ?> caratteri</h5>
  </body>
</html>