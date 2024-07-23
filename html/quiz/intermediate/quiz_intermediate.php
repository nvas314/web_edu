<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="../../ico.png">
    <link rel="stylesheet" href="../../css/quiz.css"/>
    <link rel="stylesheet" href="../../css/quiz_i.css"/>
    <title id="page-title">Quiz</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <main class="d-flex justify-content-center">
      <div class="container-center bg-body-tertiary bordered-container">
        <div class="btn-top-right">
          <div class="btn-group">
            <a href="../../quiz.php" class="btn btn-outline-dark">Quiz</a>
            <a href="../intermediate.php" class="btn btn-outline-dark">Ακύρωση</a>
          </div>
        </div>
        <div class="d-flex flex-nowrap">
          <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary" style="width: 280px;">
            <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
              <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-5 fw-semibold" id="quiz-title">Μεσαίο επίπεδο</span>
            </a>
            <div id="list1" class="list-group list-group-flush border-bottom scrollarea">
              <div id="list"></div>
            </div>
          </div>
  
          <div class="container" style="margin: 30px;">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4" id="chapter"></span>
              </a>
            </header>
            <p id="qtext"></p>
            <p id="subtitle"></p>
            <div id="radiobox1" class="radio-container" style="margin-top:30px;">
              <input type="radio" id="1" name="answer" value="1">
              <label for="1" id="opt1">Option 1</label>
            </div>
            <div id="radiobox2" class="radio-container">
              <input type="radio" id="2" name="answer" value="2">
              <label for="2" id="opt2">Option 2</label>
            </div>
            <div id="radiobox3" class="radio-container">
              <input type="radio" id="3" name="answer" value="3">
              <label for="3" id="opt3">Option 3</label>
            </div>
            <div id="radiobox4" class="radio-container">
              <input type="radio" id="4" name="answer" value="4">
              <label for="4" id="opt4">Option 4</label>
            </div>
            <br>
            <div class="d-grid gap-2">
              <button class="btn btn-outline-dark" type="button" id="nextb" onclick="next()">Επόμενη ερώτηση</button>
              <button class="btn btn-outline-dark" type="button" id="compb">Υποβολή</button>
            </div>
            <form id="send_grade" action="../../control.php" method="post">
              <input type="hidden" id="quiz_id" name="quiz_id">
              <input type="hidden" id="grade" name="grade">
              <input type="hidden" id="form_name" name="form_name">
            </form>
          </div>
        </div>
      </div>
    </main>

    <script src="questions.js"></script>
    <script>
      $(document).ready(function (){
          $('#a0').addClass('active');
      });
  
      const urlParams = new URLSearchParams(window.location.search);
      const quizId = urlParams.get('quizId');
      const quiz = quizzes[quizId];
      
      if (quiz) {
          document.getElementById('page-title').textContent = quiz.title;
          const title = quiz.title1;
          const subtitle = quiz.subtitle;
          const questions = quiz.questions;
          const options = quiz.options;
          const answers = quiz.answers;
          const chapter = quiz.chapter;

          document.getElementById("chapter").innerText = chapter;

          var question = 0;
          var grade = 100;
          var ans_n = 0;
          for (let i =0;i<answers.length;i++){
            ans_n+= answers[i].length;//show all required answers (input text only)
          }

          document.getElementById("compb").style.display = "none";
          
         function show_radio(s){
            document.getElementById("radiobox1").style.display = s;
                document.getElementById("radiobox2").style.display = s;
                document.getElementById("radiobox3").style.display = s;
                document.getElementById("radiobox4").style.display = s;
          }
          function start(){
            if (question < questions.length) {
            
            if(options[question].length == 0){
              show_radio("none");
              q =questions[question];
              for(let i=0;i<answers[question].length;i++){
                q = q.replace("{}","<input type=\"text\" id=\"q"+i+"\" name=\"fname\">")
              }
              document.getElementById("qtext").innerHTML = q;
              document.getElementById("q0").focus();
          }
          else{
            show_radio("block");
            document.getElementById("qtext").innerHTML = questions[question];
                document.getElementById("opt1").innerHTML = options[question][0];
                document.getElementById("opt2").innerHTML = options[question][1];
                document.getElementById("opt3").innerHTML = options[question][2];
                document.getElementById("opt4").innerHTML = options[question][3];
                document.querySelectorAll('input[type="radio"]').forEach(radio => radio.checked = false);
                if (question == questions.length - 1) {
                    document.getElementById("nextb").style.display = "none";
                    document.getElementById("compb").style.display = "block";
                }
            }
                $("a").removeClass('active');
                $('#a' + question).addClass('active');
                $('#not').addClass('active');
          }
          }
          function next() {
            if(options){
              if(options[question].length == 0){
              for(let i = 0;i<answers[question].length;i++){
              if(!( $('#q' + i).val() == answers[question][i])) grade -= 100/ans_n;//ans_n = how many false answers you can get (if all false answers then ans_n almost 0)
              }
              }
              else{
              if (document.querySelectorAll('input[type="radio"]:checked').length === 0) {
                  alert("Παρακαλώ επιλέξτε μια απάντηση πριν προχωρήσετε.");
                  return;
              }
              if (!document.getElementById(answers[question]).checked) grade -= 20;
            }
             question++;
             
             if (question < questions.length) {
            
              if(options[question].length == 0){
                show_radio("none");
                q =questions[question];
                a=0;
                for(let i=0;i<answers[question].length;i++){
                  q = q.replace("{}","<input type=\"text\" id=\"q"+i+"\" name=\"fname\">")
                }
                document.getElementById("q0").focus();
                document.getElementById("qtext").innerHTML = q;
            }
            else{
              show_radio("block");
              document.getElementById("qtext").innerHTML = questions[question];
                  document.getElementById("opt1").innerHTML = options[question][0];
                  document.getElementById("opt2").innerHTML = options[question][1];
                  document.getElementById("opt3").innerHTML = options[question][2];
                  document.getElementById("opt4").innerHTML = options[question][3];
                  document.querySelectorAll('input[type="radio"]').forEach(radio => radio.checked = false);
                  if (question == questions.length - 1) {
                      document.getElementById("nextb").style.display = "none";
                      document.getElementById("compb").style.display = "block";
                  }
                }
                  $("a").removeClass('active');
                  $('#a' + question).addClass('active');
                  $('#not').addClass('active');
              }
            
            }
            if (question == questions.length-1) document.getElementById("nextb").style.display = "none";
            if (question == questions.length-1) document.getElementById("compb").style.display = "block";
          }
  
          function complete_quiz() {
            if(options[question].length == 0){
              for(let i = 0;i<answers[question].length;i++){
              if(!( $('#q' + i).val() == answers[question][i])) grade -= 100/ans_n;
              }
              }
              else{
              if (document.querySelectorAll('input[type="radio"]:checked').length === 0) {
                  alert("Παρακαλώ επιλέξτε μια απάντηση πριν προχωρήσετε.");
                  return;
              }
              if (!document.getElementById(answers[question]).checked) grade -= 20;//ans_n = 5
            }
            grade = Math.floor(grade);
            if(grade<0){
              grade=0;
            }
            alert("Bravo, your grade is " + grade);
                document.getElementById('grade').value = grade;
                document.getElementById('quiz_id').value = quizId;
                document.getElementById('form_name').value = 'grade_form';
                document.getElementById('send_grade').submit();
                // Save grade to db
            }
          start();
          document.getElementById("nextb").onclick = function() { next() };
          document.getElementById("compb").onclick = function() { complete_quiz() };
          
          function addElement(t, s, i) {
              aa = document.createElement("a");
              aa.className = "list-group-item list-group-item-action py-3 lh-sm";
              aa.id = "a" + i;
              flex = document.createElement("div");
              flex.className = "d-flex w-100 align-items-center justify-content-between";
              str = document.createElement("strong");
              str.className = "mb-1";
              str.innerHTML = t;
              sma = document.createElement("small");
              sma.innerHTML = i + 1 + "/" + title.length;
              sub = document.createElement("div");
              sub.className = "col-10 mb-1 small subtitle-small";
              sub.innerHTML = s;
              aa.appendChild(flex);
              flex.appendChild(str);
              flex.appendChild(sma);
              aa.appendChild(sub);
  
              b = document.getElementById("list1");
              my_div = document.getElementById("list");
              b.insertBefore(aa, my_div);
          }
              var i = 0;
              answers.forEach((item, index) => {
              addElement(title[index], subtitle[index], index);
          }); 
        }
          </script>
    

<script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="../../sidebars.js"></script></body>
</html>