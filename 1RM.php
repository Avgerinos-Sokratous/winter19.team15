<?php

    include 'initSesh.php';
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Latest compiled JavaScript -->
    <script>
    $(function () {
    $("#includedContent").load("https://www.ironsky-app.com/navbarclient.php");
    });
    </script>
    <title>Ironsky Fitness</title>
    <link rel="shortcut icon" href="images/ironsky2.png" type="image/png">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        .tablefontsize {
        font-size: 16px;
        }

        .weight {
        width: 90px;
        padding: 0.3em 0 0.3em 0.3em;
        font-size: 2rem;
        }

        .reps {
        font-size: 2rem;
        padding: 8px;
        }
    </style>
</head>
<body style="background-color:#1E4072;">
    <!-- START OF NAVIGATION BAR -->

    <div id="includedContent"></div>
    <!-- END OF NAVIGATION BAR -->
    <br>
    <div class="form-gap">
        <h4 class="logo ml-4 text-white">
            I R O N S K Y<br>
            <span>FITNESS</span>
        </h4>
    </div>

    <div class="container">
  <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Estimate your 1RM</h3>
                </div>
        <div class="card-body">
  <div class="row">

    <div class="col-xs-6 table-responsive">
    <h1>These values are just for reference. Be careful!</h1>
    I did
      <input type="number" id="weight" class="weight" placeholder="Weight" pattern="[0-9]*"> for
      <select id="reps" class="reps">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      reps
    </div>
    <!--col input-->
  </div>
  <!--row input-->

  <div class="row">
    <div class="col-xs-6 table-responsive">
      <table class="table table-striped table-hover tablefontsize">
        <thead>
          <tr>
            <th>RM</th>
            <th>Average</th>
            <th><a href="http://en.wikipedia.org/wiki/One-repetition_maximum#Lombardi" target="_blank">Lombardi</a></th>
            <th><a href="http://en.wikipedia.org/wiki/One-repetition_maximum#Brzycki" target="_blank">Brzycki</a></th>
            <th><a href="http://en.wikipedia.org/wiki/One-repetition_maximum#Epley" target="_blank">Epley</a></th>
            <th><a href="http://en.wikipedia.org/wiki/One-repetition_maximum#Mayhew_et_al." target="_blank">Mayhew</a></th>
            <th><a href="http://en.wikipedia.org/wiki/One-repetition_maximum#O.27Conner_et_al." target="_blank">O'Conner</a></th>
            <th><a href="http://en.wikipedia.org/wiki/One-repetition_maximum#Wathan" target="_blank">Wathan</a></th>
            <th><a href="http://en.wikipedia.org/wiki/One-repetition_maximum#Lander" target="_blank">Lander</a></th>
          </tr>
        </thead>
        <tbody class="output">

        </tbody>

      </table>
    </div>
    <!--col table--> 
    </div>
    </div>
    <!--card-->
  </div>
  <!--row table-->
</div>
<!--container-->
</body>
</html>
<script>


$('#weight,#reps').on("keyup change", function() { //constantly fire when a weight is entered OR reps are changed, ain't nobody got time for submit buttons

  var output = $('.output'); //caching that so jQuery doesn't need to fetch it every time

  var RepMaxCalc = { //here we go

    init: function() { //the game plan
      this.getInput();
      this.calculateOneRM();
      this.calculateRMs();

    },

    getInput: function() { //read the input weight and reps

      RepMaxCalc.weight = $('#weight').val();
      RepMaxCalc.reps = $('#reps').val();

    },

    calculateOneRM: function() {

      //for all reps > 1 calculate the 1RMs    
      RepMaxCalc.lomonerm = RepMaxCalc.weight * Math.pow(RepMaxCalc.reps, 1 / 10);

      RepMaxCalc.brzonerm = RepMaxCalc.weight * (36 / (37 - RepMaxCalc.reps));
      RepMaxCalc.eplonerm = RepMaxCalc.weight * (1 + (RepMaxCalc.reps / 30));
      RepMaxCalc.mayonerm = (RepMaxCalc.weight * 100) / (52.2 + (41.9 * Math.exp(-1 * (RepMaxCalc.reps * 0.055))));
      RepMaxCalc.ocoonerm = RepMaxCalc.weight * (1 + RepMaxCalc.reps * 0.025);
      RepMaxCalc.watonerm = (RepMaxCalc.weight * 100) / (48.8 + (53.8 * Math.exp(-1 * (RepMaxCalc.reps * 0.075))));
      RepMaxCalc.lanonerm = RepMaxCalc.weight * 100 / (101.3 - 2.67123 * RepMaxCalc.reps);

      RepMaxCalc.avgonerm = (RepMaxCalc.lomonerm + RepMaxCalc.brzonerm + RepMaxCalc.eplonerm + RepMaxCalc.mayonerm + RepMaxCalc.ocoonerm + RepMaxCalc.watonerm + RepMaxCalc.lanonerm) / 7;

      output.empty(); //empty the table from previous outputs (needed because we continuously detect new inputs, which would lead to recalculations being added to the bottom of the table)

      // If reps = 1 display the entered weight as 1RM (instead of the >1RM results that some formulas give)
      if (RepMaxCalc.reps == 1) {

        output.append('<tr><td>' + '1RM' + '</td><td><strong>' + RepMaxCalc.weight + '</strong></td><td>' + RepMaxCalc.weight + '</td><td>' + RepMaxCalc.weight + '</td><td>' + RepMaxCalc.weight + '</td><td>' + RepMaxCalc.weight + '</td><td>' + RepMaxCalc.weight + '</td><td>' + RepMaxCalc.weight + '</td><td>' + RepMaxCalc.weight + '</td></tr>').find("td").css("font-size", "120%");
      } else {
        //append the 1RMs to the table, row by row
        output.append('<tr><td>' + '1RM' + '</td><td><strong>' + Math.floor(RepMaxCalc.avgonerm) + '</strong></td><td>' + Math.floor(RepMaxCalc.lomonerm) + '</td><td>' + Math.floor(RepMaxCalc.brzonerm) + '</td><td>' + Math.floor(RepMaxCalc.eplonerm) + '</td><td>' + Math.floor(RepMaxCalc.mayonerm) + '</td><td>' + Math.floor(RepMaxCalc.ocoonerm) + '</td><td>' + Math.floor(RepMaxCalc.watonerm) + '</td><td>' + Math.floor(RepMaxCalc.lanonerm) + '</td></tr>').find("td").css("font-size", "120%");
      }
    },

    calculateRMs: function() {

      // calculate RMs 2-10 and append it to the table
      var i = 2;
      for (i; i <= 10; i++) {

        RepMaxCalc.lomrm = Math.floor(RepMaxCalc.lomonerm / (Math.pow(i, 1 / 10)));
        RepMaxCalc.brzrm = Math.floor((RepMaxCalc.brzonerm * (37 - i)) / 36);
        RepMaxCalc.eplrm = Math.floor(RepMaxCalc.eplonerm / ((1 + (i / 30))));
        RepMaxCalc.mayrm = Math.floor((RepMaxCalc.mayonerm * (52.2 + (41.9 * Math.exp(-1 * (i * 0.055))))) / 100);
        RepMaxCalc.ocorm = Math.floor((RepMaxCalc.ocoonerm / (1 + i * 0.025)));
        RepMaxCalc.watrm = Math.floor((RepMaxCalc.watonerm * (48.8 + (53.8 * Math.exp(-1 * (i * 0.075))))) / 100);
        RepMaxCalc.lanrm = Math.floor(((RepMaxCalc.lanonerm * (101.3 - 2.67123 * i)) / 100));

        RepMaxCalc.avgrm = Math.floor((RepMaxCalc.lomrm + RepMaxCalc.brzrm + RepMaxCalc.eplrm + RepMaxCalc.mayrm + RepMaxCalc.ocorm + RepMaxCalc.watrm + RepMaxCalc.lanrm) / 7);

        //append the RMs to the table, row by row
        output.append('<tr><td>' + i + 'RM' + '</td><td><strong>' + RepMaxCalc.avgrm + '</strong></td><td>' + RepMaxCalc.lomrm + '</td><td>' + RepMaxCalc.brzrm + '</td><td>' + RepMaxCalc.eplrm + '</td><td>' + RepMaxCalc.mayrm + '</td><td>' + RepMaxCalc.ocorm + '</td><td>' + RepMaxCalc.watrm + '</td><td>' + RepMaxCalc.lanrm + '</td></tr>');
      }
    }
  }

  RepMaxCalc.init(); // initiate RepMaxCalc

});
</script>