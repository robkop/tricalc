<!DOCTYPE html>
<html lang="en">

<head>
  <title>Triathlon Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <?php $page = 'vo2max'?>
</head>

<body>
  <?php include 'elements/head.php'; ?>
  <div class="container">
    <?php include 'elements/nav.php'; ?>
    <div class="row">
      <div class="jumbotron">
        <h2>Check your V0<sup>2</sup> MAX index</h2>
        <p>Calculate based on Cooper Test (full 12 minutes long test) result.</p>
        <div class="well well-lg">
          <form>
            <div class="form-group">
              <label for="cooperdist">Your Cooper Test result [m]:</label>
              <input type="numer" class="form-control" id="cooperdist" min="1" value="1500">
            </div>
          </form>
          <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#finishrow" id="showbtn">Show result</button>
        </div>
      </div>
    <div class="row">
      <div class="col-sm-12 text-center" style="display:none" id="finishrow">
        <h1>Your VO<sup>2</sup> MAX is:</h1>
        <h1 id="result"></h1>
      </div>
    </div>
    <?php include 'elements/nav.php'; ?>
    <?php include 'elements/footer.php'; ?>
  </div>
</div>
  <script src="scripts/oxy.js"></script>
</body>

</html>
