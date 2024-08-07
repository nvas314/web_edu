<?php session_start();
if (!isset($_SESSION['user'])){
    header('location: sign-in.php');
} ?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="ico.png">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta charset="UTF-8" />
  <title>Προφίλ • AcropolisOnline</title>
 
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
  
</head>

<body onload="document.body.classList.add('loaded')">
	
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
              <a href="dashboard.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
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
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24" style="fill: currentColor;"><use xlink:href="#people-circle"/></svg>
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
	
	<div class="container" style="padding:10px;">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-xxl-4 my-5 mx-auto">
      <div class="d-grid gap-2">
      </div>
    </div>
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        </div>
      </div>
    </div>
    <div class="col-xxl-6 col-xxl-4 my-5 mx-auto d-flex justify-content-center">
      <div class="d-grid gap-2">
        <div class="card border-secondary mb-3" >
          <div class="card-header">Λεπτομέρειες λογαριασμού</div>
          <div class="card-body text-secondary">
            <h5 class="card-title">Στοιχεία χρήστη:</h5>
            <p class="card-text">
            <br>Username: <b><?php echo $_SESSION['user']['username'];?></b>
            <br>Όνομα: <b><?php echo $_SESSION['user']['first_name'];?></b>
            <br>Επώνυμο: <b><?php echo $_SESSION['user']['last_name'];?></b>
            <br>Email: <b><?php echo $_SESSION['user']['email'];?></b>
            <br>Επίπεδο: <b> <?php if($_SESSION['user']['current_level']==1){echo 'Αρχάριο';}
                              elseif($_SESSION['user']['current_level']==2){echo 'Μεσαίο';}
                              else{echo 'Προχωρημένο';}?></b>
              <br><br>
              <!-- Button trigger modal -->


<!-- Modal (not used)-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to delete your account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary " onclick="delete_account()" data-dismiss="modal">Delete account</button>
      </div>
    </div>
  </div>
</div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

function delete_account(){
  window.location.href="index.php";
}

</script>
<!-- ================================= -->

<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
crossorigin="anonymous"></script>
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