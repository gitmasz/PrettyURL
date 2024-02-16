<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <meta name="author" content="Marcin Szczepkowski">
  <title>Pretty URL - htaccess method</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
  <link href="../css/styles.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
  <div class="fullpage-message">
    <div class="content fullpage-message__content">
      <h1>Pretty URL</h1>
      <p>htaccess method</p>
      <?php if(isset($_GET['param']) && $_GET['param']=='true'){ ?>
        <p>PHP page with parameter localized in the same directory as index file.</p>
      <?php } else { ?>
        <p>PHP page localized in the same directory as index file.</p>
      <?php } ?>
      <p><a href="../">back</a></p>
    </div>
  </div>
</body>

</html>