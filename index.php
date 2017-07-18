<?php

require("lib/calendar.php");
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Bootstrap -->
  <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css?ver=1" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="style.css?ver=1">
  <title>HOYA</title>
</head>
  <body>

    <div class="container">
      <header class="jumbotron text-center">
        <a href="index.php"><img src="logo.png" alt="LOGO" class="img-rounded" id="logo"></a>
        <h1 color=red>HOME</h1>
      </header>

      <nav>
        <ul class="nav nav-pills nav-tabs nav-stacked nav-justified">
          <li class="btn-Lavender"><a href="index.php">달력</a></li>
          <li class="btn-LightBlue"><a href="index.php?id=1">가스</a></li>
          <li class="btn-LemonChiffon"><a href="index.php?id=2">전기</a></li>
        </ul>
      </nav>
<?php
if($_GET['id']==null){
  crd($s);

}
else if($_GET['id']==1) {
  echo "gas";
}
else if($_GET['id']==2) {
  echo "elec";
}
 ?>
    </div>

  </body>
</html>
