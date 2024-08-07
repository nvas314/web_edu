<?php
session_start();
if ($_SESSION['user']['current_level']<2){
  header('Location: ../quiz.php?msg3=user_level_error');

} ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Μεσαίο επίπεδο quiz</title>
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />
    <style>
      header {
        background-image: url('../img/yellow.jpg');
      }
      .card-header{
        background-image: url('../img/yellow_light.jpg');
      }
    </style>
  </head>
  <body data-spy="scroll" data-target="#navbar-example3" data-offset="20">
    <div class="container-fluid">
      <div class="row">
        <header class="py-3 mb-3 fixed-top">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <span class="fs-4">Μεσαίο επίπεδο quiz</span>
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
          <div class="card border-warning mb-3" style="text-align:center;max-width: 12rem;">
            <div class="card-header">Κεφάλαιο 4</div>
            <div class="card-body">
              <a href="intermediate/quiz_intermediate.php?quizId=10"><button class="btn btn-custom2 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(1)" onmouseout="reset_text()">Quiz 10</button></a>
              <a href="intermediate/quiz_intermediate.php?quizId=11"><button class="btn btn-custom2 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(1)" onmouseout="reset_text()">Quiz 11</button></a>
              <a href="intermediate/quiz_intermediate.php?quizId=12"><button class="btn btn-custom2 rounded-pill px-3" type="button" onmouseover="show_text(4)" onmouseout="reset_text()">Quiz 12</button></a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card border-warning mb-3" style="text-align:center;max-width: 12rem;">
            <div class="card-header">Κεφάλαιο 5</div>
            <div class="card-body">
              <a href="intermediate/quiz_intermediate.php?quizId=13"><button class="btn btn-custom2 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(2)" onmouseout="reset_text()">Quiz 13</button></a>
              <a href="intermediate/quiz_intermediate.php?quizId=14"><button class="btn btn-custom2 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(2)" onmouseout="reset_text()">Quiz 14</button></a>
              <a href="intermediate/quiz_intermediate.php?quizId=15"><button class="btn btn-custom2 rounded-pill px-3" type="button" onmouseover="show_text(4)" onmouseout="reset_text()">Quiz 15</button></a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card border-warning mb-3" style="text-align:center;max-width: 12rem;">
            <div class="card-header">Κεφάλαιο 6</div>
            <div class="card-body">
              <a href="intermediate/quiz_intermediate.php?quizId=16"><button class="btn btn-custom2 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(3)" onmouseout="reset_text()">Quiz 16</button></a>
              <a href="intermediate/quiz_intermediate.php?quizId=17"><button class="btn btn-custom2 rounded-pill px-3 mb-2" type="button" onmouseover="show_text(3)" onmouseout="reset_text()">Quiz 17</button></a>
              <a href="intermediate/quiz_intermediate.php?quizId=18"><button class="btn btn-custom2 rounded-pill px-3" type="button" onmouseover="show_text(4)" onmouseout="reset_text()">Quiz 18</button></a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card border-warning mb-3" style="max-width: 18rem;">
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
      title = ["Κεφάλαιο 5","Κεφάλαιο 6","Κεφάλαιο 7","Κεφάλαιο 8"];
      description = ["Η ζωή στην αρχαία Ακρόπολη","Η τέχνη και η πολιτιστική σημασία της Ακρόπολης","Η αρχαία Ακρόπολη στη λογοτεχνία και την τέχνη του 21ου αιώνα","Η αρχιτεκτονική του Παρθενώνα\n(Συμπήρωση κενών)"];
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
    
      function set_intermediate(){
        remove();
        grades_intermediate.forEach(g => {
        i+=1;
        addElement(g,"Level "+i,"warning");
      });
      document.getElementById("prgth").innerHTML = parseInt(grades_intermediate.reduce(add, 0)/7)+"%";
      document.getElementById("prgt").style = "width: "+parseInt(grades_intermediate.reduce(add, 0)/7)+"%";
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