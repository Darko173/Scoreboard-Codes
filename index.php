<!doctype html>
<html lang="en">
  <head>
  <link href='https://fonts.googleapis.com/css?family=Arimo:700' rel='stylesheet' type='text/css'>



    <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Arimo:700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=1024, initial-scale=1">

    <title>TU Scoreboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="all_styles/first.css">

    <style>
      .back_mage{

        
      /* opacity: 0.5; */
      /* The image used */


  /* Full height */
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  justify-content: center;
  /* opacity: 0.5; */
  

      }

    </style>


    



<html>

<head>
	
	<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
	<!-- Bootstrap -->
	<link rel="stylesheet"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- External/Custom CSS File -->
	<link href="design.css" rel="stylesheet">
	<!-- External/Custom JS Files -->
	<script type="text/javascript" src="properties.js"></script>
	<script type="text/javascript" src="cookie.js"></script>
	<script type="text/javascript" src="timer.js"></script>
</head>


<body>
		<!-- Customizing the Countdown Timer -->
  </head>
  <body>
    <div class="bg">
        
    </div>

    <?php
    include('navbar.php');
    ?>
   



   
    <?php
    
        

    include('dbconfig.php');
    $fetchdata= $database->getReference('Team1')->getValue();
    $fetchdata2= $database->getReference('Team2')->getValue();
    $fetchdata3= $database->getReference('GameName')->getValue();
    

    

    
        
            
            $page = $_SERVER['PHP_SELF'];
            $sec = "5";
        




?>

    
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
        // echo "Watch the page reload itself in 10 second!";
    ?>
    </body>
</html>

<div class="back_mage">

<div class="container_first">
    <!-- <div class="container_first_formcontrol"> -->


    <div class="jumbotron jumbotron-fluid my-0">
  <div class="container mx">
    <h1 style="text-align:center">Tezpur University Smart Scoreboard(TUSS)</h1>
    <h6 style="text-align:center">Developed by Dr. Manashita Borah and Team, 2022</h6>
    <h6 style="text-align:center">Dept. of Electrical Engineering, Tezpur University</h6> 
  </div>
</div>
    
<p id="demo"></p>

    <?php
    $model = null;
    if(is_null($model)) {
        echo "<script>alert(Data not entered')</script>";
    }
?>

<div class="decs_time">
  <p id="demo"></p>
</div>
			


<!--  <script>


















var time = <?php #echo $fetchdata2['Timer']?> ; // This is the time allowed
var saved_countdown = localStorage.getItem('saved_countdown');


if(saved_countdown == null) {
    // Set the time we're counting down to using the time allowed
    var new_countdown = new Date().getTime() + (time) *60* 1000;
    time = new_countdown;
    
    localStorage.setItem('saved_countdown', new_countdown);
} else {
    time = saved_countdown;
    
}


// Update the count down every 1 second
var x = setInterval(() => {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the allowed time
    var distance = time - now;

    // Time counter

    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    if(minutes < 10 && seconds<10) {
      document.getElementById("demo").innerHTML =  "0"+ minutes + " : " + "0" + seconds ;
			} else 

      if(minutes<10 && seconds>10)
				document.getElementById("demo").innerHTML =  "0"+ minutes + " : " + seconds ;
else 
document.getElementById("demo").innerHTML =   minutes + " : " + seconds ;
      
  document.getElementById("demo").style.color = "#808080" ;
  document.getElementById("demo").style.backgroundColor = "#eeeeee" ;
  document.getElementById("demo").style.width = "20%" ;
  document.getElementById("demo").style.margin= "auto";
  document.getElementById("demo").style.borderRadius= " 0 0 150px 150px";
        
    // If the count down is over, write some text 
    if (minutes <= 0&& seconds<=0) {
        clearInterval(x);
        localStorage.removeItem('saved_countdown');
        document.getElementById("demo").innerHTML = "00:00 ";
        
    }
}, 1000);
</script> -->


<script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "100%" 
        }
</script>

<body onload="zoom()">

<!--       
<form class="row g-3 needs-validation container_first_formcontrol form_center" novalidate>

<div class="col-md-3 center">
							<label class="timer" id="timer_minutes"></label> <br/>
							<label id="min">Minute(s)</label>
						</div>
            <div class="col-md-3">
							<label class="timer" id="timer_seconds"></label> <br/>
							<label id="sec">Second(s)</label>
						</div>


</form> -->

    
  <form class="row g-3 needs-validation container_first_formcontrol form_center" novalidate>
    

    <div class="col-md-3"> 
      <label for="validationCustom01" class="form-label">Ongoing Sport</label>
    <input class="form-control table_set" type="text" value="<?php echo $fetchdata3['GameName'] ?>" aria-label="readonly input example"readonly>

  </div>    

</form>



    <form class="row g-3 needs-validation my-2" novalidate>
    
    <div class="col-md-2 center">
          <label for="validationCustom01" class="form-label">Team 1 Name</label>
          <input class="form-control" type="text" value= "<?php echo $fetchdata['Name1'] ?>" aria-label="readonly input example" readonly>
          <div class="valid-feedback">
          </div>
        </div>
        <div class="col-md-2">
          <label for="validationCustom02" class="form-label">Team 2 Name</label>
          <input class="form-control" type="text" value="<?php echo $fetchdata2['Name2'] ?>" aria-label="readonly input example" readonly>
          <div class="valid-feedback">
            
          </div>
        </div>
      </form>
    <form class="row g-3 needs-validation my-2" novalidate>
        <div class="col-md-2">
          <label for="validationCustom01" class="form-label">Team 1 Score</label>
          <input class="form-control" type="text" value="<?php echo $fetchdata['Score1'] ?>" aria-label="readonly input example" readonly>
          <div class="valid-feedback">
            
          </div>
        </div>
        <div class="col-md-2">
          <label for="validationCustom02" class="form-label">Team 2 Score</label>
          <input class="form-control" type="text" value="<?php echo $fetchdata2['Score2'] ?>" aria-label="readonly input example" readonly>
          <div class="valid-feedback">
            
          </div>
        </div>
      </form>
      <form class="row g-3 needs-validation container_first_formcontrol form_center" novalidate>
        <div class="col-md-2">
          <label for="validationCustom01" class="form-label">Overs</label>
          <input class="form-control" type="text" value="<?php echo $fetchdata['Overs1'] ?>" aria-label="readonly input example" readonly>
          <div class="valid-feedback">
            
          </div>
        </div>
        <div class="col-md-2">
          <label for="validationCustom02" class="form-label">Overs/Sets</label>
          <input class="form-control" type="text" value="<?php echo $fetchdata2['Overs2'] ?>" aria-label="readonly input example" readonly>
          <div class="valid-feedback">
           
          </div>
        </div>
      </form>
      <form class="row g-3 needs-validation container_first_formcontrol form_center" novalidate>
        <div class="col-md-2 center">
          <label for="validationCustom01" class="form-label">WICKET</label>
          <input class="form-control" type="text" value="<?php echo $fetchdata['Wickets1'] ?>" aria-label="readonly input example" readonly>
          <div class="valid-feedback">
            
          </div>
        </div>
        <div class="col-md-2">
          <label for="validationCustom02" class="form-label">WICKET</label>
          <input class="form-control" type="text" value="<?php echo $fetchdata2['Wickets2'] ?>" aria-label="readonly input example" readonly>
          <div class="valid-feedback">
            
          </div>
        </div>
      </form> 
      
      
    <!-- </div> -->
    </div>
    </div>
<span>Page will reload itself in 5 seconds!</span>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
  
  </body>
</html>
