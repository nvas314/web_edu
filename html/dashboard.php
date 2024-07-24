<?php session_start();
if (!isset($_SESSION['user'])){
    header('location: sign-in.php');
} ?>

<?php
$user_id=$_SESSION['user']['user_id'];

  function find_query_count($query) {
      $conn = new mysqli("localhost", "root", "", "ergasia_acropolis_db");
      $result= mysqli_query($conn,$query);
      if ($result) {
        $rowcount = $result->num_rows;
        return $rowcount;
      } else {
                return 0;
              }
    } 

  function find_quiz_grade($user_id, $quiz_id){
    $conn = new mysqli("localhost", "root", "", "ergasia_acropolis_db");
    $query="SELECT grade from quiz_grades where  user_id = '" . $user_id . "' AND quiz_id = '" . $quiz_id . "' ";
    $result= mysqli_query($conn,$query);
    if($result->num_rows==1){
      $grade=$result['grade'];
      return $grade;
    } else{
      return 0;
    }
  }
  function return_array($query) {
    //$a=array();
    $a = new SplFixedArray(27);
    $conn = new mysqli("localhost", "root", "", "ergasia_acropolis_db");
    $result= mysqli_query($conn,$query);
    while($row = $result->fetch_assoc()) {
      //array_push($a,$row['grade']);
      $a[$row['quiz_id']-1]=$row['grade'];
    }
    return $a;
  }
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head><script src="js/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/color-modes.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="ico.png">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta charset="UTF-8" />
  <title>Πρόοδος • AcropolisOnline</title>
 
 <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/headers.css" />
  <link rel="stylesheet" href="css/sidebars.css" />
  <link rel="stylesheet" href="css/carousel.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <link rel="stylesheet" href="css/btn.css" />
  <link rel="stylesheet" href="css/bg.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
    .bar1{
      background-image: url('img/blue_bar.jpg');
    }
    .bar2{
      background-image: url('img/yellow_bar.jpg');
    }
    .bar3{
      background-image: url('img/red_bar.jpg');
    }
    .bar4{
      background-image: url('img/green_bar.jpg');
    }
  </style>
</head>

<body style="padding:20px;">
	
	<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
	  <symbol id="bootstrap" viewBox="0 0 16 16">
		<title>Web Edu</title>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"></path>
	  </symbol>
	  <symbol id="home" viewBox="0 0 16 16">
		<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
	  </symbol>
	  <symbol id="speedometer2" viewBox="0 0 16 16">
		<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
		<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
	  </symbol>
	  <symbol id="table" viewBox="0 0 16 16">
		<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
	  </symbol>
	  <symbol id="people-circle" viewBox="0 0 16 16">
		<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
		<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
	  </symbol>
	  <symbol id="grid" viewBox="0 0 16 16">
		<path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
	  </symbol>
	</svg>
  <!-- ================ header ================= -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="text-secondary navbar-brand" >
          <img src="img/logo2.png" alt="Logo" />
        </a>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="index.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Αρχική
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24" style="fill: currentColor;"><use xlink:href="#speedometer2"/></svg>
                Πρόοδος
              </a>
            </li>
            <li>
              <a href="quiz.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                Κουίζ
              </a>
            </li>
            <li>
              <a href="learn.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                Υλικό
              </a>
            </li>
            <li>
              <a href="account.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                Προφίλ
              </a>
            </li>
          </ul>
        </div>
        <!-- Modified today start-->
          <?php if (isset($_SESSION['user'])): ?>  
          <a href="logout.php"><button type="button" class="btn btn-dark">Αποσύνδεση</button></a>
          <?php endif; ?>
  <!-- Modified today end-->
      </div>
    </nav>
    
  </header>

<!-- ======= tests completed - orizontia ======= -->
  
<div style="margin-top: 100px; display: flex; flex-wrap: wrap; gap:0px;">
  <div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary mb-1">
							Ολοκληρωμένα quiz <br>για αρχάριους:</div>
						<div id="total_novice" class="h5 mb-0 font-weight-bold text-gray-800">
            <?php $query = "SELECT grade FROM quiz_grades WHERE user_id = '" . $user_id . "'  AND grade>=50 AND quiz_id BETWEEN 1 AND 9";
            echo find_query_count($query);?>
            </div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary mb-1">
							Ολοκληρωμένα quiz <br>μεσαίου επιπέδου:</div>
						<div id="total_intimidtate" class="h5 mb-0 font-weight-bold text-gray-800">
            <?php $query = "SELECT grade FROM quiz_grades WHERE user_id = '" . $user_id . "' AND grade>=50  AND quiz_id BETWEEN 10 AND 18";
            echo find_query_count($query);?>
            </div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary mb-1">
							Ολοκληρωμένα quiz <br>για προχωρημένους:</div>
						<div id="total_advanced" class="h5 mb-0 font-weight-bold text-gray-800">
            <?php $query = "SELECT grade FROM quiz_grades WHERE user_id = '" . $user_id . "' AND grade>=50  AND quiz_id BETWEEN 19 AND 27";
            echo find_query_count($query);?>
            </div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary mb-1">
							Συνολικά quiz που <br> ολοκληρώθηκαν:</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">
            <?php $query = "SELECT grade FROM quiz_grades WHERE user_id = '" . $user_id . "'  AND grade>=50";
            echo find_query_count($query);?>
            </div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>  
				</div>
			</div>
		</div>
	</div>
</div>

    <div class="row">

      <!-- Content Column -->
      <div class="col-lg-6 mb-4">

          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Progression % Completed</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">Novice <span
                        id="total_bar1" class="float-right">70%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bar1" role="progressbar" style="width: 70%"
                    id="total_bar12" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Intermediate <span
                id="total_bar2" class="float-right">50%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bar2" role="progressbar" style="width: 50%"
                    id="total_bar22" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Advanced <span
                id="total_bar3" class="float-right">20%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bar3" role="progressbar" style="width: 20%"
                    id="total_bar32" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Total <span
                id="total_bar4" class="float-right">45%</span></h4>
                <div class="progress">
                    <div class="progress-bar bar4" role="progressbar" style="width: 45%"
                    id="total_bar42" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark">Average Grade %</h6>
          </div>
          <div class="card-body">
              <h4 class="small font-weight-bold">Novice <span
              id="average_bar1" class="float-right">70%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bar1" role="progressbar" style="width: 70%"
                  id="average_bar12" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Intermediate <span
              id="average_bar2" class="float-right">50%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bar2" role="progressbar" style="width: 50%"
                  id="average_bar22"  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Advanced <span
              id="average_bar3" class="float-right">20%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bar3" role="progressbar" style="width: 20%"
                  id="average_bar32" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Total <span
              id="average_bar4" class="float-right">45%</span></h4>
              <div class="progress">
                  <div class="progress-bar bar4" role="progressbar" style="width: 45%"
                  id="average_bar42" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark">Βαθμολογία ανά επίπεδο</h6>
          </div>
          <div class="card-body" id="grade_bars">
            <button type="button" class="btn btn-custom1" onclick="showgrades(1)">Novice</button>
            <button type="button" class="btn btn-custom2" onclick="showgrades(2)">Intermediate</button>
            <button type="button" class="btn btn-custom3" onclick="showgrades(3)">Advanced</button>
            <br><br><br>
              <div id="gr"></div>
              <h4 class="small font-weight-bold" id="total_levels">Total: <span
                      class="float-right" id="prgth">0%</span></h4>
              <div class="progress"  id="total_levels2">
                  <div class="progress-bar bar4" id="prgt" role="progressbar" style="width: 0%"
                      aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
      </div>
      </div>
      
    <div class="row">

      <!-- Content Column -->
      <div class="col-lg-6 mb-4" style="width:1000px;">
          <div class="card shadow mb-4 col-4" >
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Badges</h6>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="d-grid gap-3">
                <div class="row align-items-center">
              <button id="b1" type="button" class="btn btn-lg btn-custom1" data-toggle="popover" title="Completed all puzzles in novice mode" data-content="Completed after completing all the novice tests">Novice complete</button>
                </div>
              <div class="row align-items-center">
              <button id="b2" type="button" class="btn btn-lg btn-custom2" data-toggle="popover" title="Completed all puzzles in intermediate mode" data-content="Completed after completing all the intermediate tests">Intermediate complete</button>
            </div>
              <div class="row align-items-center">
              <button id="b3" type="button" class="btn btn-lg btn-custom3" data-toggle="popover" title="Completed all puzzles in advanced mode" data-content="Completed after completing all the advanced tests">Advanced complete</button>
            </div>
              <div class="row align-items-center">
              <button id="b4" type="button" class="btn btn-lg btn-custom3" data-toggle="popover" title="Finish all advanced puzzles with grade 100" data-content="Completed after completing all the advanced tests with grade 100%">Advanced master</button>
            </div>
          </div>
            </div>
          </div>
      </div>
    </div>
    </div>
      </div>
    </div>
  </header>
</main>

<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
  });
  //take grades from swl to php and pass them as JSON
  grades = JSON.parse('<?php $query = "SELECT * FROM quiz_grades WHERE user_id = '" . $user_id . "'";echo json_encode(return_array($query)); ?>');

  set_values();//set non dynamic bars


  var b = document.getElementById("grade_bars");
  var i = 0;
  function addElement(g, i, c) {//Add dynamic html for bar
    var newh = document.createElement("h4");
    newh.className = "small font-weight-bold";
    newh.id = "ppp";
    newh.innerHTML = i + ": " + g;
    var news = document.createElement("span");
    news.className = "float-right";
    var newDiv = document.createElement("div");
    newDiv.className = "progress mb-4";
    newDiv.id = "ppp";
    var newContent = document.createElement("div");
    newContent.className = "progress-bar " + c;
    newContent.style = "width: " + g;
    newh.appendChild(news);
    newDiv.appendChild(newh);
    newDiv.appendChild(newContent);
  
    var my_div = document.getElementById("gr");
    b.insertBefore(newh, my_div);
    b.insertBefore(newDiv, my_div);
  }
  
  function remove() {//Remove current bars
    for (let j = 0; j < total_questions *2 ; j++) {
      document.getElementById("ppp").remove();
    }
    i = 0;
  }
  var total_questions = 0;
  function showgrades(d) {
    remove();
    total_questions = 0;
    start=Math.floor(Object.keys(grades).length * (d-1)/3)
    finish=Math.floor(Object.keys(grades).length * d/3)
    total=0
    if (d==1) {
      c = "bar1";
    }
    else if (d==2){
      c = "bar2";
    }
    else {
      c = "bar3";
    }
    for (let i=start;i<finish;i++){
      count=i+1
      if (grades[i]==null){
        addElement("Not played", "Level " +count, c);
      }
      else{
        addElement(grades[i]+"%", "Level " +count, c);
      }
      total+=grades[i]/(Object.keys(grades).length/3);
      total=Math.floor(total);
      total_questions += 1;
    }
    if(total==99){
      total=100;//When flouring , the maximum is 99
    }
    document.getElementById("prgth").innerHTML = total + "%";
    document.getElementById("prgt").style = "width: " + total + "%";
  }

  function set_values(){  
    a=[0,0,0,0];
    s=[0,0,0,0];
    b1=1;//Novice Complete
    b2=1;//Intimidate Complete
    b3=1;//Advanced Complete
    b4=1;//Advanced master
    for (let j = 0; j < 3; j++) {
    sum=0;
    for (let i = j*9; i < j*9+9; i++) {
      sum+= +grades[i];
        console.log(a);
        console.log(s);
      if(j==0){
        if(grades[i] < 50){//if a test is not completed
          document.getElementById("b1").style.visibility = "hidden";//Remove badge
        }
        else{
          s[j] += +1;
        }
      }
      if(j==1){
        if(grades[i] < 50){
          document.getElementById("b2").style.visibility = "hidden";
        }
        else{
          s[j] += +1;
        }
      }
      if(j==2){
        if(grades[i] < 50){
          document.getElementById("b3").style.visibility = "hidden";
        }
        else{
          s[j] += +1;
        }
        if(grades[i] < 100){
          document.getElementById("b4").style.visibility = "hidden";
        }
      }
    }
    a[j] = Math.floor(sum/9);
    s[j] = s[j]*100/9;
    }
    a[3]= (a[0]+a[1]+a[2])/3;//Total average
    s[3]= (s[0]+s[1]+s[2])/3;//Total completed
    
    console.log(a);
        console.log(s);
    for(let i=0;i<4;i++){
      a[i] = Math.floor(a[i]);
      s[i] = Math.floor(s[i]);
    }
    if(a[3]==99){
      a[3]=100;
    }
    if(s[3]==99){
      s[3]=100;
    }
    
    console.log(a);
        console.log(s);

    for(let i=1;i<=4;i++){
    document.getElementById("total_bar"+i).innerHTML = s[i-1]+"%";
    document.getElementById("total_bar"+i+"2").style = "width: "+ s[i-1]+"%";//Progression % Completed values
    document.getElementById("average_bar"+i).innerHTML = a[i-1]+"%";
    document.getElementById("average_bar"+i+"2").style = "width: "+ a[i-1]+"%";//Average Grade % values
    }
  }
  </script>

<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/hexagons.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/main.js"></script>
<script src="../assets/js/color-modes.js"></script>
  
</body>

</html>