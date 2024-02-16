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
  <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
  <div class="fullpage-message">
    <div class="content fullpage-message__content">
      <h1>Pretty URL</h1>
      <p>htaccess method</p>
      <ol>
        <li><a href="subpage/">Regular subpage</a></li>
        <li><a href="subpage/?param=true">Subpage with parameter</a></li>
        <li><a href="folder/subpage/">Regular subpage in folder</a></li>
        <li><a href="folder/subpage/?param=true">Subpage with parameter in folder</a></li>
        <li><a href="subpage.php">Bad reference to regular subpage</a></li>
        <li><a href="folder/subpage.php">Bad reference to regular subpage in folder</a></li>
        <li><a href="excluded-subpage.php">Excluded subpage (reference directly to php file)</a></li>
        <li><a href="api/excluded-subpage.php">Excluded subpage in folder (reference directly to php file)</a></li>
      </ol>
    </div>
  </div>
</body>

</html>