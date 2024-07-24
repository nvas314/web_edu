<?php
session_start();
if ($_SESSION['user']['current_level']<3){
  header('Location: ../quiz.php?msg3=user_level_error');

} ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Προχωρημένο επίπεδο quiz</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="../../ico.png">
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/btn.css" />

    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.122.0" />
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../../assets/js/color-modes.js"></script>
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/examples/sidebars/"
    />
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Lesson 1 / Advanced</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />
    <style>
      header {
        background-image: url('../img/red.jpg');
      }
      .card-header{
        background-image: url('../img/red_light.jpg');
      }
    </style>
  </head>
  <body data-spy="scroll" data-target="#navbar-example3" data-offset="20">
    <div class="container-fluid">
      <div class="row">
        <header class="py-3 mb-3 fixed-top">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <span class="fs-4">Προχωρημένο επίπεδο quiz</span>
            <div>
              <a href="../quiz.php"><button type="button" class="btn btn-outline-dark float-right">Επιστροφή</button></a>
            </div>
          </div>
        </header>
      </div>
    </div>
    <div class="container" style="padding-top:200px;">
      <div class="row">
        <div class="col-sm">
          <div class="card border-danger mb-3" style="text-align:center;max-width: 12rem;">
            <div class="card-header">Κεφάλαιο 7</div>
            <div class="card-body">
              <a href="advanced/quiz_advanced.php?quizId=19"><button class="btn btn-custom3 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(1)" onmouseout="reset_text()">Quiz 19</button></a>
              <a href="advanced/quiz_advanced.php?quizId=20"><button class="btn btn-custom3 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(1)" onmouseout="reset_text()">Quiz 20</button></a>
              <a href="advanced/quiz_advanced.php?quizId=21"><button class="btn btn-custom3 rounded-pill px-3" type="button" onmouseover="show_text(4)" onmouseout="reset_text()">Quiz 21</button></a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card border-danger mb-3" style="text-align:center;max-width: 12rem;">
            <div class="card-header">Κεφάλαιο 8</div>
            <div class="card-body">
              <a href="advanced/quiz_advanced.php?quizId=22"><button class="btn btn-custom3 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(2)" onmouseout="reset_text()">Quiz 22</button></a>
              <a href="advanced/quiz_advanced.php?quizId=23"><button class="btn btn-custom3 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(2)" onmouseout="reset_text()">Quiz 23</button></a>
              <a href="advanced/quiz_advanced.php?quizId=24"><button class="btn btn-custom3 rounded-pill px-3" type="button" onmouseover="show_text(4)" onmouseout="reset_text()">Quiz 24</button></a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card border-danger mb-3" style="text-align:center;max-width: 12rem;">
            <div class="card-header">Κεφάλαιο 9</div>
            <div class="card-body">
              <a href="advanced/quiz_advanced.php?quizId=25"><button class="btn btn-custom3 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(3)" onmouseout="reset_text()">Quiz 25</button></a>
              <a href="advanced/quiz_advanced.php?quizId=26"><button class="btn btn-custom3 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(3)" onmouseout="reset_text()">Quiz 26</button></a>
              <a href="advanced/quiz_advanced.php?quizId=27"><button class="btn btn-custom3 rounded-pill px-3" type="button" onmouseover="show_text(4)" onmouseout="reset_text()">Quiz 27</button></a>
            </div> 
          </div>
        </div>
        <div class="col-sm">
          <div class="card border-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Περιγραφή</div>
            <div class="card-body">
              <h5 class="card-title" id="dh">Κεφάλαιο</h5>
              <p class="card-text" id="dp">Τίτλος Ενότητας</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      title = ["Κεφάλαιο 9","Κεφάλαιο 10","Κεφάλαιο 11","Κεφάλαιο 12"];
      description = ["Η τέχνη στην Ακρόπολη κατά τη ρωμαϊκή και βυζαντινή εποχή","Η αναγέννηση της Ακρόπολης στη μεταβυζαντινή περίοδο","Η Ακρόπολη ως παγκόσμιο μνημείο και πολιτιστική κληρονομιά","Η Θρησκευτική αξία της Ακροπόλεως\n(Συμπήρωση κενών)"];
      //level_name = ["Level 1","Level 2","Level 3","Level 4","Level 5"];
    
      var b = document.getElementById("grade_bars");
      var i=0;
      function addElement(g,i,c)
      {
    
      newh = document.createElement("h4");
      newh.className = "small font-weight-bold";
      newh.id = "ppp";
      newh.innerHTML = i+": "+g+"%";
      news = document.createElement("span");
      news.className = "float-right";
      newDiv = document.createElement("div");
      newDiv.className = "progress mb-4";
      newDiv.id = "ppp";
      newContent = document.createElement("div");
      newContent.className = "progress-bar bg-"+c;
      newContent.style = "width: "+g+"%";
      newh.appendChild(news);
      newDiv.appendChild(newh);
      newDiv.appendChild(newContent);
    
    
      my_div = document.getElementById("gr");
      b.insertBefore(newh, my_div);
      b.insertBefore(newDiv, my_div);
      }
    
      function add(accumulator, a) {
        return accumulator + a;
      }
    
      
      function remove(){
        for(let j=0;j<i*2;j++){
        document.getElementById("ppp").remove();
      }
      i=0;
      }
    
      function set_advanced(){
        remove();
        grades_advanced.forEach(g => {
        i+=1;
        addElement(g,"Level "+i,"warning");
      });
      document.getElementById("prgth").innerHTML = parseInt(grades_advanced.reduce(add, 0)/7)+"%";
      document.getElementById("prgt").style = "width: "+parseInt(grades_advanced.reduce(add, 0)/7)+"%";
      }
    
      function show_text(a){
        document.getElementById("dh").innerHTML = title[a-1];
        document.getElementById("dp").innerHTML = description[a-1];
      }
    
      function reset_text(){
        document.getElementById("dh").innerHTML = "title";
        document.getElementById("dp").innerHTML = "Hover text";
      }
      
    </script>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    
        </body>
    </html>