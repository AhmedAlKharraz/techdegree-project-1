<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<!-- this code to create random color for background -->
<?php $background_colors = array('#282E33', '#25373A', '#164852', '#495E67', '#FF3838');
$rand_background = $background_colors[array_rand($background_colors)]; ?>

<body style="background: <?php echo $rand_background; ?>">

<?php include("inc/functions.php") ?>

  <div class="container">
    <div id="quote-box">
      <?php echo printQuote($quotes); ?>
    </div>
    <button id="loadQuote" style="background: <?php echo $rand_background; ?>" onclick="window.location.reload(true)" >Show another quote</button>
  </div>

</body>
</html>