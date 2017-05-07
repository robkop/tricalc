<!DOCTYPE html>
<html lang="en">

<head>
  <title>Triathlon Calculator - converter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <?php $page = 'conv'?>
</head>

<body>
  <?php include 'elements/head.php'; ?>
  <div class="container">
    <?php include 'elements/nav.php'; ?>
    <div class="row">
      <div class="jumbotron">
        <div class="well well-lg">
          <form>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="opt1" value="option1">
                Speed = > Pace
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="opt2" value="option2">
                Pace = > Speed
              </label>
            </div>
          </form>
          <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#txc" id="showbtn">Show result</button>
        </div>
        <div class="well well-lg" id='txc' style="display:none">
          <form>
            <div class="form-group">
              <label for="speed">Speed [km/h]</label>
              <input type="number" class="form-control dsb3" id="speed" min="0">
            </div>
            <button type="button" class="btn btn-success" id="2next">OK</button>
          </form>
        </div>
        <div class="well well-lg" id='txd' style="display:none">
          <form>
            <div class="form-group">
              <label for="pace">Pace [min/km]</label>
              <input type="text" class="form-control dsb3" id="pace" min="0">
            </div>
            <button type="button" class="btn btn-success" id="3next">OK</button>
          </form>
        </div>
      </div>
    <div class="row" id="call1">
      <div class="col-sm-12 text-center well well-lg" style="display:none" id="paceToSpeed">
        <h1 id="result"></h1>
      </div>
      <div class="row" id="call2">
        <div class="col-sm-12 text-center well well-lg" style="display:none" id="speedToPace">
          <h1 id="result2"></h1>
        </div>
      </div>
    </div>
    <?php include 'elements/footer.php'; ?>
  </div>
</div>
  <script src="scripts/converter.js"></script>
</body>

</html>
