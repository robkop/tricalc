<!DOCTYPE html>
<html lang="en">

<head>
  <title>Triathlon Calculator - VO2MAX</title>
  <?php include 'elements/header.php'; ?>
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
              <input type="number" class="form-control" id="cooperdist" min="1">
            </div>
          </form>
          <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#finishrow" id="showbtn">Show result</button>
        </div>
      </div>
    <div class="row" id="call">
      <div class="col-sm-12 text-center well well-lg" style="display:none" id="finishrow">
        <h1>Your VO<sup>2</sup> MAX is:</h1>
        <h1 id="result"></h1>
      </div>
    </div>
    <?php include 'elements/footer.php'; ?>
  </div>
</div>
  <script src="scripts/oxy.js"></script>
</body>

</html>
