<!DOCTYPE html>
<html lang="en">

<head>
  <title>Triathlon Calculator - Race Day Checklist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="style/own.css">

  <?php $page = 'checklist'?>
</head>

<body>
  <?php include 'elements/head.php'; ?>
  <div class="container">
    <?php include 'elements/nav.php'; ?>
    <div class="row">
      <div class="jumbotron">
        <h3>Fill the form and print it!</h3>
        <p>Don't forget any of your tri gear! Make sure you are ready to go!</p>
        <div id="checkList" class="form-group">
          <form id="form">
             <input type="checkbox">-<input type="text">
          </form>
        </div>
        <div>
        <button id="btn" class="btn btn-success">Add</button>
        <button id="print" class="btn btn-warning">Print</button>
        </div>
      </div>
    <?php include 'elements/footer.php'; ?>
  </div>
</div>
  <script src="scripts/checklist.js"></script>
</body>

</html>
