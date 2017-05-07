<!DOCTYPE html>
<html lang="en">

<head>
  <title>Triathlon Calculator - Hints</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <?php $page = 'hints'?>
</head>

<body>
  <?php include 'elements/head.php'; ?>
  <div class="container">
    <?php include 'elements/nav.php'; ?>
    <div class="row">
      <div class="jumbotron">
        <h2 id="title"></h2>
        <p id='txt'></p>
        <button type="button" class="btn btn-success" id='btn'>Next hint</button>
      </div>
  </div>
    <?php include 'elements/footer.php'; ?>
</div>
  <script src="scripts/hints.js"></script>
</body>

</html>
