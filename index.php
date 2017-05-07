<!DOCTYPE html>
<html lang="en">

<head>
  <title>Triathlon Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <?php $page = 'home'?>
</head>

<body>
  <?php include 'elements/head.php'; ?>
  <div class="container">
    <?php include 'elements/nav.php'; ?>
    <div class="row">
    <div class="jumbotron">
        <h2>Select distance</h2>
        <div class="well well-lg">
          <form>
            <div class="radio">
              <label><input type="radio" value="1" id="a1" name="distance">1/8 IM</label>
            </div>

            <div class="radio">
              <label><input type="radio" value="1" id="a2" name="distance">1/4 IM</label>
            </div>

            <div class="radio">
              <label><input type="radio" value="3" id="a3" name="distance" checked="checked">Olimpic distance</label>
            </div>

            <div class="radio">
              <label><input type="radio" value="4" id="a4" name="distance">1/2 IM</label>
            </div>

            <div class="radio">
              <label><input type="radio" value="5" id="a5" name="distance">Full IM</label>
            </div>

            <div class="radio">
              <label><input type="radio" value="6" id="a6" name="distance">Other</label>
            </div>

            <div class="well well-lg">
              <form>
                <div class="form-group">
                  <label for="swimdistance">Swim [m]:</label>
                  <input type="numer" class="form-control" id="swimdistance" min="1" value="1500"disabled >
                </div>
                <div class="form-group">
                  <label for="bikedistance">Bike [km]:</label>
                  <input type="number" class="form-control" id="bikedistance" min="1" value="45" disabled>
                </div>
                <div class="form-group">
                  <label for="rundistance">Run [m]:</label>
                  <input type="number" class="form-control" id="rundistance" min="1" value="10" disabled>
                </div>
              </form>
            </div>
          </form>
          <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#swimtimefield" id="1next">Next</button>
        </div>
        <div class="cole-sm12 collapse" id="swimtimefield">
          <h2>Swim time</h2>
          <div class="well well-lg">
            <form>
              <div class="form-group">
                <label for="swimho">Hours:</label>
                <input type="number" class="form-control dsb3" id="swimho" min="0">
              </div>
              <div class="form-group">
                <label for="swimmin">Mintues:</label>
                <input type="number" class="form-control dsb3" id="swimmin" min="0">
              </div>
              <div class="form-group">
                <label for="swimsec">Seconds:</label>
                <input type="number" class="form-control dsb3" id="swimsec" min="0">
              </div>
              <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#biketimefield" id="2next">Next</button>
          </div>
          </form>

        </div>
        <div class="cole-sm12 collapse" id="biketimefield">
          <h2>Bike time</h2>
          <div class="well well-lg">
            <form>
              <div class="form-group">
                <label for="bikeho">Hours:</label>
                <input type="number" class="form-control" id="bikeho" min="0">
              </div>
              <div class="form-group">
                <label for="bikemin">Mintues:</label>
                <input type="number" class="form-control" id="bikemin" min="0">
              </div>
              <div class="form-group">
                <label for="bikesec">Seconds:</label>
                <input type="number" class="form-control" id="bikesec" min="0">
              </div>
              <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#runtimefield" id="3next">Next</button>
          </div>
          </form>

        </div>
        <div class="cole-sm12 collapse" id="runtimefield">
          <h2>Run time</h2>
          <div class="well well-lg">
            <form>
              <div class="form-group">
                <label for="runho">Hours:</label>
                <input type="number" class="form-control" id="runho" min="0">
              </div>
              <div class="form-group">
                <label for="runmin">Mintues:</label>
                <input type="number" class="form-control" id="runmin" min="0">
              </div>
              <div class="form-group">
                <label for="runsec">Seconds:</label>
                <input type="number" class="form-control" id="runsec" min="0">
              </div>
              <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#changetimefield" id="4next">Next</button>
          </div>
          </form>

      </div>
      <div class="cole-sm12 collapse" id="changetimefield">
        <h2>Transitions</h2>
        <div class="well well-lg">
          <h3>Swim to bike</h3>
          <form>
            <div class="form-group">
              <label for="stbmin">Minutes:</label>
              <input type="number" class="form-control" id="stbmin" min="0">
            </div>
            <div class="form-group">
              <label for="stbsec">Seconds:</label>
              <input type="number" class="form-control" id="stbsec" min="0">
            </div>
          <h3>Biket to run</h3>
          <div class="form-group">
            <label for="btrmin">Minutes:</label>
            <input type="number" class="form-control" id="btrmin" min="0">
          </div>
          <div class="form-group">
            <label for="btrsec">Seconds:</label>
            <input type="number" class="form-control" id="btrsec" min="0">
          </div>
          <button type="button" class="btn btn-success" data-target="#results" id="showfinishtime">Show results</button>
        </div>
        </form>
    </div>

    <div class="row" id="results">
      <div class="col-sm-4 well well-lg" style="display:none" id="swimresult1">
        <h3>Your estimated swim time:</h3>
        <p id="swimtimetot"></p>
        <h4>Your swim pace is:</h4>
        <p id="swimpace"></p>
      </div>

      <div class="col-sm-4 well well-lg" style="display:none" id="bikeresult1">
        <h3>Your estimated bike time</h3>
        <p id="biketimetot"></p>
        <h4>Your bike AVG speed is:</h4>
        <p id="bikepace"></p>
      </div>

      <div class="col-sm-4 well well-lg" style="display:none" id="runresult1">
        <h3>Your estimated run time:</h3>
        <p id="runtimetot"></p>
        <h4>Your run pace is:</h4>
        <p id="runpace"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 well well-lg" style="display:none" id="finishrow">
        <h1>Your estimated finish time:</h1>
        <h1 id="finishtimetot"></h1>
      </div>
    </div>
    <?php include 'elements/footer.php'; ?>
  </div>
  <script src="scripts/tricalc.js"></script>
</body>

</html>
